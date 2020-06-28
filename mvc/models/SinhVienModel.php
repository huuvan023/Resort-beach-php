<?php
    class SinhVienModel extends DB{
        public function getSinhVien(){
            //connect database
            return "Nguuyen Van A";
        }
        public function Show($a,$b){
            return $a + $b;
        }
        public function SinhVien(){
            $qr = "SELECT hoten FROM sinhvien";
            return mysqli_query($this -> con, $qr);
        }
    }
?>