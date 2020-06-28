<?php
    class DB {
        //DB infor
        public $con; //connection
        protected $servername = "localhost";
        protected $username = "root";
        protected $password = ""; 
        protected $dbname = "mvc";

        function __construct()
        {
            $this -> con = mysqli_connect($this -> servername,$this -> username,$this -> password);
            mysqli_select_db($this -> con,$this -> dbname);
            mysqli_query($this -> con, "SET NAMES 'utf-8'");
        }
    }
?>