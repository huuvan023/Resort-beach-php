<?php
    class Home extends Controller {  
        public $teo; 
        public function SayHi(){
            $teo = $this -> model("SinhVienModel");
            echo ($teo -> getSinhVien());
        }
        public function Show($a,$b){
            //Model
            $test = $this -> model("SinhVienModel");
            $tong = $test->Show($a,$b);
            //View
            $this -> view("aodep", ["Number" => $tong, "Page" => "News", "Teo" => $test -> SinhVien()]);
        }
    }
?>