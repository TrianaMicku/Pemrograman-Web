<?php 
session_start();
	include '../koneksi.php';
	include '../index.php';
	
	if (empty($_SESSION['masuk'])) {
		header("location:../home2.php");
	}

	$sql = mysqli_query($conn, "SELECT * FROM resume");
 ?><br>
 
<div class="container">
	<div class="panel panel-default">
		<div class="panel-heading">
			<b style="font-size: 12px;">Daftar Resume</b>
		</div>

		<div class="panel-body">
			<?php if($_SESSION['nm_role'] == 'Admin'){ ?>
    		<a href="tambah_res.php" class="btn btn-info btn-sm glyphicon glyphicon-plus">Tambah</a>
		<?php } ?><br><br>
	
 <table class="table table datatable table-bordered ">
 	<thead>
 		<tr class="success">
 		<th style="text-align: center;">No.</th>
 		<th style="text-align: center;">Skills</th>
 		<th style="text-align: center;">Keterangan</th>

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
 		<td style="text-align: center;"><?php echo $data['skill'] ?></td>
    	<td style="text-align: center;"><?php echo $data['ket'] ?></td>


 		<?php if($_SESSION['nm_role'] == 'Admin'){ ?>

		<td style="text-align: center;"><a href="ubah_res.php?id_resume=<?php echo $data['id_resume'] ?>" class="btn btn-warning btn-sm glyphicon glyphicon-edit"></a>	

		<a href="hapus_res.php?id_resume=<?php echo $data['id_resume'] ?>" onclick="return confirm('Yakin ingin menghapus data ini ?');"  class="btn btn-danger btn-sm glyphicon glyphicon-trash"></a></td>

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