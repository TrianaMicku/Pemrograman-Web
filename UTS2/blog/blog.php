<?php 
session_start();
	include '../koneksi.php';
	include '../index.php';
	
	if (empty($_SESSION['masuk'])) {
		header("location:../home2.php");
	}

	$sql = mysqli_query($conn, "SELECT * FROM blog");
 ?><br>
 
<div class="container">
	<div class="panel panel-default">
		<div class="panel-heading">
			<b style="font-size: 12px;">Daftar Project</b>
		</div>

		<div class="panel-body">
			<?php if($_SESSION['nm_role'] == 'Admin'){ ?>
    		<a href="tambah_blog.php" class="btn btn-info btn-sm glyphicon glyphicon-plus">Tambah</a>
		<?php } ?><br><br>
	
 <table class="table table datatable table-bordered ">
 	<thead>
 		<tr class="success">
 		<th style="text-align: center;">No.</th>
		<th style="text-align: center;">Gambar</th>
 		<th style="text-align: center;">Judul</th>
		<th style="text-align: center;">Headline</th>
 		
		

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
		<td style="text-align: center;"><img style="width: auto; height: 90px; "  src="../img/<?php echo $data['gambar'] ?>"></td></td>
 		<td style="text-align: center;"><?php echo $data['judul'] ?></td>
		<td style="text-align: center;"><?php echo $data['headline'] ?></td>
	

 		<?php if($_SESSION['nm_role'] == 'Admin'){ ?>

		<td style="text-align: center;"><a href="ubah_blog.php?id_blog=<?php echo $data['id_blog'] ?>" class="btn btn-warning btn-sm glyphicon glyphicon-edit"></a>	

		<a href="hapus_blog.php?id_blog=<?php echo $data['id_blog'] ?>" onclick="return confirm('Yakin ingin menghapus data ini ?');"  class="btn btn-danger btn-sm glyphicon glyphicon-trash"></a></td>

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