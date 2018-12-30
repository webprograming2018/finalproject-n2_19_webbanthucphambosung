<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sửa combo</title>
	<style>
		.thumbnail{
			background: #eae9e940;
		}
		.tb{
			height: 190px;
			overflow-y: scroll;
		}
		#myInput{
			margin-bottom: 20px;
		}
	</style>
</head>
<body>
	<?php
		if(isset($_POST["btn_themmoi"])){
			$idcombo = $_POST["idcombo"];
			$tencombo = $_POST["tencombo"];
			$giamgia = $_POST["giamgia"];
			$data = "";
			if(isset($_POST["idsanpham"])){
				foreach ($_POST["idsanpham"] as $key => $val) {
					$data .= $val."-";
				}
			}
			if($tencombo =="" || $giamgia =="" || $data == ""){
				echo '<script>';
				echo 'alert("Vui lòng nhập đầy đủ thông tin")';
				echo '</script>';
			} else{
				$sql = "UPDATE `tbl_combo` SET `Idcombo`='$idcombo',`Namecombo`='$tencombo',`Giamgia`='$giamgia',`Idsanpham`='$data' WHERE Idcombo=$idcombo ";
				$query = mysqli_query($conn, $sql);
				/*header("location: Index.php?page=quanlycombo");*/
				echo '<script>';
				echo 'alert("Cập nhật thành công")';
				echo '</script>';
			}
			
		}
	?>
	<?php 
		if(isset($_GET["id"])){ 
		$id = $_GET["id"];
    $sql = "SELECT* FROM tbl_combo where Idcombo = $id";
		$query = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($query);
		}
	?>
	<h3 class="text-center">Sửa combo</h3>
	<div class="container-fluid ">
		<div class="row">
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xs-offset-3 thumbnail">
				<form method="post">
					<div class="form-group">
				    <input type="hidden" class="form-control" id="tencombo" name="idcombo"  value="<?= $row['Idcombo'] ?>">
				  </div>
				  <div class="form-group">
				    <label for="tencombo">Tên combo:</label>
				    <input type="text" class="form-control" id="tencombo" name="tencombo" placeholder="Nhập tên combo..." value="<?= $row['Namecombo'] ?>">
				  </div>
				  <div class="form-group">
				    <label for="giamgia">Giảm giá (%):</label>
				    <input type="number" class="form-control" id="giamgia" name="giamgia" placeholder="Nhập giảm giá (%)" value="<?= $row['Giamgia'] ?>">
				  </div>
				   <label>Chọn sản phẩm:</label>
				   <input class="form-control" id="myInput" type="text" placeholder="Tìm kiếm sản phẩm ...">
				   <div class="container-fluid tb">
					  <table class="table table-bordered">
					    <thead>
					      <tr>
					        <th>ID</th>
					        <th>Tên sản phẩm</th>
					        <th>Chọn</th>
					      </tr>
					    </thead>
					    <tbody id="myTable">
					    <?php  
					    	$sql = "SELECT* FROM tbl_product_detail";
							$query = mysqli_query($conn, $sql);
							while ($row = mysqli_fetch_array($query)) {
						?>
					      <tr>
					        <td><?php echo($row["IdProduct"]) ?></td>
					        <td><?php echo($row["NameProduct"]) ?></td>
					        <td style="text-align: center;">
  								<label><input type="checkbox" name="idsanpham[]" value="<?php echo($row['IdProduct']) ?>"></label>
  							</td>
					      </tr>
					     <?php } ?>
					    </tbody>
					  </table>
					</div>
				  <button type="submit" class="btn btn-block btn-primary" name="btn_themmoi">Thêm mới</button>
				</form>
			</div>
		</div>
	</div>



	<script>
		$(document).ready(function(){
		  $("#myInput").on("keyup", function() {
		    var value = $(this).val().toLowerCase();
		    $("#myTable tr").filter(function() {
		      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
		    });
		  });
		});
	</script>
</body>
</html>