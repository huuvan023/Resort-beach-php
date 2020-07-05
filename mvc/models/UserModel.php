<?php
    class UserModel extends DB{
        //Function inserUser to database
        public function insertUser($userFullName, $userName, $userPass, $userEmail,$vkey, $userGender, $userPhoneNumber, $userAddress) {
            $conn = $this -> __construct();
            $sql = "INSERT INTO user(userid, fullname, loginname, password, email,vkey, gender, phonenumber, address,confirm) 
                    VALUES ('','$userFullName','$userName','$userPass','$userEmail','$vkey','$userGender',$userPhoneNumber,'$userAddress',0)";    
            if ( mysqli_query($conn, $sql) ) {
                mysqli_set_charset($conn,'utf8');
                mysqli_query($conn,"SET NAMES 'UTF8'");
                return true;
            }
            else return false;
        }
        //Function close connection
        public function closeConnection(){
            $conn = $this -> __construct();
            return mysqli_close($conn);
        }
        //Function check exits Email
        public function checkExitsEmail($userEmail){
            $conn = $this -> __construct();
            $sql = "SELECT * FROM user WHERE email ='$userEmail'";
            $checkMail = mysqli_query($conn,$sql);
            if ( mysqli_num_rows($checkMail) == 0 )
            return true;
            else return false;
        }
        //Function check login name
        public function checkExitsLoginName($userName){
            $conn = $this -> __construct();
            $sql = "SELECT * FROM user WHERE loginname ='$userName'";
            $checkName = mysqli_query($conn,$sql);
            if ( mysqli_num_rows($checkName) == 0 )
            return true;
            else return false;
        }
        //Function login
        public function Login( $name, $pass ) {
            $conn = $this -> __construct();
            $sql = "SELECT * from user WHERE loginname='$name' AND password='$pass' LIMIT 1";
            if ( $result = mysqli_query($conn, $sql) ) {
                if( mysqli_num_rows($result) > 0 ) {
                    return $row = $result -> fetch_assoc();
                }
            }
        }
    }
?>