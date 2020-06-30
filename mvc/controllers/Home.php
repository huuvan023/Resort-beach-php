<?php
    class Home extends Controller {  
        public function IndexPage($page){
            $teo = $this -> model("SinhVienModel");
            $this -> view("IndexPage",["Dashboard" => $this->dashboard,"Page" => $page]);
        }
    }
?>