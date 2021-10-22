<?php 
	include '../koneksi.php';
	include '../index.php';

	$id_blog = $_GET['id_blog'];

	$sql = mysqli_query($conn, "DELETE FROM blog WHERE id_blog = '$id_blog'");

	if ($sql) {
		header("location:blog.php");
	}else{
		echo "<script>alert('Data blog gagal dihapus');</script>";
	}

 ?>


  <?php 
 include '../footer.php';

  ?>