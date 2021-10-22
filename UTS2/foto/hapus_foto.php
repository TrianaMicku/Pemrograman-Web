<?php 
	include '../koneksi.php';
	include '../index.php';

	$id_foto = $_GET['id_foto'];

	$sql = mysqli_query($conn, "DELETE FROM foto WHERE id_foto = '$id_foto'");

	if ($sql) {
		header("location:foto.php");
	}else{
		echo "<script>alert('Data photo gagal dihapus');</script>";
	}

 ?>


  <?php 
 include '../footer.php';

  ?>