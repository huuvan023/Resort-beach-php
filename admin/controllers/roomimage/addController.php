<?php  
	class addImage extends Controller{
		public function __construct(){
			parent:: __construct();

			include "views/roomimage/addView.php";
		}
	}
	new addImage();
?>