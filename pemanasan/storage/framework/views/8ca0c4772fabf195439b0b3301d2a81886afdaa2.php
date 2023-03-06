<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Bootstrap CSS -->
		<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

		<link href="https://fonts.googleapis.com/css2?family=Caveat:wght@600&family=Lato&family=Shadows+Into+Light&display=swap" rel="stylesheet"> 

		<style>
			.custom-body{
				background-color: #fcfcfc !important;
			}
			.custom-navbar-color{
				background-color: #f3eaeb !important;
			}
			.custom-navbar-item-color {
				margin:1%;
				padding:1%;
				padding-left: 2%;
				padding-right: 2%;
			}
			.custom-navbar-item-color:hover{
				background-color: #e7dcdd !important;
			}

			.custom-navbar-item-color.active{
				background-color: #ffdad9 !important;
			}

			.custom-card-color {
				background-color: #f5f0f0 !important;
			}

			.custom-card-pop-color {
				background-color: #ffdad9 !important;
			}
		</style>


		
		<title>Samuel Sebastian</title>
	</head>
	<body class="custom-body" style="box-sizing: border-box; font-family: 'Lato', sans-serif;">
		<!-- Navbar -->
		<nav class="navbar navbar-expand-lg bg-light custom-navbar-color">
		  <div class="container-fluid">
		    <a class="navbar-brand" href="#">Pemanasan Kelompok 9</a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		      <div class="navbar-nav">
		      	<a class="nav-link rounded-5 custom-navbar-item-color<?php
		      		if($name=='samuel'){
		      			echo ' active" aria-current="page';
		      		}

		      	?>"  href="samuel">Samuel</a>

		        <a class="nav-link rounded-5 custom-navbar-item-color<?php
		      		if($name=='delvina'){
		      			echo ' active" aria-current="page';
		      		}

		      	?>"  href="delvina">Delvina</a>

		        <a class="nav-link rounded-5 custom-navbar-item-color<?php
		      		if($name=='mary'){
		      			echo ' active" aria-current="page';
		      		}

		      	?>"  href="mary">Mary</a>

		        <a class="nav-link rounded-5 custom-navbar-item-color<?php
		      		if($name=='nicholaus'){
		      			echo ' active" aria-current="page';
		      		}

		      	?>"  href="nicholaus">Nicholaus</a>
		      </div>
		    </div>
		  </div>
		</nav>
		
		<!-- Profile -->
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-4" >
					<div class="card mb-4 shadow rounded-4 custom-card-pop-color" style="margin: 30px; padding: 20px">
						<div class="card-body text-center">
							<img src="../img/samuel.jpg" class="rounded-4" alt="Samuel Sebastian" style="max-width: 70%;">
							<h1 class="my-3" style="font-family: 'Caveat', cursive; font-weight:bold;">Samuel Sebastian</h1>
							<p class="text-muted mb-1">Computer Science and Statistics</p>
							<p class="text-muted mb-1">Binus University, Jakarta</p>
							
							
						</div>
					</div>
				</div>
				
				<div class="col-lg-7">
					<div class="card mb-4 shadow rounded-4  custom-card-color" style="margin: 30px; padding: 20px">
						<div class="card-body">
							<div class="row">
								<div class="col-sm-3">
									<p class="mb-0">Name</p>
								</div>
								<div class="col-sm-8">
									<p class="text-muted mb-0">Samuel Sebastian</p>
								</div>
							</div>
							<hr>
							<div class="row">
								<div class="col-sm-3">
									<p class="mb-0">E-mail</p>
								</div>
								<div class="col-sm-8">
									<p class="text-muted mb-0">samuel.christlie@binus.ac.id</p>
								</div>
							</div>
							<hr>
							<div class="row">
								<div class="col-sm-3">
									<p class="mb-0">Birthday</p>
								</div>
								<div class="col-sm-8">
									<p class="text-muted mb-0">June 25</p>
								</div>
							</div>
							<hr>
							<div class="row">
								<div class="col-sm-3">
									<p class="mb-0">Favorite Course</p>
								</div>
								<div class="col-sm-8">
									<p class="text-muted mb-0">Web Programming</p>
								</div>
							</div>
							<hr>
							<div class="row">
								<div class="col-sm-3">
									<p class="mb-0">Skills or Hobbies</p>
								</div>
								<div class="col-sm-8">
									<p class="text-muted mb-0">Reading</p>
								</div>
							</div>
							<hr>
							<div class="row">
								<div class="col-sm-3">
									<p class="mb-0">Description</p>
								</div>
								<div class="col-sm-8">
									<p class="text-muted mb-0">I'm Sam, a 20-year-old student studying Computer Science and Statistics. I'm really interested in how technology and data can be used together to solve complex problems, and I'm excited to be pursuing this area of study. I'm a hardworking and dedicated student, always looking to learn new concepts and explore innovative ideas. In my free time, I like to code and experiment with new programming languages. I also enjoy reading and playing video games. Overall, I'm passionate about using my skills to make a positive impact in the world.</p>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
			
			
			
			
			
			
			
			
			
			
			
			
		</body>
	</html><?php /**PATH /home/vol11_2/epizy.com/epiz_33696105/htdocs/pemanasan/resources/views/profile/samuel.blade.php ENDPATH**/ ?>