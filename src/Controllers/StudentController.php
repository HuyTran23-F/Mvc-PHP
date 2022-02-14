<?php
namespace Mvc\Controllers;
echo "<pre>";
use Mvc\Core\Controller;
use Mvc\Models\StudentModel;
use Mvc\Models\StudentRepository;

class StudentController extends Controller
{
    function index()
    {
        $student = new StudentRepository();

        $d['student'] = $student->getAll([]);
        $this->set($d);
        $this->render("index");
    }


    function create()
    {
        if (isset($_POST["ten"])) {
            $id = 0;
            $name = $_POST["ten"];
            $dateofbirth = $_POST["dateofbirth"];
        //     // var_dump($_POST);
          
        //    echo $dateofbirth;
        //    die('die');
            $gioitinh = $_POST["gioitinh"];
            $form = [
                'ten' => $name,
                'dateofbirth' => $dateofbirth,
                'gioitinh' => $gioitinh
            ];
            //secure form
            $form = $this->secure_form($form);
            $obj_student = new StudentModel();
            $obj_student->set($id, $form['ten'], $form['dateofbirth'], $form['gioitinh']);
            $stud = new StudentRepository();

            if ($stud->add($obj_student)) {
                header("Location: " . WEBROOT . "Student/index");
            }
        }

        $this->render("create");
    }

    function edit($id)
    {
        $student = new StudentRepository();
        $d["student"] = $student->get($id);

        if (isset($_POST["ten"])) {

            //get form data
            $id = $id;
            $name = $_POST["ten"];
            $dateofbirth = $_POST["dateofbirth"];
            $gioitinh = $_POST["gioitinh"];
            $form = [
                'ten' => $name,
                'dateofbirth' => $dateofbirth,
                'gioitinh' => $gioitinh
            ];

            //secure form
            $form = $this->secure_form($form);
            $obj_student = new StudentModel();
            $obj_student->set($id, $form['ten'], $form['dateofbirth'], $form['gioitinh']);

            if ($student->add($obj_student)) {
                header("Location: " . WEBROOT . "Student/index");
            }
        }
        $this->set($d);
        $this->render("edit");
    }


    
    # delete
    function delete($id)
    {
        $student = new StudentRepository();

        if ($student->delete($id)) {
            header("Location: " . WEBROOT . "Student/index");
        }
    }
}
