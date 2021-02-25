<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA Compatible" content="ie=edge">
	<link rel="stylesheet" a href="css/bootstrap.css">
	<link rel="stylesheet" a href="css/mystyle.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<link href="fonts/font-awesome.css" rel="stylesheet">
	<title>My Portfolio</title>

	<?php 
		if (isset($_GET['CapstoneProject'])) {
			echo "<script> window.location.assign('Experience.php?CapstoneProject') </script>";
			
		}
		if (isset($_GET['OnlineQuiz'])) {
			echo "<script> window.location.assign('Experience.php?OnlineQuiz') </script>";
		}

	 ?>
</head>
<body data-spy="scroll" data-target".navbar" id="home">
	<!-- Navbar -->
	<div id="header">
		<nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
			<div class="container">
				<button class="navbar-toggler" data-toggle="collapse" data-target="#Navbar">
					<span class="navbar-toggler-icon"></span>
				</button>
				<a href="#home" class="navbar-brand"><h3>My Portfolio</h3></a>
				<div class="collapse navbar-collapse" id="Navbar">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a href="#About" class="nav-link">About Me</a></li>
						<li class="nav-item"><a href="#Skills" class="nav-link">Skills</a></li>
						<li class="nav-item"><a href="#Experience" class="nav-link">Experience</a></li>
						<li class="nav-item"><a href="#Contact" class="nav-link">Contact</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</div>

	<!-- Showcase -->
	<div id="bg-img">
		
	</div>

	<!-- About -->
	<div id="About">
		<div class="container">
			<div class="row">
				<div class="col">
					<div id="AboutData">
						<div class="card bg-white">
							<div class="card-title my-5">
								<div class="media">
									<img src="img/me.jpg" width="250" height="250" class="img-fluid rounded-top mx-5 d-none d-lg-block">
									<div class="media-body">
										<h3 class="display-4 ml-4">I'm Manolito R Dela Cruz Jr.</h3>
										<p class="text-muted ml-4">Web Developer</p>
										<div class="container">
											<table class="table table-responsive ml-2">
												<tr>
													<td class="text-muted">Age</td>
													<td>:</td>
													<td>22 Years Old</td>
												</tr>
												<tr>
													<td class="text-muted">Email</td>
													<td>:</td>
													<td>junsanityyy666@gmail.com</td>
												</tr>
												<tr>
													<td class="text-muted">Website</td>
													<td>:</td>
													<td>www.JDLC.com</td>
												</tr>
												<tr>
													<td class="text-muted">Phone</td>
													<td>:</td>
													<td>(+63) 939-647-8629</td>
												</tr>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="card-footer bg-danger">
							<a target="new" href="../facebook.com/junsanityyy"><i class="fa fa-facebook fa-2x mx-3"></i></a>
							<a target="new" href="../instagram.com/superjunnnn"><i class="fa fa-instagram fa-2x mx-3"></i></a>
							<a href="#"><i class="fa fa-pinterest fa-2x mx-3"></i></a>
							<a href="mailto:junsanityyy666@gmail.com"><i class="fa fa-google fa-2x mx-3"></i></a>
							<a href="#"><i class="fa fa-github fa-2x mx-3"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container mt-5 ">
			<div class="row">
				<div class="col">
					<span class="bg-danger text-white">About Me</span><hr class="bg-danger">
					<p class="lead text-justify">
						I am Manolito R. Dela Cruz Jr., a fresh graduate of Bachelor of Science in Information Technology Major in Web Applications Programming. I am kind of hardworking individual, i want everything that i work into will be done before the deadline or way ahead of the deadline. I am 22 years old, i live in Purok 1 Brgy. San Isidro, Cabanatuan City Nueva Ecija. I like being challenge in a project that my instructor gave to me. I want to expand and improve my knowledge and skills in every project that i work on. My main programming language is PHP: Pre-Processor, I also used HTML5, CSS3, Bootstrap 4, and JavaScript in it. I have a basic knowledge too in C++, Java, VB.Net, and PHP framework called Laravel.
					</p>
				</div>
			</div>
		</div>
	</div>	
	</div>

	<!-- Skill -->
	<div id="Skills" class="mt-5">
		<div class="container">
			<span class="bg-primary text-white">My Skills</span><hr class="bg-primary">
			<div class="row">
				<div class="col">
					<div class="card bg-white">
						<h3 class="ml-3 my-3">HTML</h3>
						<div class="progress mx-3">
							<div class="progress-bar" style="width: 95%">95%</div>
						</div>
						<h3 class="ml-3 my-3">CSS</h3>
						<div class="progress mx-3">
							<div class="progress-bar" style="width: 80%">80%</div>
						</div>
						<h3 class="ml-3 my-3">PHP Language</h3>
						<div class="progress mx-3">
							<div class="progress-bar" style="width: 95%">95%</div>
						</div>
						<h3 class="ml-3 my-3">C# Language / C++ Language</h3>
						<div class="progress mx-3">
							<div class="progress-bar" style="width: 50%">50%</div>
						</div>
						<h3 class="ml-3 my-3">JavaScript Language</h3>
						<div class="progress mx-3">
							<div class="progress-bar" style="width: 60%">60%</div>
						</div>
						<h3 class="ml-3 my-3">VB .NET Language</h3>
						<div class="progress mx-3 mb-3">
							<div class="progress-bar" style="width: 60%">60%</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Experience -->
	<div id="Experience">
		<div class="container mt-5">
			<span class="bg-success text-white">Experiences</span><hr class="bg-success">
			<div class="row">
				<div class="col-lg-6">
					<div class="card bg-white">
						<img src="img/capstone.jpg" width="200" height="80" class="img-fluid m-auto py-3">
						<h3 class="text-center text-danger"><a href="index.php?CapstoneProject">Capstone Project</a></h3>
						<p class="lead text-justify p-3">The Web-based Electronic Power Switch Device is an innovative system using Radio Frequency Identification (RFID) Technology that can control the power switch of the certain appliances. This project has the ability to turn the appliances on/off through a single card by tapping it to an RFID Sensor. </p> </div>
				</div>
				<div class="col-lg-6">
					<div class="card bg-white">
						<img src="img/quiz2.png" width="200" height="80" class="img-fluid m-auto py-4">
						<h3 class="text-center text-success"><a href="index.php?OnlineQuiz">WU-P Online Quiz</a></h3>
						<p class="lead text-justify p-3"> The WU-P Online Quiz is a system that will allow Instructors/Professors to give their students a quiz. With this system students can take quiz by logging in the website, so students dont need to prepare for a sheet of paper and a piece of ballpen. Also Instructors can monitor the scores and check the students whose already take a quiz. </p>
					</div>
				</div>
				<!--
				<div class="col-lg-6 mt-5">
					<div class="card bg-white">
						<img src="img/quiz.png" width="200" height="80" class="img-fluid m-auto py-4">
						<h3 class="text-center text-success">NEUST Online Quiz</h3>
						<p class="lead text-justify p-3"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. </p>
					</div>
				</div>
				<div class="col-lg-6 mt-5">
					<div class="card bg-white">
						<img src="img/capstone.jpg" width="200" height="80" class="img-fluid m-auto py-3">
						<h3 class="text-center text-danger">Capstone Project</h3>
						<p class="lead text-justify p-3"> This project can also store the information of the card holder such as its unique card number and the name of the user himself/herself. In this project the developers chose the CICT Department Classrooms where in the appliances are the ceiling fans and fluorescent lights, by the use of this project the 2 cardholder can monitor the said appliances through a web-based system. The concept of </p> </div>
				</div>
			-->
			</div>
		</div>
	</div>

	<!-- Contact -->
	<div id="Contact">
		<div class="container mt-5">
			<span class="bg-dark text-white">Contact Me!</span><hr class="bg-dark">
			<div class="row">
				<div class="col">
					<div class="card bg-white pb-2">
						<div class="card-header">
							<h4 class="my-3">Contact Me On Below!</h4>
							<div class="form-group">
								<input type="text" placeholder="Username" class="form-control">
							</div>
							<div class="form-group">
								<input type="text" placeholder="Email" class="form-control">
							</div>
							<div class="form-group">
								<textarea class="form-control" placeholder="Write Something here..."></textarea>
							</div>
							<div class="form-group">
								<button class="btn btn-success text-white">Submit Now</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->
	<div class="container-fluid bg-dark">
		<div class="row">
			<div class="col">
				<div class="container">
					<p class="text-white pt-3 text-center"> My Personal Portfolio!
					Designed By: OnlineTtuts.Com</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>