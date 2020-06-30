<?php
    class Login extends Controller {  
        public function LoginPage($page){
            //Xu li $page, neu $page == ... thi lam sao con ko bang thi lam sao
            $teo = $this -> model("SinhVienModel");
            $this -> view("LoginPage",["Dashboard" => $this->dashboard,"Page" => $page]);
        }
        
    }
?>