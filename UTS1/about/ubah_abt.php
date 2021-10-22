<?php 
	include '../koneksi.php';
	include '../index.php';
	
	$id_about = $_GET['id_about'];

	$sql = mysqli_query($conn, "SELECT * FROM about WHERE id_about = '$id_about'");

	$data = mysqli_fetch_array($sql);

	if (isset($_POST['ubah'])) {
		$foto2 = $_FILES['foto2']['name'];
		$ekstensi = $_FILES['foto2']['tmp_name'];
		$intro = $_POST['intro'];
				
		if (empty($foto2)) {
			$sql = mysqli_query($conn,"UPDATE about SET intro = '$intro' WHERE id_about = '$id_about'");
		}else{
			$lokasi = "../assets/img2/".$foto2;
			move_uploaded_file($ekstensi, $lokasi);

			$sql = mysqli_query($conn,"UPDATE about SET foto2 = '$foto2', intro = '$intro' WHERE id_about = '$id_about'");
		}

			if ($sql) {
				header("location:abt.php");
			}else{
				echo "<script>alert('Data about gagal diubah');</script>";
			}
	}


 ?><br>

 	<div class="container">
 		<div class="panel panel-default">
		<div class="panel-heading">
			<b style="font-size: 12px;">Ubah About</b>
		</div>

 		<div class="panel-body">
 			<form action="" method="POST" enctype="multipart/form-data">
 
	<div class="form-group">
		<label class="control-label col-sm-2" name="foto2">Profil</label>
		<div class="col-md-10" >
			<input type="file" name="foto2" class="form-control" value="<?php echo $data['foto2'] ?>">
			
		</div>
	</div><br><br>

	 <div class="form-group">
		<label class="control-label col-sm-2" name="intro">Intro</label>
		<div class="col-md-10" >
			<textarea type="text" name="intro" class="form-control" value="<?php echo $data['intro'] ?>" row="10" required></textarea>
		</div>
	</div><br><br><br><br>

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