<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Danh sách phòng
        </h1>
    </div>
</div> 

<!-- index.php?controller=users/add  -->
<a href="#" class="btn btn-primary" style="margin-bottom: 20px"> Thêm phòng mới</a>

<table class="table table-bordered table-hover">
	<tr style="text-align: center;font-weight: bold;">
		<td >STT</td>
		<td >room id</td>
		<td >Tên phòng</td>
		<td >Ảnh chính</td>
		<td >Loại phòng</td>
		<td >Giá phòng</td>
		<td >room quanlity</td>
		<td >room rate</td>
		<td >Mô tả</td>
		<td>Thú cưng</td>
		<td >popular</td>
		<td >room new</td>
		<td colspan="2" >Cập nhật</td>
	</tr>

	<?php
		$stt = 0;
		foreach ($data as $value) {
			$stt++;
	?>

	<tr>
		<td><?php echo $stt; ?></td>
		<td><?php echo $value["roomid"]; ?></td>
		<td><?php echo $value["roomame"]; ?></td>
		<td>
			<img class="imageFormat" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($value["mainimage"]); ?>">
			<!-- <?php echo $value["mainimage"]; ?> -->
		</td>
		<td><?php echo $value["roomtypeid"]; ?></td>
		<td><?php echo $value["roomprice"]; ?></td>
		<td><?php echo $value["roomquanlity"]; ?></td>
		<td><?php echo $value["roomrate"]; ?></td>
		<td><?php echo $value["discription"]; ?></td>
		<td><?php echo $value["allowpet"]; ?></td>
		<td><?php echo $value["popular"]; ?></td>
		<td><?php echo $value["roomnew"]; ?></td>
		<td>
			 <!-- onclick="onEdit(<?php echo $value["userid"];?>)"  -->
			<a href="index.php?controller=room/edit&id=<?php echo $value["roomid"] ;?>">Sửa</a>
		</td>
		<td>
			<a onclick="delRoom(<?php echo $value["roomid"];?>)" href="#">Xóa</a>
		</td>
	</tr>
	<?php } ?>

</table>


<ul class="paginate">
	<?php for($i=1;$i<=$page_show; $i++) { ?>
	<a href="index.php?controller=room/list&p=<?php echo $i; ?>" style="font-weight: bold;"><li><?php echo $i; ?></li></a>
	<?php } ?>

	<?php
		$page_index = isset($_GET["p"])?$_GET["p"]:1;
		if($page_index>1) { 
	?>
	<a href="index.php?controller=room/list&p=<?php echo $page_index - 1 ;?>"><li> << </li></a>
	<?php } ?>

	<?php
		$page_index2 = isset($_GET["p"])?$_GET["p"]:1;
		if($page_index2<$page_show) { 
	?>
	<a href="index.php?controller=room/list&p=<?php echo $page_index2 + 1 ;?>"><li> >> </li></a>
	<?php } ?>
	
	
</ul>
<label style="float: right;">
	<?php 
		$page_index = isset($_GET["p"])?$_GET["p"]:1;
		echo $page_index;
	?>
</label>