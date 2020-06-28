<?php
    class App{
        protected $controller = "Home";
        protected $action = "SayHi";
        protected $params = [];
 
        function construct(){
            $arr = $this->URLProcess();
            //http://localhost/WebProject-2020-master/index.php?url=Home/SayHi/1/2/3
            //Handle controller
            if ( file_exists( "./mvc/controllers/".$arr[0].".php")  ) {
                $this-> controller = $arr[0];
                unset($arr[0]);
            }
            require_once("./mvc/controllers/". $this -> controller .".php");
            $this -> controller = new $this->controller;
            //Handle action
            if ( isset($arr[1]) ) {
                if( method_exists( $this-> controller , $arr[1] ) ) {
                    $this->action = $arr[1];
                }
                unset($arr[1]);
            }
            //Handle params
            $this -> params = $arr  ? array_values($arr) : [];
            //Initialization Class
            //[] class name and fuction name
            //params
            call_user_func_array([$this->controller, $this->action], $this->params );
        }
        function URLProcess() {
            //Array ( [0] => Home [1] => SayHi [2] => 1 [3] => 2 [4] => 3 )
            if ( isset($_GET["url"]) ) {
                return explode("/",filter_var(trim($_GET["url"],"/")));
            }
        }
    }
?>