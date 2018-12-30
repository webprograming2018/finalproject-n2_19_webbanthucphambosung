<div style="clear: both;"></div>
<br>
<div class="main">
	<div class="bo">
		<div class="danhmucsanpham">
			<h4 class="danhmucsanpham1 animated flash">SẢN PHẨM NỔI BẬT</h4>
			<hr style="margin-top: -10px;">
			<?php
				$sql = "SELECT * FROM tbl_product_detail inner join tbl_product_group on
tbl_product_detail.IdGroupProduct = tbl_product_group.IdGroupProduct  Order by IdProduct DESC Limit 6";
				$query = mysqli_query($conn,$sql);
				while ($row = mysqli_fetch_array($query)) {
			?>
			<div class="col-xs-6 col-sm-4 col-md-2 col-lg-2 tungsp animated zoomIn">
					<a href="index.php?page=detail&&msp=<?php echo($row['IdProduct']) ?>" class="ten_spnb"><img src="<?php echo($row['Image']); ?>" class="img_spnb"></a>
					<p class="loai_spnb"><?php echo($row['NameGroupProduct']); ?></p>
					<a href="index.php?page=detail&&msp=<?php echo($row['IdProduct']) ?>" class="ten_spnb" style="text-align: center;"><?php echo($row['NameProduct']); ?></a>
					<p class="giacu"><?php if ($row['OldPrice'] == 0) {
						echo "";
					}else{ echo(number_format($row['OldPrice'])).'đ'; } ?></p>
					<p class="giamoi"><?php echo(number_format($row['NewPrice'])).'đ'; ?></p>
			</div>
			<?php } ?>
		</div>

		<div style="clear: both;"></div>

		<div class="danhmucsanpham">
			<h4 class="danhmucsanpham2 animated flash">SẢN PHẨM KHUYẾN MÃI</h4>
			<hr style="margin-top: -10px;">
			<?php
				$sql = "SELECT * FROM tbl_product_detail inner join tbl_product_group on
tbl_product_detail.IdGroupProduct = tbl_product_group.IdGroupProduct WHERE OldPrice!=0 Order by Rand() LIMIT 6";
				$query = mysqli_query($conn,$sql);
				while ($row = mysqli_fetch_array($query)) {
			?>
			<div class="col-xs-6 col-sm-4 col-md-2 col-lg-2 tungsp animated zoomIn">
					<a href="index.php?page=detail&&msp=<?php echo($row['IdProduct']) ?>" class="ten_spnb"><img src="<?php echo($row['Image']); ?>" class="img_spnb"></a>
					<p class="loai_spnb"><?php echo($row['NameGroupProduct']); ?></p>
					<a href="index.php?page=detail&&msp=<?php echo($row['IdProduct']) ?>" class="ten_spnb"><?php echo($row['NameProduct']); ?></span></a>
					<p class="giacu"><?php if ($row['OldPrice'] == 0) {
						echo "";
					}else{ echo(number_format($row['OldPrice'])).'đ'; } ?></p>
					<p class="giamoi"><?php echo(number_format($row['NewPrice'])).'đ'; ?></p>
			</div>
			<?php } ?>
		</div>
		<div style="clear: both;"></div>

		<div class="danhmucsanpham">
			<h4 class="danhmucsanpham3 animated flash">WHEY PROTEIN</h4>
			<hr style="margin-top: -10px;">
			<?php
				$sql = "SELECT * FROM tbl_product_detail inner join tbl_product_group on
tbl_product_detail.IdGroupProduct = tbl_product_group.IdGroupProduct WHERE NameGroupProduct = 'Whey protein' Order by Rand() LIMIT 6";
				$query = mysqli_query($conn,$sql);
				while ($row = mysqli_fetch_array($query)) {
			?>
			<div class="col-xs-6 col-sm-4 col-md-2 col-lg-2 tungsp animated zoomIn">
					<a href="index.php?page=detail&&msp=<?php echo($row['IdProduct']) ?>" class="ten_spnb"><img src="<?php echo($row['Image']); ?>" class="img_spnb"></a>
					<p class="loai_spnb"><?php echo($row['NameGroupProduct']); ?></p>
					<a href="index.php?page=detail&&msp=<?php echo($row['IdProduct']) ?>" class="ten_spnb"><?php echo($row['NameProduct']); ?></span></a>
					<p class="giacu"><?php if ($row['OldPrice'] == 0) {
						echo "";
					}else{ echo(number_format($row['OldPrice'])).'đ'; } ?></p>
					<p class="giamoi"><?php echo(number_format($row['NewPrice'])).'đ'; ?></p>
			</div>
			<?php } ?>
		</div>
		<div style="clear: both;"></div>

		<div class="danhmucsanpham">
			<h4 class="danhmucsanpham4 animated flash">SỮA TĂNG CÂN</h4>
			<hr style="margin-top: -10px;">
			<?php
				$sql = "SELECT * FROM tbl_product_detail inner join tbl_product_group on
