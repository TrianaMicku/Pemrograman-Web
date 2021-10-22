<?php 
	include '../koneksi.php';
	include '../index.php';

	$id_user = $_GET['id_user'];

	$sql = mysqli_query($conn, "DELETE FROM user WHERE id_user = '$id_user'");

	if ($sql) {
		header("location:pengguna.php");
	}else{
		echo "<script>alert('Data Users gagal dihapus');</script>";
	}

 ?>


  <?php 
 include '../footer.php';

  ?>