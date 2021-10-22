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

     <title>My Project</title>
 </head>

<style>
  .blog{
      padding: 0rem;
      padding-top: 130px;
  }

  #myProgress {
  width: 100%;
  background-color: #ddd;
}

#myBar {
  width: 100%;
  height: 30px;
  background-color:  #00BFFF;
  text-align: center;
  line-height: 30px;
  color: white;
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

	<div class="container">
        <div class="blog">
        <div class="row text-center mb-3">
			<div class="col">
				<h3>My Project </h3>
			</div>
		</div>

		<div class="row text-center mb-3">
	<?php
		$sql = "SELECT * FROM blog ";
		$query = mysqli_query($conn, $sql);
		$cek_tbl = mysqli_num_rows($query) > 0;

		if($cek_tbl){
			while($data = mysqli_fetch_assoc($query))
			{

			?>	
			<div class="col-md-4 mb-3 pb-3">
				<div class="card">
					<div class="card-body">
          <img src="../img/<?php echo $data['gambar']; ?>" class="card-img-top">
						<h5 class="card-title"><?php echo $data['judul']; ?></h5>
						<p class="card-text"><?php echo $data['headline']; ?></p>
					</div>
				</div>
			</div>
			
			<?php
				
			}
		}else{
			echo "No data found!";
		}
	?>
		</div>
	</div>
</div>
<!-- 2 -->


<div class="container">
        <div class="blog">
        <div class="row text-center mb-3">
			<div class="col">
				<h3>Skills</h3>
			</div>
		</div>

		<div class="row text-center mb-3">
	<?php
		$sql = "SELECT * FROM resume";
		$query = mysqli_query($conn, $sql);
		$cek_tbl = mysqli_num_rows($query) > 0;

		if($cek_tbl){
			while($data = mysqli_fetch_assoc($query))
			{

			?>	

      <div class="col-lg-3 pb-3">
				<div class="card">
					<div class="card-body">
          <h5 class="card-title"><?php echo $data['skill']; ?></h5>
					<div class="myProgress">
            <div class="progress-bar bg-warning" aria-valuemin="0" aria-valuemax= "100" id="myBar">
            <?php echo $data['ket']; ?>
          </div>
            
			</div>
          
					</div>
					</div>
			</div>
<!-- 
      <div id="myProgress">
  <div id="myBar">10%</div>
</div> -->


					<?php
				
			}
		}else{
			echo "No data found!";
		}
	?>
		</div>
	</div>
  </div>
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
		<path fill="#ffe189" 
		fill-opacity="1" 
		d="M0,32L24,58.7C48,85,96,139,144,149.3C192,160,240,128,288,
		138.7C336,149,384,203,432,229.3C480,256,528,256,576,224C624,
		192,672,128,720,138.7C768,149,816,235,864,256C912,277,960,235,
		1008,181.3C1056,128,1104,64,1152,80C1200,96,1248,192,1296,
		197.3C1344,203,1392,117,1416,74.7L1440,32L1440,320L1416,320C1392,
		320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,
		320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,
		320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,
		320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z">
		</path>
	</svg>
  <script>
var i = 0;
function move() {
  if (i == 0) {
    i = 1;
    var elem = document.getElementById("myBar");
    var width = 10;
    var id = setInterval(frame, 10);
    function frame() {
      if (width >= 100) {
        clearInterval(id);
        i = 0;
      } else {
        width++;
        elem.style.width = width + "%";
        elem.innerHTML = width  + "%";
      }
    }
  }
}
</script>

 </body>
 </html>