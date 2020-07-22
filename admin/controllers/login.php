<?php
	class login extends Controller{

		public function __construct(){

			parent:: __construct();

			if($_SERVER["REQUEST_METHOD"] == "POST"){
				$email = $_POST["email"];
				$password = $_POST["password"];
				
				$check = $this->Model->fetchOne("select * from user where email='$email'");

				if(isset($check["email"]) ) {
					if($password == $check["password"] && $check["userid"] < 10) { // NEU ID < 10 THI CHO PHEP LOGIN, QUYEN DANG NHAP CHO NAY
						$_SESSION["account"] = $email;
						$_SESSION["name"] = $check["fullname"];
						header("location: index.php");
					}
					else{ // HIEN THI THONG BAO O DAY
						echo '<script language="javascript">';
						echo 'alert("Bạn không có quyền truy cập vào trang này!")';
						echo '</script>';
						}
				}//thu lai
				
			}
			include "views/login.php";

		}
	}
	new login();
?>
