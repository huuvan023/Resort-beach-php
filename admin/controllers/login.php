<?php
	class login extends Controller{

		public function __construct(){

			parent:: __construct();

			if($_SERVER["REQUEST_METHOD"] == "POST"){
				$email = $_POST["email"];
				$password = $_POST["password"];
				
				$check = $this->Model->fetchOne("select * from user where email='$email'");

				if(isset($check["email"]) ) {
					if($password == $check["password"] && $check["userid"] < 10) {
						$_SESSION["account"] = $email;
						$_SESSION["name"] = $check["fullname"];
						header("location: index.php");
					}
				}
				else{
					
				}
			}

			include "views/login.php";

		}

	}
	new login();
?>
