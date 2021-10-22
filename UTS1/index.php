 <?php 
 if(!isset($_SESSION)) 
 { 
        session_start(); 
 }
define("base_url", "http://localhost/uji_ukom/");
  if (empty($_SESSION['masuk'])) {
       header("location:home2.php");
}
 ?>

<!DOCTYPE html>
<html>
<head>
  <title>My Portofolio</title>
  
  <script src="<?php echo base_url;?>assets/js/jquery.min.js"></script>
  <script src="<?php echo base_url;?>assets/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url;?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url;?>assets/style.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url;?>assets/css/jquery.dataTables.min.css">

  <script src="<?php echo base_url;?>assets/js/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url;?>assets/js/popper.min.js"></script>
  
</head>
<body>
<style>
body {
  font-family: "Lato", sans-serif !important;
  padding-left: 175px;
  padding-right: 30px;
  margin-top: 10px;
}
</style>

<div class="print sidenav" style="background-color: black;">
    <a class=" glyphicon glyphicon-home" style="font-weight: bold; padding: 15px;" href="<?php echo base_url; ?>page/dash.php"> Beranda</a>
    <a class=" glyphicon glyphicon-user" style="font-weight: bold; padding: 15px;" href="<?php echo base_url; ?>pengguna/pengguna.php"> Users</a>
    <a class=" glyphicon glyphicon-tags" style="font-weight: bold; padding: 15px;" href="<?php echo base_url; ?>foto/foto.php"> Photo</a>
    <a class=" glyphicon glyphicon-book" style="font-weight: bold; padding: 15px;" href="<?php echo base_url; ?>blog/blog.php"> Project</a>
    <a class=" glyphicon glyphicon-list-alt" style="font-weight: bold; padding: 15px;" href="<?php echo base_url; ?>resume/resume.php"> Resume</a>
    <a class=" glyphicon glyphicon-tasks" style="font-weight: bold; padding: 15px;" href="<?php echo base_url; ?>about/abt.php"> About</a>
    <a class=" glyphicon glyphicon-log-out" style="font-weight: bold; padding: 15px;" href="../logout.php" onclick="return confirm('Apakah anda ingin keluar?')"> Logout</a>
</div>

  <nav class="navbar navbar-fixed-top" style="background-color: #ffe189;" role="navigation">
     <div class="container">
       <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Tonggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              </button>

            <table>
              <tr>
                <td>
                  <img src="../assets/img/triana.png" class="img-responsive" width="40" height="40">
                </td>
                <td>
                  <a href="" class="navbar-brand" style="color: white;"></a>
                </td>
              </tr>
            </table>
            </div>

     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">

           <li><a style="color: black;" href=""><span class="glyphicon glyphicon-user"></span> <?= ucfirst($_SESSION['username']);?> (<?= ucfirst($_SESSION['nm_role']);?>)</a></li>

    </div>  
          </div>
              </nav>
<br><br>