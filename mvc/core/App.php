<?php
    class App{
        protected $controller = "Home";
        protected $action = "IndexPage";
        protected $params = ["index"];
 
        function construct(){
            $arr = $this->URLProcess();
            unset($arr[0]); 
            //http://localhost/WebProject-2020-master/Home/SayHi/1/2/3
            //Handle controller
            if ( $arr != NULL ) {
                if ( file_exists( "./mvc/controllers/".$arr[1].".php") == true  ) {
                    $this-> controller = $arr[1];
                    unset($arr[1]);
                }
            }
            require_once("./mvc/controllers/". $this -> controller .".php");
            $this -> controller = new $this->controller;
            //Handle action
            if ( $arr != NULL) {
                if ( isset($arr[2]) ) {
                    if( method_exists( $this-> controller , $arr[2] ) ) {
                        $this->action = $arr[2];
                    }
                    unset($arr[2]);
                }
                //Handle params
                $this -> params = $arr  ? array_values($arr) : [];
                //Initialization Class
                //[] class name and fuction name
                //params
            }
            call_user_func_array([$this->controller, $this->action], $this->params );
        }
        function URLProcess() {
            //Array ( [0] => Home [1] => SayHi [2] => 1 [3] => 2 [4] => 3 )
            $url = "$_SERVER[REQUEST_URI]";
            if ( isset($url) ) {
                return explode("/",filter_var(trim($url,"/")));
            }
        }
    }
?>