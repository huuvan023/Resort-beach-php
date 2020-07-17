
<div class="col-md-8 col-md-offset-2" style="margin-bottom: 100px;margin-top: 30px;">
	<div class="panel panel-primary">
		<div class="panel-heading" style="text-align: center;font-weight: bold;">Thêm ảnh phòng mới</div>
		<div class="panel-body">
			<form id="formUploadImg" method="POST" enctype="multipart/form-data">
				<table class="table">
					<tr>
						<td>Id của phòng</td>
						<td>
							<input type="text" name="roomid" placeholder="vui lòng nhập id của phòng" class="form-control" >
						</td>
					</tr>
					<tr>
						<td>Ảnh thứ nhất</td>
						<td>
							<input type="file" name="image1" id="image1" class="form-control" >
						</td>
					</tr>
					<tr>
						<td>Ảnh thứ hai</td>
						<td>
							<input type="file" name="image2" class="form-control" required="" />
						</td>
					</tr>
					<tr>
						<td>ảnh thứ ba</td>
						<td>
							<input type="file" name="image3" class="form-control" required="" />
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<button type="submit" class="btn btn-primary" id="smUs">Thêm ảnh</button>
							<!-- <a href="#" onclick="onAddImage()" class="btn btn-success">Thên Ảnh</a> -->
							<a href="index.php?controller=roomimage/list" class="btn btn-success">Quay Lại</a>
						</td>
					</tr>
			</table>
			</form>
		</div>
	</div>
</div>
