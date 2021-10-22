<?php
session_start();
	if (isset($_SESSION['usename'])) {
	header("location:page/dash.php");
}
	include 'koneksi.php';
	
	if (isset($_POST['masuk'])) {
		$username = $_POST['username'];
		$password = md5($_POST['password']);

	$sql = mysqli_query($conn, "SELECT * FROM user 
                WHERE username= '$username' AND password='$password'");
	
	if($sql->num_rows >0) {
		$data = mysqli_fetch_array($sql);

		$_SESSION['masuk'] = true;
		$_SESSION['id_user'] = $data['id_user'];
		$_SESSION['username'] = $data['username'];
		$_SESSION['password'] = $data['password'];
		$_SESSION['nm_role'] = $data['nm_role'];
		
    header("location:page/dash.php");
	
  }else{
			echo "<script>alert('Login Gagal! Silahkan cek kembali username & password Anda'); window.location='home2.php'</script>";

		}
	}	

 ?>