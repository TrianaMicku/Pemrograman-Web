<?php 
session_start();
	include '../koneksi.php';
	include '../index.php';
	if (empty($_SESSION['masuk'])) {
		header("location:../home.php");
	}
 ?>

<div class="container">
 <div class="alert alert-success">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      Selamat datang, <?= ucfirst($_SESSION['username']);?>!
  </div>
  </div>

<!-- peminjaman terbaru -->

		<!-- totalan -->
	<div class="container">

		<div class="row">

	    <div class="col-lg-2" style="margin-right: 30px;">
 			<div class="col-lg-12" style="border-radius: 10px; width: 190px; height: 50px; margin-right: 10px; background-color: #ed553b; ">
      	<?php 
 			$sqlPeng = mysqli_query($conn,"SELECT COUNT(*) AS ttlPeng FROM user");
 			$dataPeng = mysqli_fetch_array($sqlPeng);
 		?>
      	<h5 style="color: black;"><a href="../pengguna/pengguna.php" style="color: white; float: right;"> |<?php echo $dataPeng['ttlPeng'] ?></a>Data Users</h5>

      </div>
    </div>

   <div class="col-lg-2" style="margin-right: 30px;">
 		<div class="col-lg-12" style="border-radius: 10px; width: 190px;  height: 50px; margin-right: 10px; background-color: #ed553b;">
		<?php 
 			$sqlFoto = mysqli_query($conn,"SELECT COUNT(*) AS ttlFoto FROM foto");
 			$dataFoto = mysqli_fetch_array($sqlFoto);
		?>
      	<h5 style="color: black;"><a href="../foto/foto.php" style="color: white;float: right;"> |<?php echo $dataFoto['ttlFoto'] ?></a>Data Photo</h5>

      </div>
    </div>

   <div class="col-lg-2" style="margin-right: 30px;">
 		<div class="col-lg-12" style="border-radius: 10px; width: 190px;  height: 50px; margin-right: 10px; background-color: #ed553b;">
		<?php 
 			$sqlBlog = mysqli_query($conn,"SELECT COUNT(*) AS ttlBlog FROM blog ");
 			$dataBlog = mysqli_fetch_array($sqlBlog);
 		?>
      	<h5 style="color: black;"><a href="../blog/blog.php" style="color: white; float: right;"> |<?php echo $dataBlog['ttlBlog'] ?></a>Data Blog</h5>

      </div>
    </div>

	<div class="col-lg-2" style="margin-right: 30px;">
 		<div class="col-lg-12" style="border-radius: 10px; width: 190px;  height: 50px; margin-right: 10px; background-color: #ed553b;">
		<?php 
 			$sqlresume = mysqli_query($conn,"SELECT COUNT(*) AS ttlresume FROM resume ");
 			$dataresume = mysqli_fetch_array($sqlresume);
 		?>
      	<h5 style="color: black;"><a href="../resume/resume.php" style="color: white; float: right;"> |<?php echo $dataresume['ttlresume'] ?></a>Data resume</h5>

      </div>
    </div>

		</div><!-- row -->
        <br>


	<script>
	$(document).ready(function(){
	  $(".dropdown").on("show.bs.dropdown", function(event){
	   
	  });
	});
	</script>


  </div><!-- container -->
</div>

<!-- akhir -->

<br><br><br><br><br>
<?php 
  include '../footer.php';

  ?>