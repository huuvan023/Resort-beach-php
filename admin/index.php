
<?php
	session_start();
	include "../config/Config.php";
	include "../config/Model.php";
	include "../config/Controller.php";
	include "../config/RemoveUnicode.php";
	include "../config/Token.php";

        //Check Input function 
    function test_input($data) {
        $data = trim($data);                    //strip unnecessary characters
        $data = stripslashes($data);            //remove backslashes
        $data = htmlspecialchars($data);        //Escape htmlSpecialChar
        return $data;
    }

	if( isset($_POST["action"]) ) {
		if ( $_POST["action"]=="delete" ) {
			$id = $_POST["id"];
			$model = new Model();
			$a = $model->execute("delete from user where userid=$id");		
			if( $a ) {
				echo "thanh cong";
			}
		}
		if ( $_POST["action"]=="add" ) {
			$username = $fullname = $email = $password = $repass = $gender = $phone = $address ="";
			// echo "thanh cong";
			if( isset($_POST["fullname"]) ) {
				$fullname = test_input($_POST["fullname"]);
				$username = $_POST["username"];
				$email =  $_POST["email"];
				$password =  $_POST["password"];
				$repass =  $_POST["repass"];
				$gender =  $_POST["gender"];
				$phone =  $_POST["userPhoneNumber"];
				$address = $_POST["userAddress"];
				$vkey = new Token();
	 			$strVkey = $vkey->generate(32);

	 			$model = new Model();

	 			if($password != $repass){

	 			}
	 			else{
	 				$a = $model->execute("insert into user(fullname, loginname, password, email, gender, phonenumber, vkey, address, confirm)
			 				value('$fullname', '$username', '$password', '$email', '$gender', '$phone', '$strVkey', '$address', '1') ");
		 			if( $a ){
		 				echo "thanh cong";
		 			}
	 			}
	 			
			}
		}
		if( $_POST["action"]=="edit"){
			if( isset($_POST["email"]) ) {
				$id = $_POST["id"];
				$fullname = test_input($_POST["fullname"]);
				$password =  $_POST["password"];
				$gender =  $_POST["gender"];
				$phone =  $_POST["userPhoneNumber"];
				$address = $_POST["userAddress"];

				$model = new Model();
				$a1 = $model->execute("update user set fullname='$fullname' where userid='$id'");
				$a2 = $model->execute("update user set gender='$gender' where userid='$id'");
				$a3 = $model->execute("update user set phonenumber='$phone' where userid='$id'");
				$a4 = $model->execute("update user set address='$address ' where userid='$id'");
				if($password != ''){
					$model->execute("update user set password='$password' where userid='$id'");
				}
				if( $a1 == true && $a2 == true && $a3 == true && $a4 == true ){
					echo "thanh cong";
				}
				// $id = $_POST["id"];
				// $model = new Model();
				// $a = $model->execute("update user set fullname='$fullname' where userid='$id'");
				// if( $a ) {
				// 	echo "thanh cong";
				// }
			}
			
		}
	}
	else {
			if(isset($_GET["act"]) && $_GET["act"]=="logout"){
					unset($_SESSION["account"]);
				}


				if(isset($_SESSION['account'])) {
					$controller = isset($_GET["controller"])?"controllers/".$_GET["controller"]."Controller.php":"controllers/home.php";
					include "../layout/admin.php";
				}
				else{
					include "controllers/login.php";
				}
	}

?>
