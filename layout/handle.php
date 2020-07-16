<?php
	include "../config/Controller.php";
	include "../config/Model.php";
	if( isset($_GET["id"])) {
		$id = isset($_GET["id"])?$_GET["id"]:0;
		$model = new Model();
		$a = $model->execute("delete from user where userid=$id");		
		if( $a ) {
			echo "thanh cong";
		}
	}	
?>