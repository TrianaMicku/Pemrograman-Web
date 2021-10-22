<?php 
	include '../koneksi.php';
	include '../index.php';

	$id_blog = $_GET['id_blog'];

	$sql = mysqli_query($conn, "SELECT * FROM blog WHERE id_blog = '$id_blog'");

	$data = mysqli_fetch_array($sql);

	if (isset($_POST['ubah'])) {
		$gambar = $_FILES['gambar']['name'];
		$ekstensi = $_FILES['gambar']['tmp_name'];
		$judul = $_POST['judul'];
		$headline = $_POST['headline'];

		if (empty($gambar)) {
			$sql = mysqli_query($conn,"UPDATE blog SET tema = '$tema' WHERE id_blog = '$id_blog'");
		}else{
			$lokasi = "../assets/img2/".$gambar;
			move_uploaded_file($ekstensi, $lokasi);

			$sql = mysqli_query($conn, "UPDATE blog SET gambar = '$gambar', judul ='$judul', headline = '$headline' WHERE id_blog = '$id_blog'");
		}

		if ($sql) {
			header("location:blog.php");
		}else{
			echo "<script>alert('Data project gagal diubah');</script>";
		}
	}
 ?>

 <div class="container">
 		<div class="panel panel-default">
		<div class="panel-heading">
			<b style="font-size: 12px;">Ubah Project</b>
		</div>

<div class="panel-body">
 <form action="" method="POST" enctype="multipart/form-data">

 	<div class="form-group">
		<label class="control-label col-sm-2" for="gambar">Gambar</label>
	<div class="col-md-10" >
		<input type="file" name="gambar" class="form-control" value="<?php echo $data['gambar'] ?>">
	</div>
	</div><br><br>

 	<div class="form-group">
		<label class="control-label col-sm-2" for="judul">Judul Project</label>
	<div class="col-md-10" >
		<input type="text" name="judul" class="form-control" value="<?php echo $data['judul'] ?>" required>
	</div>
	</div><br><br>

	<div class="form-group">
		<label class="control-label col-sm-2" for="headline">Headline Project</label>
	<div class="col-md-10" >
		<input type="text" name="headline" class="form-control" value="<?php echo $data['headline'] ?>" required>
	</div>
	</div><br><br>

	<div class="form-group">        
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-info btn-sm" name="ubah">Ubah</button>
		</div>
    </div>
 </form>

</div>
</div>
</div>

<!-- <script type="text/javascript" src="../assets/tinymce/js/tinymce/tinymce.min.js"></script>
<script>
	tinymce.init
	({ 
		selector:'textarea' 
	});

</script> -->


 <?php 
 include '../footer.php';

  ?>