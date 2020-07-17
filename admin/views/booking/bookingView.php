<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Danh sách đặt phòng
        </h1>
    </div>
</div>

<table class="table table-bordered table-hover">
	<tr style="text-align: center;font-weight: bold;">
		<td >STT</td>
		<td >user id</td>
		<td >room id</td>
		<td >Ngày đến</td>
		<td >Ngày đi</td>
		<td >Giá($)</td>
		<td >Chi tiết đặt phòng</td>
	</tr>

	<?php
		$stt = 0;
		foreach ($data as $value) {
			$stt++;
	?>

	<tr>
		<td><?php echo $stt; ?></td>
		<td><?php echo $value["userid"]; ?></td>
		<td><?php echo $value["roomid"]; ?></td>
		<td><?php echo $value["datearrive"]; ?></td>
		<td><?php echo $value["dateleave"]; ?></td>
		<td><?php echo $value["price"]; ?></td>
		<td><?php echo $value["bookingdetail"]; ?></td>
	</tr>
	<?php } ?>
</table>