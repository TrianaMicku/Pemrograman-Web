<?php 
	include '../koneksi.php';
	include '../index.php';

	if (isset($_POST['simpan'])) {
		$foto2 = $_FILES['foto2']['name'];
		$ekstensi = $_FILES['foto2']['tmp_name'];
		$intro = $_POST['intro'];
		
		$lokasi = "../img/".$foto2;

		move_uploaded_file($ekstensi, $lokasi);

		$sql = mysqli_query($conn, "INSERT INTO about (foto2, intro) VALUES ('$foto2', '$intro')");

		if ($sql) {
			header("location:abt.php");
		}else{
			echo "<script>alert('Data about gagal ditambahkan');</script>";
		}
	}
 ?><br>

 	<div class="container">
 		<div class="panel panel-default">
		<div class="panel-heading">
			<b style="font-size: 12px;">Tambah About</b>
		</div>

	<div class="panel-body">
 		<form action="" method="POST" enctype="multipart/form-data">
 	
	<div class="form-group">
		<label class="control-label col-sm-2" name="foto2">Profil</label>
		<div class="col-md-10" >
			<input type="file" name="foto2" class="form-control" required>
		</div>
	</div><br><br>

	<div class="form-group">
		<label class="control-label col-sm-2" name="intro">Intro</label>
		<div class="col-md-10" >
			<textarea type="text" name="intro" class="form-control" row="10" required></textarea>
		</div>
	</div><br><br><br>

	<div class="form-group">        
  		<div class="col-sm-offset-2 col-sm-10">
      		<button type="submit" class="btn btn-info btn-sm" name="simpan">Simpan</button>
     </div>
    </div>

 </form>

</div>
</div>


 <?php 
 	include '../footer.php';

  ?>