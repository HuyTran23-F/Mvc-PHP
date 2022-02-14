<?php
namespace Mvc\Models;

use Mvc\Core\Model;
use Mvc\Config\Database;
use PDO;

class StudentModel extends Model
{
    protected $id;
    protected $name;
    protected $dob;
    protected bool $gender;


    public function get()
    {
        $array = [
            "id" => $this->id,
            "ten" => $this->name,
            "dateofbirth" => $this->dob,
            "gioitinh" => $this->gender,
        ];
        return $array;

        
    }

    public function set( $id, $name, $dob, $gender)
    {
        $this->id = $id;
        $this->name = $name;
        $this->dob = $dob;
        $this->gender = $gender;
    }

    // /**
    //  * Get the value of id
    //  */ 
    // public function getId()
    // {
    //     return $this->id;
    // }

    // /**
    //  * Set the value of id
    //  *
    //  * @return  self
    //  */ 
    // public function setId($id)
    // {
    //     $this->id = $id;

    //     return $this;
    // }

    // /**
    //  * Get the value of name
    //  */ 
    // public function getName()
    // {
    //     return $this->name;
    // }

    // /**
    //  * Set the value of name
    //  *
    //  * @return  self
    //  */ 
    // public function setName($name)
    // {
    //     $this->name = $name;

    //     return $this;
    // }

    // /**
    //  * Get the value of dob
    //  */ 
    // public function getDob()
    // {
    //     return $this->dob;
    // }

    // /**
    //  * Set the value of dob
    //  *
    //  * @return  self
    //  */ 
    // public function setDob($dob)
    // {
    //     $this->dob = $dob;

    //     return $this;
    // }

    // /**
    //  * Get the value of gender
    //  */ 
    // public function getGender()
    // {
    //     return $this->gender;
    // }

    // /**
    //  * Set the value of gender
    //  *
    //  * @return  self
    //  */ 
    // public function setGender($gender)
    // {
    //     $this->gender = $gender;

    //     return $this;
    // }
}