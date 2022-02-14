<?php
namespace Mvc\Models;
use Mvc\Models\TaskResourceModel;

class TaskRepository
{
    private TaskResourceModel $TaskReSourceModel;

   
    public function __construct()
    {
        $this->TaskReSourceModel = new TaskResourceModel();
    }

     # $model la object
    public function add(\Mvc\Models\TaskModel $model)
    {
        return $this->TaskReSourceModel->save($model);
    }

    public function get($id)
    {
        return $this->TaskReSourceModel->get($id);
    }
    
    public function getAll($model)
    {
        return $this->TaskReSourceModel->getAll($model);
    }

    public function delete($model)
    {   
        return $this->TaskReSourceModel->delete($model);
    }
}