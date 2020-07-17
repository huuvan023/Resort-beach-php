
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
		// xóa 1 user
		if ( $_POST["action"]=="delete" ) {
			$id = $_POST["id"];
			$model = new Model();
			$a = $model->execute("delete from user where userid=$id");		
			if( $a ) {
				echo "thanh cong";
			}
		}
		// thêm mới 1 user
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
		// chỉnh sửa thông tin user
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
		// xóa ảnh phòng
		if ( $_POST["action"]=="delImg" ) {
			$id = $_POST["id"];
			$model = new Model();
			$a = $model->execute("delete from roomimage where roomid=$id");		
			if( $a ) {
				echo "thanh cong";
			}
		}
		// xóa phòng
		if ( $_POST["action"]=="delRoom" ) {
			$id = $_POST["id"];
			$model = new Model();
			$a = $model->execute("delete from room where roomid=$id");		
			if( $a ) {
				echo "thanh cong";
			}
		}
		// chỉnh sửa thông tin phòng
		if( $_POST["action"]=="edit_Room"){
			if( isset($_POST["roomame"]) ) {
				$id = $_POST["id"];
				$roomame = $_POST["roomame"];
				$mainimage = ""; // chỉnh sửa ảnh (chưa làm)
				$roomtypeid = $_POST["roomtypeid"];
				$roomprice = $_POST["roomprice"];
				$roomquanlity = $_POST["roomquanlity"];
				$roomrate = $_POST["roomrate"];
				$discription = $_POST["discription"];
				$allowpet = $_POST["allowpet"];
				$popular = $_POST["popular"];
				$roomnew = $_POST["roomnew"]; 

				$model = new Model();
				$a1 = $model->execute("update room set roomame='$roomame' where roomid='$id'");
				$a2 = $model->execute("update room set roomtypeid='$roomtypeid' where roomid='$id'");
				$a3 = $model->execute("update room set roomprice='$roomprice' where roomid='$id'");
				$a4 = $model->execute("update room set roomquanlity='$roomquanlity' where roomid='$id'");
				$a5 = $model->execute("update room set roomrate='$roomrate' where roomid='$id'");
				$a6 = $model->execute("update room set discription='$discription' where roomid='$id'");
				$a7 = $model->execute("update room set allowpet=b'$allowpet' where roomid='$id'");
				$a8 = $model->execute("update room set popular='$popular' where roomid='$id'");

	
				if( $a1 == true && $a2 == true && $a3 == true && $a4 == true && $a5 == true && $a6 == true && $a7 == true && $a8 ){
					echo "thanh cong";
				}
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
