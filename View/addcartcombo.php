<?php
	session_start();

	include("../connection.php");

	if (!isset($_SESSION['username'])) {
		echo('<script>alert("Bạn phải đăng nhập mới thực hiện được chức năng này"); location.href="../Index.php"</script>');
	}

	//  lấy id của sp cần thêm vào giỏ hàng
	else
	{
		$idcombo = isset($_GET['idcombo']) ? $_GET['idcombo'] : '';

		$idcombo = $_GET['idcombo'];
		$sql = "SELECT * FROM tbl_combo WHERE Idcombo = '".$idcombo."'";
		$query = mysqli_query($conn, $sql);
		$product = mysqli_fetch_array($query);
		$idsanpham_arr = explode("-", $product['Idsanpham']);
		$giacu = 0;
		$giamGia = (100 - $product["Giamgia"]) / 100;
		foreach ($idsanpham_arr as $key => $value) {
			echo $value . " ";
		}

		foreach ($idsanpham_arr as $key =>$val) { // tính tổng giá combo khi chưa giảm giá
			if($val != ''){
				$sqlProduct = "SELECT* FROM tbl_product_detail where IdProduct = $val";
				$queryProduct = mysqli_query($conn, $sqlProduct);
				$rowProduct = mysqli_fetch_array($queryProduct);
				$giacu += $rowProduct["NewPrice"];

				if ($rowProduct) {
					// Kiểm tra tồn tài session['cart']

					if (isset($_SESSION['cart'])) {
						if (isset($_SESSION['cart'][$rowProduct["IdProduct"]])) {
							$_SESSION['cart'][$rowProduct["IdProduct"]]['qty'] += 1;
						}else{
							$_SESSION['cart'][$rowProduct["IdProduct"]]['qty'] = 1;
						}
						$_SESSION['cart'][$rowProduct["IdProduct"]]['name'] = $rowProduct['NameProduct'];
						$_SESSION['cart'][$rowProduct["IdProduct"]]['giacu'] = $rowProduct['NewPrice'];
						$_SESSION['cart'][$rowProduct["IdProduct"]]['giamoi'] = $rowProduct['NewPrice'] * $giamGia;
						$_SESSION['cart'][$rowProduct["IdProduct"]]['hinhanh'] = $rowProduct['Image'];
						$_SESSION['cart'][$rowProduct["IdProduct"]]['loaisp'] = $rowProduct['NameGroupProduct'];
					}else{
						$_SESSION['cart'][$rowProduct["IdProduct"]]['qty']=1;
						$_SESSION['cart'][$rowProduct["IdProduct"]]['name'] = $rowProduct['NameProduct'];
						$_SESSION['cart'][$rowProduct["IdProduct"]]['giacu'] = $rowProduct['NewPrice'];
						$_SESSION['cart'][$rowProduct["IdProduct"]]['giamoi'] = $rowProduct['NewPrice'] * $giamGia;
						$_SESSION['cart'][$rowProduct["IdProduct"]]['hinhanh'] = $rowProduct['Image'];
						$_SESSION['cart'][$rowProduct["IdProduct"]]['loaisp'] = $rowProduct['NameGroupProduct'];
					}
					header("location:../Index.php?page=shoppingcart");
				}
			}
		}
		
	}
	
?>