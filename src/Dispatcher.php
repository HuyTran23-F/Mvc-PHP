<?php
namespace Mvc;
echo "<pre>";
class Dispatcher
{

    private $request;

    public function dispatch()
    {
        $this->request = new Request();
        // var_dump($this->request);
        Router::parse($this->request->url, $this->request);
        
        $controller = $this->loadController();

        call_user_func_array([$controller, $this->request->action], $this->request->params);
        
    }

    public function loadController()
    {
        $name = ucfirst($this->request->controller . "Controller");
        
        $controller = "Mvc\\Controllers\\$name";
        return new $controller;
    }

}
?>