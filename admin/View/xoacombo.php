<?php
    if(isset($_GET["id"])){
        $id = $_GET["id"];
        $sql = "DELETE FROM `tbl_combo` WHERE Idcombo = $id";
		$query = mysqli_query($conn, $sql);
        header("location: Index.php?page=quanlycombo");
    }
?>