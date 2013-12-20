<?php
	require "konektor.php";
	if(isset($_POST['exe'])) {
		if($_POST['exe'] == "add_user") {
			if(!empty($_POST['nama']) && !empty($_POST['username']) && !empty($_POST['password'])) {
				$nama_lengkap = $_POST['nama'];
				$username = $_POST['username'];
				$password = $_POST['password'];
				
				$qadd = mysql_query("INSERT INTO user(`nama`,`username`,`password`) values('$nama_lengkap','$username','$password')");
			}
		} else if($_POST['exe'] == "update_user") {
			if(!empty($_POST['nama']) && !empty($_POST['username']) && !empty($_POST['password'])) {
				$nama_lengkap = $_POST['nama'];
				$username = $_POST['username'];
				$password = $_POST['password'];
				$id = $_POST['id'];
				
				$qupdate = mysql_query("UPDATE user SET `nama` = '$nama_lengkap', `username` = '$username', `password` = '$password' WHERE id = $id");
			}
		} else if($_POST['exe'] == "del_user"){
			if(isset($_POST['id']) && !empty($_POST['id'])) {
				$id = $_POST['id'];
				$qdelete = mysql_query("DELETE FROM user WHERE id = $id");
			}
		}else {
			echo "<script>alert('gagal')</script>";
		}
	} else {
		echo "<script>alert('gagal')</script>";
	}
?>