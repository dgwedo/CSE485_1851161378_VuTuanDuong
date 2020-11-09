<?php
class App
{
    protected $controller = "Home";
    protected $action = "sayHi";
    protected $params = [];

    function __construct()
    {
        $arr = $this->urlProcess();
        // print_r($arr);

        // xu ly controller
        if (file_exists("./mvc/controllers/" . $arr[0] . ".php")) {
            $this->controller = $arr[0];
            unset($arr[0]);
        }
        require_once("./mvc/controllers/" . $this->controller . ".php");
        $this->controller = new $this->controller;
        // xu ly action 
        if (isset($arr[1])) {
            if (method_exists($this->controller, $arr[1])) {
                $this->action = $arr[1];
            }
            unset($arr[1]);
            // echo $this->action;
        }

        // xu ly params
        $this->params = $arr ? array_values($arr) : [];
        // print_r($this->params);
        call_user_func_array([$this->controller, $this->action], $this->params);
    }

    function urlProcess()
    {
        if (isset($_GET["url"])) {
            //explode("/", filter_var(trim($_GET["url"], "/")));
            return explode("/", filter_var(trim($_GET["url"], "/")));;
        }
    }
}
