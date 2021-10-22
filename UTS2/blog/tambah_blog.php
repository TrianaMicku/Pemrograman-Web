<?php 
	include '../koneksi.php';
	include '../index.php';

	if (isset($_POST['simpan'])) {
		$gambar = $_FILES['gambar']['name'];
		$ekstensi = $_FILES['gambar']['tmp_name'];
		$judul = $_POST['judul'];
		$headline = $_POST['headline'];

		$lokasi = "../img/".$gambar;

		move_uploaded_file($ekstensi, $lokasi);

		$sql = mysqli_query($conn,"INSERT INTO blog (gambar, judul, headline) VALUES ('$gambar', '$judul', '$headline')");

		if ($sql) {
			header("location:blog.php");
		}else{
			echo "<script>alert('Data project gagal ditambahkan');</script>";
		}
	}
 ?>
 
 <div class="container">
 	<div class="panel panel-default">
	<div class="panel-heading">
		<b style="font-size: 12px;">Tambah Project</b>
	</div>
		
<div class="panel-body">
 <form action="" method="POST" enctype="multipart/form-data">

 	<div class="form-group">
		<label class="control-label col-sm-2">Gambar</label>
	<div class="col-md-10" >
		<input type="file" name="gambar" id="gambar" class="form-control" required>
	</div>
	</div><br><br>
 	
 	<div class="form-group">
		<label class="control-label col-sm-2" for="judul">Judul Project</label>
	<div class="col-md-10" >
		<input type="text" name="judul" class="form-control" required>
	</div>
	</div><br><br><br>

	<div class="form-group">
		<label class="control-label col-sm-2" for="headline">Headline Project</label>
	<div class="col-md-10" >
		<input type="text" name="headline" class="form-control" required>
	</div>
	</div><br><br>

	<div class="form-group">        
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-info btn-sm" name="simpan">Simpan</button>
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


  