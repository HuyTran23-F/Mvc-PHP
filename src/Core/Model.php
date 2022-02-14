<?php
namespace Mvc\Core;

class Model
{
    public function getProperties()
    {
        # get_object_var tra ve 1 mang lien hop, k tra ve gia tri
        # no se tra ve null
        $properties= get_object_vars($this);
        return $properties;
    }
}

?>