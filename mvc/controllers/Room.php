<?php
    class Room extends Controller {  
        public function RoomPage($page){
            //Xu li $page, neu $page == ... thi lam sao con ko bang thi lam sao
            $teo = $this -> model("SinhVienModel");
            $this -> view("RoomPage",["Dashboard" => $this->dashboard,"Page" => $page]);
        }
        
    }
?>