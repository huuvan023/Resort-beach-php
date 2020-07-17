<?php 
	class booking extends Controller{
		public function __construct(){
			parent:: __construct();

			$data = $this->Model->fetch("select * from booking");

			include "views/booking/bookingView.php";
		}
	}
	new booking();
?>