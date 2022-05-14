<?php
    class App{

        protected $controller = "home";//loginSignup
        protected $action = "index";
        protected $params;

        function __construct(){
            $arr = $this ->UrlProcess();
            //print_r($arr);

            // xu ly controller
            if(isset($arr[0])){
                if( file_exists("./mvc/controllers/".$arr[0].".php")){
                $this->controller = $arr[0];
                unset($arr[0]);
                }else{
                    require_once "./mvc/core/error.php";
                    return;
                }
            }
            require_once "./mvc/controllers/".$this->controller.".php";
            $this->controller = new $this->controller;
            // xu ly action
            if(isset($arr[1])){
                if(method_exists($this->controller,$arr[1])){
                    $this->action = $arr[1];
                }
                unset($arr[1]);
            }

            // xu ly params
            $this->params = $arr?array_values($arr):[];

            call_user_func_array([$this->controller, $this->action], $this->params);
        }

        function UrlProcess(){
            if(isset ($_GET["url"])){
                return explode("/",filter_var(trim($_GET["url"],"/")));
            }
        }
    }
?>