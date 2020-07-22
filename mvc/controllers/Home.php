<?php
    class Home extends Controller {  
        public function IndexPage($page){
            $RoomTypeModel = $this -> model("RoomTypeModel");
            $RoomType = $RoomTypeModel -> getAllRoomType();
            $RType = array();
            //fetch data
            while( $row = $RoomType -> fetch_assoc() ) {
                array_push($RType, $row);
            }
            
            $Rooms = $this -> model("RoomsModel");
            $Roomss = $Rooms -> getPopularRoom();
<<<<<<< HEAD
            $RoomNews = $Rooms -> getRoomNews();
            $RoomPopular = array();
            $RNewss = array();
            while( $row2 = $Roomss -> fetch_assoc() ) {
                array_push($RoomPopular, $row2);
            }
            while( $row3 = $RoomNews -> fetch_assoc() ) {
                array_push($RNewss, $row3);
            }
            $this -> view("IndexPage",["Dashboard" => $this->dashboard,"Page" => $page,"RoomTypes" => $RType,"RoomPopular" => $RoomPopular, "RommNew" => $RNewss ]);
=======
            $RoomPopular = array();
            while( $row2 = $Roomss -> fetch_assoc() ) {
                array_push($RoomPopular, $row2);
            }
            $this -> view("IndexPage",["Dashboard" => $this->dashboard,"Page" => $page,"RoomTypes" => $RType,"RoomPopular" => $RoomPopular]);
>>>>>>> 0c797f9db95e8ec3a86cf17372cb6156cb50d0f8
        }
    }
?>