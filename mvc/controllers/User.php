<?php
    class User extends Controller {  
        public function UserPage($page){
            //Xu li $page, neu $page == ... thi lam sao con ko bang thi lam sao
            $teo = $this -> model("SinhVienModel");
            $this -> view("UserPage",["Dashboard" => $this->dashboard,"Page" => $page]);
        }
        
    }
?>