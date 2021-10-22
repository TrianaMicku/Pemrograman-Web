<?php
  include '../koneksi.php';
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


	
    <!-- CSS -->
    <link rel="stylesheet" href="../style.css">

    <!-- icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

    <!-- font -->
    <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Alata%3A400%2C700%7CNoto+Sans%3A400%2C700&display=swap&ver=5.5.6"></link>

     <title>Contact Me</title>
 </head>

<style>

.contact{
    padding: 0rem;
    padding-top: 130px;
}
</style>
 <body>

 <!-- ini navbar -->
     <nav class="navbar navbar-expand-lg navbar-dark bg-warning shadow-sm fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">Triana Micku</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">

      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../home2.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="about_o.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="photos_o.php">Photos</a>
        </li>
		    <li class="nav-item">
          <a class="nav-link active" href="blog_o.php">Project</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="contact_o.php">Contact</a>
        </li>
		<li class="nav-item">
          <a class="nav-link active" href="#">
		  <i class="bi bi-box-arrow-in-right" data-bs-toggle="modal" data-bs-target="#ModalForm"></i>
		  </a>
        </li>

      </ul>
    </div>
  </div>
</nav>
	<!-- akhir navbar -->

<!-- Modal Form -->
<div class="modal fade" id="ModalForm" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <!-- Login Form -->
        <form action="../login.php" method="POST">
          <div class="modal-header">
            <h5 class="modal-title">Welcome! Let's Login</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
                <label for="Username">Username</label>
                <input type="text" name="username" class="form-control" id="Username" placeholder="Enter Username.." required>
            </div>

            <div class="mb-3">
                <label for="Password">Password</label>
                <input type="password" name="password" class="form-control" id="Password" placeholder="Enter Password"required>
            </div>
          </div>

          <div class="modal-footer pt-4">                  
            <button type="submit" class="btn btn-warning mx-auto w-100" name="masuk">Login</button>
          </div>
      </form>
    </div>
  </div>
</div>
<!-- akhir modal login -->

     <!-- ini contact -->
	<div class="container">
        <div class="contact">
		<div class="row text-center">
			<div class="col"> 
				<h3>Contact Me</h3>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-8">
			<form>
			<div class="mb-3">
				<label for="email" class="form-label">E-mail</label>
				<input type="email" class="form-control" id="email" aria-describedby="email">
			</div>
			<div class="mb-3">
				<label for="name" class="form-label">Name</label>
				<input type="text" class="form-control" id="name">
			</div>
			<div class="mb-3">
				<label for="pesan" class="form-label">Message</label>
				<textarea class="form-control" id="pesan" rows="3"></textarea>
			</div>
		<button type="submit" class="btn btn-danger">Submit</button>
		</form>
		
			    </div>
		    </div>
        </div>
	</div>
<!-- akhir contact -->
     

 </body>
 </html>