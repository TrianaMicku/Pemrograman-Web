<?php 
	include '../koneksi.php';
	include '../index.php';

	$id_about = $_GET['id_about'];

	$sql = mysqli_query($conn, "DELETE FROM about WHERE id_about = '$id_about'");

	if ($sql) {
		header("location:abt.php");
	}else{
		echo "<script>alert('Data about gagal dihapus');</script>";
	}

 ?>


  <?php 
 include '../footer.php';

  ?>