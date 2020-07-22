<?php
	class login extends Controller{

		public function __construct(){

			parent:: __construct();

			if($_SERVER["REQUEST_METHOD"] == "POST"){
				$email = $_POST["email"];
				$password = $_POST["password"];
				
<<<<<<< HEAD
				$check = $this->Model->fetchOne("select * from admin where email='$email' LIMIT 1");
				if(isset($check["email"]) ) {
					if($password == $check["password"]) { 
						$_SESSION["account"] = $email;
						$_SESSION["name"] = $check["loginname"];
=======
				$check = $this->Model->fetchOne("select * from user where email='$email'");

				if(isset($check["email"]) ) {
					if($password == $check["password"] && $check["userid"] < 10) { // NEU ID < 10 THI CHO PHEP LOGIN, QUYEN DANG NHAP CHO NAY
						$_SESSION["account"] = $email;
						$_SESSION["name"] = $check["fullname"];
>>>>>>> 0c797f9db95e8ec3a86cf17372cb6156cb50d0f8
						header("location: index.php");
					}
					else{ // HIEN THI THONG BAO O DAY
						echo '<script language="javascript">';
						echo 'alert("Bạn không có quyền truy cập vào trang này!")';
						echo '</script>';
						}
<<<<<<< HEAD
				}
                else {
                    echo '<script language="javascript">';
						echo 'alert("Sai tên tài khoản hoặc mật khẩu !")';
						echo '</script>';
                }
=======
				}//thu lai
>>>>>>> 0c797f9db95e8ec3a86cf17372cb6156cb50d0f8
				
			}
			include "views/login.php";

		}
	}
	new login();
?>
