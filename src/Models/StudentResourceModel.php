<?php
namespace Mvc\Models;

use Mvc\Core\ResourceModel;
use Mvc\Models\StudentModel;

class StudentResourceModel extends ResourceModel
{
    public function __construct()
    {
        parent::_init("student", "student_id", new StudentModel);
    }
}