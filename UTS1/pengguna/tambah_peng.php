<?php 
	include '../koneksi.php';
	include '../index.php';

	if (isset($_POST['simpan'])) {
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = md5($_POST['password']);
		$nm_role = $_POST['nm_role'];

		$sql = mysqli_query($conn, "INSERT INTO user (email, username, password, nm_role) VALUES ('$email', '$username', '$password', '$nm_role')");

		if ($sql) {
			header("location:pengguna.php");
		}else{
			echo "<script>alert('Data Users gagal ditambahkan');</script>";
		}
	}
 ?><br>

 	<div class="container">
 		<div class="panel panel-default">
		<div class="panel-heading">
			<b style="font-size: 12px;">Tambah Users</b>
		</div>

	<div class="panel-body">
 		<form action="" method="POST">
 	
	 <div class="form-group">
			<label class="control-label col-sm-2" name="email">E-mail</label>
		 <div class="col-md-10" >
			<input type="text" name="email" class="form-control" required>
	</div>
	</div><br><br>

	<div class="form-group">
			<label class="control-label col-sm-2" name="username">Nama Pengguna</label>
		 <div class="col-md-10" >
			<input type="text" name="username" class="form-control" required>
	</div>
	</div><br><br>

 	<div class="form-group">
			<label class="control-label col-sm-2" name="password">Kata Sandi</label>
		 <div class="col-md-10" >
			<input type="password" name="password" class="form-control" required>
	</div>
	</div><br><br>

	<div class="list-group">
		<label class="control-label col-sm-2" name="nm_role">Jabatan</label>
		 <div class="col-md-10" >
			<select name="nm_role" class="form-control" required>
				<option selected disabled>Pilih Jabatan</option>
				<option value="Admin">Admin</option>
				<option value="Manajemen">Manajemen</option>
			</select>	
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


  