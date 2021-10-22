<?php 
	include '../koneksi.php';
	include '../index.php';

	if (isset($_POST['simpan'])) {
		$skill = $_POST['skill'];
		$ket = $_POST['ket'];

		$sql = mysqli_query($conn, "INSERT INTO resume (skill, ket) VALUES ('$skill', '$ket')");

		if ($sql) {
			header("location:resume.php");
		}else{
			echo "<script>alert('Data resume gagal ditambahkan');</script>";
		}
	}
 ?><br>

 	<div class="container">
 		<div class="panel panel-default">
		<div class="panel-heading">
			<b style="font-size: 12px;">Tambah Resume</b>
		</div>

	<div class="panel-body">
 		<form action="" method="POST">
 	
         <div class="form-group">
		<label class="control-label col-sm-2" name="skill">Skills</label>
		<div class="col-md-10" >
			<input type="text" name="skill" class="form-control" required>
		</div>
	</div><br><br>

	<div class="form-group">
		<label class="control-label col-sm-2" name="ket">Keterangan</label>
		<div class="col-md-10" >
			<input type="text" name="ket" class="form-control" required>
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


 <?php 
 	include '../footer.php';

  ?>