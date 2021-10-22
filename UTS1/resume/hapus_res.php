<?php 
	include '../koneksi.php';
	include '../index.php';

	$id_resume = $_GET['id_resume'];

	$sql = mysqli_query($conn, "DELETE FROM resume WHERE id_resume = '$id_resume'");

	if ($sql) {
		header("location:resume.php");
	}else{
		echo "<script>alert('Data resume gagal dihapus');</script>";
	}

 ?>


  <?php 
 include '../footer.php';

  ?>