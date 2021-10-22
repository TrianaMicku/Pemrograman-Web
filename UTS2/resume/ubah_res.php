<?php 
	include '../koneksi.php';
	include '../index.php';
	
	$id_resume = $_GET['id_resume'];

	$sql = mysqli_query($conn,"SELECT * FROM resume WHERE id_resume = '$id_resume'");

	$data = mysqli_fetch_array($sql);

	if (isset($_POST['ubah'])) {
		
		$skill = $_POST['skill'];
		$ket = $_POST['ket'];

		$sql = mysqli_query($conn,"UPDATE resume SET skill = '$skill', ket = '$ket' WHERE id_resume = '$id_resume'");

		if ($sql) {
			header("location:resume.php");
		}else{
			echo "<script>alert('Data Users gagal diubah');</script>";
		}
	}

 ?><br>

 	<div class="container">
 		<div class="panel panel-default">
		<div class="panel-heading">
			<b style="font-size: 12px;">Ubah Resume</b>
		</div>

 		<div class="panel-body">
 			<form action="" method="POST">
 
	 <div class="form-group">
		<label class="control-label col-sm-2" name="skill">Skills</label>
		<div class="col-md-10" >
			<input type="text" name="skill" class="form-control" value="<?php echo $data['skill'] ?>">
		</div>
	</div><br><br>

	<div class="form-group">
		<label class="control-label col-sm-2" name="ket">Keterangan</label>
		<div class="col-md-10" >
			<input type="text" name="ket" class="form-control" value="<?php echo $data['ket'] ?>">
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