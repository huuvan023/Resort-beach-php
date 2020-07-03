<?php
    class UserModel extends DB{
        public function insertUser($userFullName, $userName, $userPass, $userEmail,$vkey, $userGender, $userPhoneNumber, $userAddress) {
            $conn = $this -> __construct();
            $sql = "INSERT INTO user(userid, fullname, loginname, password, email,vkey, gender, phonenumber, address,confirm) 
                    VALUES ('','$userFullName','$userName','$userPass','$userEmail','$vkey','$userGender',$userPhoneNumber,'$userAddress',0)";    
            if ( mysqli_query($conn, $sql) ) {
                return true;
            }
            else return false;
        }
        public function checkExitsEmail($userEmail){
            $conn = $this -> __construct();
            $sql = "SELECT * FROM user WHERE email ='$userEmail'";
            $checkMail = mysqli_query($conn,$sql);
            return mysqli_num_rows($checkMail) == 0;
        }
    }
?>