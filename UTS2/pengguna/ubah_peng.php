<?php 
	include '../koneksi.php';
	include '../index.php';
	
	$id_user = $_GET['id_user'];

	$sql = mysqli_query($conn,"SELECT * FROM user WHERE id_user = '$id_user'");

	$data = mysqli_fetch_array($sql);

	if (isset($_POST['ubah'])) {
		
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = md5($_POST['password']);
		$nm_role = $_POST['nm_role'];

		$sql = mysqli_query($conn,"UPDATE user SET email = '$email', username = '$username', password = '$password',  nm_role = '$nm_role' WHERE id_user = '$id_user'");

		if ($sql) {
			header("location:pengguna.php");
		}else{
			echo "<script>alert('Data Users gagal diubah');</script>";
		}
	}

 ?><br>

 	<div class="container">
 		<div class="panel panel-default">
		<div class="panel-heading">
			<b style="font-size: 12px;">Ubah Users</b>
		</div>

 		<div class="panel-body">
 			<form action="" method="POST">
 
 	
	 <div class="form-group">
		<label class="control-label col-sm-2" name="email">E-mail</label>
		<div class="col-md-10" >
			<input type="text" name="email" class="form-control" value="<?php echo $data['email'] ?>">
		</div>
	</div><br><br>

	<div class="form-group">
		<label class="control-label col-sm-2" name="username">Username</label>
		<div class="col-md-10" >
			<input type="text" name="username" class="form-control" value="<?php echo $data['username'] ?>">
		</div>
	</div><br><br>

 	<div class="form-group">
		<label class="control-label col-sm-2" name="password">Password</label>
		<div class="col-md-10" >
			<input type="password" name="password" class="form-control" value="<?php echo $data['password'] ?>">
		</div>
	</div><br><br>

	<div class="form-group">
		<label class="control-label col-sm-2" name="nm_role">Jabatan</label>
		<div class="col-md-10" >
			<select name="nm_role" class="form-control"  value="<?php echo $data['nm_role'] ?>" >
				<option selected disabled>Pilih Jabatan</option>
				<option value="Admin">Admin</option>
				<option value="Manajemen">Manajemen</option>
			</select>	
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