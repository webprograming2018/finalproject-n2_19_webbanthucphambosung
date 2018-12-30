<?php 


   

        if($_SESSION['cart'] == null) {

        } else {
          // add bill.
          $sql = "INSERT INTO tbl_bill(IdCustomer, Email, Address, Phone, tongTien, hinhthucthanhtoan, lichsuthanhtoan) VALUES(".$_SESSION['idLogin'].", '".$email."', '".$address."', '".$phone."', '".$_SESSION['tongTien']."', 'online')";
          mysqli_query($conn, $sql);

          // get last id;
          $last_id = $conn->insert_id;

          foreach ($_SESSION['cart'] as $key => $value) {

            $insertBillDetail = "INSERT INTO tbl_bill_detail(bill_id, product_id, soLuong) VALUES('".$last_id."', '$key', '". $value['qty'] ."')";

            if(mysqli_query($conn, $insertBillDetail)){
              unset($_SESSION['cart']);
              echo('<script>alert("Thanh toán online thành công");location.href="Index.php?page=shoppingcart"</script>');
            }
          }
        }
      


    }

 ?>