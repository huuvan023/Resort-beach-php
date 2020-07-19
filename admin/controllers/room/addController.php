<?php  
	class addRoom extends Controller{
		public function __construct(){
			parent:: __construct();

			include "views/room/addView.php";
		}
	}
	new addRoom();
?>