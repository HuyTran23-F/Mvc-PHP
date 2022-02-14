<?php
namespace Mvc\Controllers;
echo "<pre>";

use Mvc\Core\Controller;
use Mvc\Models\TaskModel;
use Mvc\Models\TaskRepository;

class TasksController extends Controller
{
    function index()
    {
        $tasks = new TaskRepository();

        $d['tasks'] = $tasks->getAll([]);
        $this->set($d);
        $this->render("index");
    }

    # create 
    function create()
    {
        if (isset($_POST["title"])) {
            //get form data

            $id = 0;
            $title = $_POST["title"];
            $description = $_POST["description"];
            $form = [
                'title' => $title,
                'description' => $description
            ];

            //secure form
            $form = $this->secure_form($form);
            $obj_taskModel = new TaskModel();
            $obj_taskModel->set($id, $form['title'], $form['description']);
            $tasks = new TaskRepository();

            if ($tasks->add($obj_taskModel)) {
                header("Location: " . WEBROOT . "Tasks/index");
            }
        }

        $this->render("create");
    }

    # edit (Update)
    function edit($id) 
    {
        $tasks = new TaskRepository();
        $d['tasks'] = $tasks->get($id);

        if(isset($_POST['title']))
        {
           $id = $id;
           $title = $_POST['title'];
           $description = $_POST['description'];

           $form = [
            'title' => $title,
            'description' => $description
            ];

            # call secure_form at controller
            $form = $this->secure_form($form);

            $obj_taskModel = new TaskModel();
            $obj_taskModel->set($id, $form['title'], $form['description']);

            if($tasks->add($obj_taskModel))
            {
                header("Location:" . WEBROOT . "Tasks/index");
            }
        }
        $this->set($d);
        $this->render("edit");
    }

    # delete
    function delete($id)
    {
        $task = new TaskRepository();

        if ($task->delete($id)) {
            header("Location: " . WEBROOT . "Tasks/index");
        }
    }
}
?>