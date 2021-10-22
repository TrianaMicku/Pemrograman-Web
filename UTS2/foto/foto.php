<?php 
session_start();
	include '../koneksi.php';
	include '../index.php';
	
	if (empty($_SESSION['masuk'])) {
		header("location:../home2.php");
	}

	$sql = mysqli_query($conn, "SELECT * FROM foto");
 ?><br>
 
<div class="container">
	<div class="panel panel-default">
		<div class="panel-heading">
			<b style="font-size: 12px;">Daftar Photos</b>
		</div>

		<div class="panel-body">
			<?php if($_SESSION['nm_role'] == 'Admin'){ ?>
    		<a href="tambah_foto.php" class="btn btn-info btn-sm glyphicon glyphicon-plus">Tambah</a>
		<?php } ?><br><br>
	
 <table class="table table datatable table-bordered ">
 	<thead>
 		<tr class="success">
 		<th style="text-align: center;">No.</th>
 		<th style="text-align: center;">Photos</th>
 		<th style="text-align: center;">Tema</th>

 		<?php if($_SESSION['nm_role'] == 'Admin'){ ?>

 		<th style="text-align: center;">Aksi</th>
 		<?php } ?>
 	</tr>
 	</thead> 
 		<tbody>
 			<?php 
 	$no = 1;
 	while ($data = mysqli_fetch_array($sql)) { ?>
 	
 	<tr>
 		<td style="text-align: center;"><?php echo $no++ ?>.</td>
 		<td style="text-align: center;"><img style="width: auto; height: 90px; "  src="../img/<?php echo $data['foto'] ?>"></td>
    	<td style="text-align: center;"><?php echo $data['tema'] ?></td>
		

 		<?php if($_SESSION['nm_role'] == 'Admin'){ ?>

		<td style="text-align: center;"><a href="ubah_foto.php?id_foto=<?php echo $data['id_foto'] ?>" class="btn btn-warning btn-sm glyphicon glyphicon-edit"></a>	

		<a href="hapus_foto.php?id_foto=<?php echo $data['id_foto'] ?>" onclick="return confirm('Yakin ingin menghapus data ini ?');"  class="btn btn-danger btn-sm glyphicon glyphicon-trash"></a></td>

	<?php } ?>
 	</tr>
 	<?php } ?>
 		</tbody>
 
 	
 </table>
</div>
</div>
</div>


 <?php 
	include '../footer.php';
 ?>