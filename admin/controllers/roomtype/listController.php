<?php  
	class listRoomType Extends Controller{
		public function __construct(){
			parent:: __construct();

			$data = $this->Model->fetch("select * from roomtype");


			include "views/roomtype/listView.php";
		}
	}
	new listRoomType();
?>