tbl_product_detail.IdGroupProduct = tbl_product_group.IdGroupProduct WHERE NameGroupProduct = 'Sữa tăng cân' Order by Rand() LIMIT 6";
				$query = mysqli_query($conn,$sql);
				while ($row = mysqli_fetch_array($query)) {
			?>
			<div class="col-xs-6 col-sm-4 col-md-2 col-lg-2 tungsp animated zoomIn">
					<a href="index.php?page=detail&&msp=<?php echo($row['IdProduct']) ?>" class="ten_spnb"><img src="<?php echo($row['Image']); ?>" class="img_spnb"></a>
					<p class="loai_spnb"><?php echo($row['NameGroupProduct']); ?></p>
					<a href="index.php?page=detail&&msp=<?php echo($row['IdProduct']) ?>" class="ten_spnb"><?php echo($row['NameProduct']); ?></span></a>
					<p class="giacu"><?php if ($row['OldPrice'] == 0) {
						echo "";
					}else{ echo(number_format($row['OldPrice'])).'đ'; } ?></p>
					<p class="giamoi"><?php echo(number_format($row['NewPrice'])).'đ'; ?></p>
			</div>
			<?php } ?>
		</div>
		
		<div style="clear: both;"></div>
		
		<div class="danhmucsanpham">
			<h4 class="danhmucsanpham5 animated flash">TIN TỨC THỂ HÌNH</h4>
			<hr style="margin-top: -10px;">
			<?php
				$sql1 = "SELECT* FROM tbl_news_detail WHERE IdNewsGroup = 1 Order By 	IdNews DESC LIMIT 2";
				$query1 = mysqli_query($conn, $sql1);
				while ($row1 = mysqli_fetch_array($query1)){
			?>
			<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 animated zoomIn">
				<a href="Index.php?page=content&&mattct=<?php echo($row1['IdNews']) ?>"><img src="<?php echo($row1['Image']); ?>" class="image-tt"></a>
				<p class="title-tt"><a href="Index.php?page=content&&mattct=<?php echo($row1['IdNews']) ?>"><?php echo($row1['Title']); ?></a></p>
				<hr style="border: 1px solid #d7d7d7;">
				<p class="content-tt"><?php echo($row1['Content']); ?></p>
				
			</div>
			<?php } ?>

			<?php
				$sql2 = "SELECT* FROM tbl_news_detail WHERE IdNewsGroup = 3 Order By 	IdNews DESC LIMIT 2";
				$query2 = mysqli_query($conn, $sql2);
				while ($row2 = mysqli_fetch_array($query2)){
			?>
			<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 animated zoomIn">
				<a href="Index.php?page=content&&mattct=<?php echo($row2['IdNews']) ?>"><img src="<?php echo($row2['Image']); ?>" class="image-tt"></a>
				<p class="title-tt"><a href="Index.php?page=content&&mattct=<?php echo($row2['IdNews']) ?>"><?php echo($row2['Title']); ?></a></p>
				<hr style="border: 1px solid #d7d7d7;">
				<p class="content-tt"><?php echo($row2['Content']); ?></p>
				
			</div>
			<?php } ?>

		</div>

		<div style="clear: both;"></div>
		<div class="them" style="margin-top: 50px;">
			<ul>
				<li>
					<img src="image/gtl.png" class="imge">
					<h4 class="mucduoi">GIÁ TRỊ LỚN</h4>
					<p class="mucben">Chúng tôi cung cấp giá cả cạnh tranh nhất trên từng sản phẩm, phù hợp với mọi túi tiền.</p>
				</li>
				<li>
					<img src="image/gh.png" class="imge">
					<h4 class="mucduoi">GIAO HÀNG</h4>
					<p class="mucben">Giao hàng tận nơi, sản<br>phẩm sẽ có mặt tại nhà bạn<br>từ 3 đến 5 ngày làm việc.</p>
				</li>
				<li>
					<img src="image/sp.png" class="imge">
					<h4 class="mucduoi">SẢN PHẨM</h4>
					<p class="mucben">Sản phẩm chính hãng, bảo<br>hành trên toàn quốc.</p>
				</li>
			</ul>
			<ul>
				<li>
					<img src="image/ht.png" class="imge">
					<h4 class="mucduoi">HỖ TRỢ</h4>
					<p class="mucben">Hổ trợ 24/7.<br>Phone: 01627 804 441.<br>Email: trung@gmail.com.vn</p>
				</li>
				<li>
					<img src="image/ud.png" class="imge">
					<h4 class="mucduoi">ỨNG DỤNG</h4>
					<p class="mucben">Cài đặt ứng dụng khi mua hàng sẽ được giảm giá đặc biệt từ 5 đến 10%.</p>
				</li>
				<li>
					<img src="image/tt.png" class="imge">
					<h4 class="mucduoi">THANH TOÁN</h4>
					<p class="mucben">Thanh toán khi nhận hàng.<br>Phương thức thanh toán đa<br>dạng</p>
				</li>
			</ul>
		</div>
		<div style="clear: both;"></div>
	</div>
</div>