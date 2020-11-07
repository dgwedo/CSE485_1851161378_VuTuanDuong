<?php
class App
{
    protected $controller = "Home";
    protected $action = "";
    protected $params = "";


    function __construct()
    {
        $arr = $this->urlProcess();
        /** array
         * $arr[0] = controler
         * $arr[1] = action
         * $arr[2] = params
         */

        //print_r($arr);

        // xu ly controller
        if (file_exists("./mvc/controller/" . $arr[0] . ".php")) {
            $this->controller = $arr[0];
        }

        require_once("./mvc/controllers/" . $this->controller . ".php");

        // xu ly action
        if (isset($arr[1])) {
            // ktra action ~ method ton tai
            if (method_exists($this->controller, $arr[1])) {
                $this->action = $arr[1];
            }
        }
    }
    // $controller = $this->$arr[0];

    function urlProcess()
    {
        if (isset($_GET["url"])) {
            return explode("/", filter_var(trim($_GET["url"], "/")));
        }
    }
}
