<?php
	class home extends Controller{
		public function __construct(){
			parent:: __construct();

			// số phòng đã đặt
			$bookingCount = $this->Model->count("select * from booking");

			// số loại phòng hiện có
			$roomTypeCount = $this->Model->count("select * from roomtype");

			// số phòng hiện có
			$roomCount = $this->Model->count("select * from room");

			// số user hiện có
			$userCount = $this->Model->count("select * from user");

			include "views/home.php";
		}
	}
	new home();
?>