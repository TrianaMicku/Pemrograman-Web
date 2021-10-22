<!-- home utama sebelum login! -->
<?php
  include 'koneksi.php';

$sql = mysqli_query($conn, "SELECT * FROM about");
$data   = mysqli_fetch_array($sql);
 ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

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
    <link rel="stylesheet" href="style.css">

    <!-- icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

    <!-- font -->
    <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Alata%3A400%2C700%7CNoto+Sans%3A400%2C700&display=swap&ver=5.5.6"></link>
	
	<title>My Portofolio</title>
</head>
<body>

	<!-- ini navbar -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-warning shadow-sm fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">Portofolio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home2.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="other/about_o.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="other/photos_o.php">Photos</a>
        </li>
		<li class="nav-item">
          <a class="nav-link active" href="other/blog_o.php">Project</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="other/contact_o.php">Contact</a>
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
        <form action="login.php" method="POST">
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

	<!-- ini jumbotron -->
<div class="jumbotron text-center">
	<!-- <img src="img/" src="<?php echo $data2['foto'] ?> alt="Triana Micku" class="rounded-circle img-thumbnail" width="100"> -->
	<!-- <a href="foto.php?id_foto='.$data['id_foto'].'"></a> -->
	<br><br><br><br>
	<h1 class="display-4">Triana Micku</h1>
	<p class="lead">Blogger | Photograph | Traveler</p>
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
		<path fill="#ffffff" 
		fill-opacity="10" 
		d="M0,224L26.7,229.3C53.3,235,107,245,160,234.7C213.3,224,267
		,192,320,160C373.3,128,427,96,480,117.3C533.3,139,587,213,640,
		218.7C693.3,224,747,160,800,138.7C853.3,117,907,139,960,133.3C1013.3,
		128,1067,96,1120,106.7C1173.3,117,1227,171,1280,192C1333.3,213,1387,
		203,1413,197.3L1440,192L1440,320L1413.3,320C1386.7,320,1333,320,1280,
		320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,
		853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,
		320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z">
		</path>
	</svg>
</div>
	<!-- akhir jumbotron -->
	
	<!-- ini about -->
<section id="about">
	<div class="container">

	<div class="row text-center mb-3">
		<div class="col">
			<h3>About Me</h3> 
		</div>
	</div>
	<div class="row justify-content-center fs-5 text-center ">
		<div class="col-sm-4">
			<img class="rounded-circle img-thumbnail" width="350" src="img/<?php echo $data['foto2'] ?>">
		</div>

		<div class="col-sm-6 text-justify  ">
		<p><?php echo $data['intro'] ?></p>

			<a href="mailto:trianamicku21@gmail.com">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" 
				class="bi bi-envelope-fill" viewBox="0 0 16 16">
				<path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
				</svg>
			</a>

			<a href="http://www.instagram.com/trianakrr/">
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" 
				class="bi bi-instagram" viewBox="0 0 16 16">
				<path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
			</svg>
			</a>

			<a href="https://id.linkedin.com/in/triana-micku-kuswara-putri-700117223">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" 
				class="bi bi-linkedin" viewBox="0 0 16 16">
				<path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
				</svg>
			</a>

		</div>
	</div>
	</div>
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
		<path fill="#ffe189" 
		fill-opacity="10" 
		d="M0,192L30,165.3C60,139,120,85,180,90.7C240,96,300,160,360,
		197.3C420,235,480,245,540,245.3C600,245,660,235,720,202.7C780,
		171,840,117,900,128C960,139,1020,213,1080,202.7C1140,192,1200,
		96,1260,58.7C1320,21,1380,43,1410,53.3L1440,64L1440,320L1410,
		320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,
		320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,
		320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,
		320,30,320L0,320Z">
		</path>
	</svg>
</section>
	<!-- akhir about -->

	<!-- ini photos -->
<section id="photos">
	<div class="container">
	<div class="row text-center mb-3">
		<div class="col">
			<h3>My Photos</h3> 
		</div>
	</div>
	<div class="row text-center mb-3">
	<?php
		$sql = "SELECT * FROM foto ";
		$query = mysqli_query($conn, $sql);
		$cek_tbl = mysqli_num_rows($query) > 0;

		if($cek_tbl){
			while($data = mysqli_fetch_assoc($query))
			{

			?>	
			
				<div class="col-md-3 pb-3">
				<div class="card">
					<div class="card-body">
					<img src="img/<?php echo $data['foto']; ?>" class="card-img-top">
						<p class="card-text"><?php echo $data['tema']; ?></p>
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
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
		<path fill="#ffffff" 
		fill-opacity="10" 
		d="M0,0L24,32C48,64,96,128,144,138.7C192,149,240,107,288,
		90.7C336,75,384,85,432,117.3C480,149,528,203,576,240C624,
		277,672,299,720,293.3C768,288,816,256,864,224C912,192,960,
		160,1008,154.7C1056,149,1104,171,1152,176C1200,181,1248,171,
		1296,149.3C1344,128,1392,96,1416,80L1440,64L1440,320L1416,
		320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,
		320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,
		720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,
		320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,
		320L0,320Z">
		</path>
	</svg>
</section>
	<!-- akhir photos -->

	<!-- ini blog -->
<section id="blog">
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
          			<img src="img/<?php echo $data['gambar']; ?>" class="card-img-top">
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

</section>
	<!-- akhir blog -->
	
	<!-- ini contact -->
<section id="contact">
	<div class="container">
		<div class="row text-center mb-3">
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
</section>
	<!-- akhir contact -->

<footer class="bg-warning text-white text-center pb-3">
	<p>Copyright &copy; 2021. Developed by 
	<a href="http://www.instagram.com/trianakrr/" class="text-white fw-bold">Triana Micku</a></p>
</footer>