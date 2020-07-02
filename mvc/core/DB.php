<?php
    class DB {
        //DB infor
        public $con; //connection
        protected $servername = "localhost";
        protected $username = "root";
        protected $password = ""; 
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