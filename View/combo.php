<style>
	p.gia {
    	text-align: center;
	}
	p.gia span:nth-child(1) {
	    text-decoration: line-through;
	    background: #eaeaea;
	    border-radius: 50%;
	    display: inline-block;
	    height: 40px;
	    border: 1px solid;
	    margin-right: 10px;
	    line-height: 40px;
	    color: red;
	    padding: 0px 10px;
	}
	p.gia span:nth-child(2) {
    background: #65e20a;
    border-radius: 50%;
    display: inline-block;
    height: 40px;
    border: 1px solid;
    margin-right: 30px;
    line-height: 40px;
	color: white;
	padding: 0px 10px;
	}

	.thumbnail h3{
		height: 76px;
	}
	.thumbnail{
		position: relative;
	}
	.km {
    color: wheat;
    height: 30px;
    border: 1px solid;
    position: absolute;
    top: 0px;
    width: 40px;
    line-height: 30px;
    border-radius: 50%;
    background: #f00;
    right: 0px;
	}
	.info {
    height: 148px;
	}
</style>
<div class="container">
	<h3 class="text-center">Gói combo khuyến mại đặc biệt</h3>
	<div class="row">
		<?php  
	    	$sql = "SELECT* FROM tbl_combo";
			$query = mysqli_query($conn, $sql);
			while ($row = mysqli_fetch_array($query)) {
		?>
		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
				<div class="thumbnail">
					<img data-src="#" alt="">
					<div class="caption">
						<h3><?php echo($row["Namecombo"]) ?></h3>
						<div class="info">
						<?php 
							$idsanpham = $row["Idsanpham"];
							$idsanpham_arr = explode("-", $idsanpham);
							$giacu = 0;
							foreach ($idsanpham_arr as $key =>$val) { // tính tổng giá combo khi chưa giảm giá
								if($val != ''){
								$sql1 = "SELECT* FROM tbl_product_detail where IdProduct = $val";
								$query1 = mysqli_query($conn, $sql1);
								$row1 = mysqli_fetch_array($query1);
								$giacu += $row1["NewPrice"];
								}
							}

							foreach ($idsanpham_arr as $key =>$val) { //vòng lặp in ra các sản phẩm có trong combo
								if($val != ''){
								$sql1 = "SELECT* FROM tbl_product_detail where IdProduct = $val";
								$query1 = mysqli_query($conn, $sql1);
								$row1 = mysqli_fetch_array($query1);
						 ?>
						<p><b><i>-<?php echo $row1["NameProduct"] ?> :</i></b> <?php echo number_format($row1["NewPrice"])."đ" ?> </p>
						<?php } } ?>
						</div>
						<p class="gia"><span><?php echo number_format($giacu)."đ" ?></span><span><?php echo number_format($giacu-(($giacu*$row["Giamgia"]))/100)."đ" ?></span></p>
						<p>
							<a href="View/addcartcombo.php?idcombo=<?php echo($row['Idcombo']) ?>" class="btn btn-primary btn-block">Đặt mua ngay</a>
						</p>
					</div>
				</div>
				<div class="km"><?php echo("-".$row["Giamgia"]."%") ?></div>
		</div>
		<?php } ?>
	</div>
</div>