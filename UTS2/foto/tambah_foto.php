<?php 
	include '../koneksi.php';
	include '../index.php';

	if (isset($_POST['simpan'])) {
		$foto = $_FILES['foto']['name'];
		$ekstensi = $_FILES['foto']['tmp_name'];
		$tema = $_POST['tema'];
		

		$lokasi = "../img/".$foto;

		move_uploaded_file($ekstensi, $lokasi);


		$sql = mysqli_query($conn, "INSERT INTO foto (foto, tema) VALUES('$foto', '$tema')");

		if ($sql) {
			header("location:foto.php");
		}else{
			echo "<script>alert('Data photo gagal ditambahkan');</script>";
		}
	}
 ?><br>
 
 <div class="container">
 	<div class="panel panel-default">
		<div class="panel-heading">
			<b style="font-size: 12px;">Tambah Photos</b>
		</div>

<div class="panel-body">
<form action="" method="POST" enctype="multipart/form-data">


		<div class="form-group">
			<label class="control-label col-sm-2">Photo</label>
		 <div class="col-md-10" >
			<input type="file" name="foto" id="foto" class="form-control" required>
	</div>
	</div><br><br>

	<div class="form-group">
			<label class="control-label col-sm-2">Tema</label>
		 <div class="col-md-10" >
			<input type="text" name="tema" class="form-control" required>
	</div>
	</div><br><br>

	<div class="form-group">        
     		<div class="col-sm-offset-2 col-sm-10">
        		<button type="submit" class="btn btn-info btn-sm" name="simpan">Simpan</button>
     </div>
    </div>
 
</div>
</form>
</div>
</div>

 <?php 
 	include '../footer.php';

  ?>

 