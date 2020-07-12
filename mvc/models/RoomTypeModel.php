<?php
    class RoomTypeModel extends DB{
        //get All RoomType
        public function getAllRoomType(){
            try {
                $conn = $this -> __construct();
                $sql = "SELECT * FROM `roomtype` WHERE 1 ";
                if( $result = $conn -> query($sql) ) 
                {
                    if( $result -> num_rows > 0) {
                        $this -> closeConnection();
                        return $result;
                    }
                }
            }
            catch( Exception $e ){
                echo "Something was wrong".$e;
            }
        }
        //Function close connection
        public function closeConnection(){
            $conn = $this -> __construct();
            return mysqli_close($conn);
        }
    }
?>