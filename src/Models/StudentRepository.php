<?php
namespace Mvc\Models;
use Mvc\Models\StudentResourceModel;

class StudentRepository
{
    private StudentResourceModel $studentResourceModel;

   
    public function __construct()
    {
        $this->studentResourceModel = new StudentResourceModel();
    }

     # $model la object
    public function add($model)
    {
        return $this->studentResourceModel->save($model);
    }

    public function get($id)
    {
        return $this->studentResourceModel->get($id);
    }
    
    public function getAll($model)
    {
        return $this->studentResourceModel->getAll($model);
    }

    public function delete($model)
    {   
        return $this->studentResourceModel->delete($model);
    }
}