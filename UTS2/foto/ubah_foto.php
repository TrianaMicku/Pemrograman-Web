<?php 
	include '../koneksi.php';
	include '../index.php';

	$id_foto = $_GET['id_foto'];

	$sql = mysqli_query($conn, "SELECT * FROM foto WHERE id_foto = '$id_foto'");

	$data = mysqli_fetch_array($sql);

	if (isset($_POST['ubah'])) {
		$foto = $_FILES['foto']['name'];
		$ekstensi = $_FILES['foto']['tmp_name'];
		$tema = $_POST['tema'];
		

		if (empty($foto)) {
			$sql = mysqli_query($conn,"UPDATE foto SET tema = '$tema' WHERE id_foto = '$id_foto'");
		}else{
			$lokasi = "../assets/img2/".$foto;
			move_uploaded_file($ekstensi, $lokasi);

			$sql = mysqli_query($conn,"UPDATE foto SET foto = '$foto',  tema = '$tema' WHERE id_foto = '$id_foto'");
		}

			if ($sql) {
				header("location:foto.php");
			}else{
				echo "<script>alert('Data photos gagal diubah');</script>";
			}
	}

 ?><br>

 <div class="container">
 	<div class="panel panel-default">
		<div class="panel-heading">
			<b style="font-size: 12px;">Ubah Photos</b>
		</div>

<div class="panel-body">
 <form action="" method="POST" enctype="multipart/form-data">

	 <div class="form-group">
			<label class="control-label col-sm-2" for="foto">foto</label>
		 <div class="col-md-10" >
			<input type="file" name="foto" class="form-control" value="<?php echo $data['foto'] ?>">
	</div>
	</div><br><br>

	 <div class="form-group">
			<label class="control-label col-sm-2" for="tema">Tema</label>
		 <div class="col-md-10" >
			<input type="text" name="tema" class="form-control" value="<?php echo $data['tema'] ?>">
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
 <?php 
 include '../footer.php';

  ?>