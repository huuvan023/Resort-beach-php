<?php
    class DB {
        //DB infor
        /*
        public $con; //connection
        protected $servername = "sql302.epizy.com";
        protected $username = "epiz_26165405";
        protected $password = "cdqfwqjLnzon9"; 
        protected $dbname = "epiz_26165405_resortbeach";
        */
        public $con; //connection
        protected $servername = "localhost";
        protected $username = "root";
        protected $password = ""; 
<<<<<<< HEAD
        protected $dbname = "resortProject";
        function __construct()
        {
=======
        protected $dbname = "resortproject";
        function __construct()
        {
            /*try {
                $conn = new PDO("mysql:host=".$this -> servername.";dbname=". $this -> dbname.",". $this -> username .".,". $this -> password );
                            // set the PDO error mode to exception
                            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                            $sql = "INSERT INTO user(userid, fullname, loginname, password, email, gender, phonenumber, address) 
                            VALUES ('','1','hvan','hvannn','asd@asd.com','1',23123,'ASdasd')";
                // use exec() because no results are returned
                $conn->exec($sql);
                echo "New record created successfully";
            } catch(PDOException $e) {
                echo $sql . "<br>" . $e->getMessage();
            }
            $conn = null;*/
>>>>>>> 0c797f9db95e8ec3a86cf17372cb6156cb50d0f8
            $conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);
            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            else {
                return $conn;
            }
        }
    }
?>