<?php
	class addUsers extends Controller{
		public function __construct(){
			parent:: __construct();

			// $act = isset($_GET["act"])?$_GET["act"]:"";
			// switch ($act) {
			// 	case 'add':
			// 		$fullname = $_POST["fullname"];
			// 		$username = $_POST["username"];
			// 		$email =  $_POST["email"];
			// 		$password =  $_POST["password"];
			// 		$repass =  $_POST["repass"];
			// 		$gender =  $_POST["gender"];
			// 		$phone =  $_POST["userPhoneNumber"];
			// 		$address = $_POST["userAddress"];
			// 		if($password != $repass){
			// 			//header("location: index.php?controller=users/add&err=false ");
			// 		}
			// 		else{
			// 			$vkey = new Token();
			// 			$strVkey = $vkey->generate(32);
			// 			$this->Model->execute("insert into user(fullname, loginname, password, email, gender, phonenumber, vkey, address, confirm)
			// 				value('$fullname', '$username', '$password', '$email', '$gender', '$phone', '$strVkey', '$address', '1') ");
			// 			//header("location: index.php?controller=users/list");
			// 		}
			// 		break;
			// }

			include "views/users/addView.php";
		}
	}
	new addUsers();
?>