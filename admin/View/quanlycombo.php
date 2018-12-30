<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		a.btn-primary{
			margin-bottom: 15px;
		}
	</style>
</head>
<body>
	<?php
		$sql = "SELECT * FROM tbl_combo";
		$query = mysqli_query($conn, $sql);

	?>
	<h3 class="text-center">Quản lý combo</h3>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<a href="Index.php?page=themcombo" class="btn btn-primary">Thêm combo mới</a>
			</div>
		</div>
	</div>
		<div class="container">
	  <table class="table table-bordered">
	    <thead>
	      <tr>
	        <th>ID COMBO</th>
	        <th>Tên combo</th>
	        <th>Giảm giá ( % )</th>
	        <th>Thao tác</th>
	      </tr>
	    </thead>
	    <tbody>
    	<?php  
			while ($row = mysqli_fetch_array($query)) {
		?>
	      <tr>
	        <td><?php echo($row["Idcombo"]) ?></td>
	        <td><?php echo($row["Namecombo"]) ?></td>
	        <td><?php echo($row["Giamgia"]) ?></td>
	        <td><a class="btn btn-success" href="Index.php?page=suacombo&&id=<?php echo($row['Idcombo']) ?>">Sửa</a>  <a class="btn btn-danger" href="Index.php?page=xoacombo&&id=<?php echo($row['Idcombo']) ?> "onclick="return confirm('Bạn có chắc chắn muốn xóa')">Xóa</a></td>
	      </tr>
  		<?php } ?>
	    </tbody>
	  </table>
	</div>
</body>
</html>