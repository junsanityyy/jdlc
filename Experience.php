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
	<title> Experience </title>

</head>
<body>
	<!-- Navbar -->
	<div id="header">
		<nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
			<div class="container">
				<button class="navbar-toggler" data-toggle="collapse" data-target="#Navbar">
					<span class="navbar-toggler-icon"></span>
				</button>
				<a href="#" class="navbar-brand"><h3>My Portfolio</h3></a>
				<div class="collapse navbar-collapse" id="Navbar">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a href="index.php?#About" class="nav-link">About Me</a></li>
						<li class="nav-item"><a href="index.php?#Skills" class="nav-link">Skills</a></li>
						<li class="nav-item"><a href="index.php?#Experience" class="nav-link">Experience</a></li>
						<li class="nav-item"><a href="index.php?#Contact" class="nav-link">Contact</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</div>
	<?php 
		if (isset($_GET['CapstoneProject'])) {
	 ?>
	<div class="container">
		<br/><br/><br/><br/>
		<a href="../junportfolio/#Experience" class="btn bg-dark"> Go back </a>
		<br/>
		<h1> EzSwitch: </h1>
		<img class="img-fluid m-auto py-3" src="img/capstone.jpg" height="350" width="650"><br/>
		<h3> Design and Development of a Web-based Power Switch Device using RFID. </h3>
		<p class="lead text-justify">
			The Web-based Electronic Power Switch Device is an innovative system using Radio Frequency Identification (RFID) Technology that can control the power switch of the certain appliances. This project has the ability to turn the appliances on/off through a single card by tapping it to an RFID Sensor. This project can also store the information of the card holder such as its unique card number and the name of the user himself/herself. In this project the developers chose the CICT Department Classrooms where in the appliances are the ceiling fans and fluorescent lights, by the use of this project the cardholder can monitor the said appliances through a web-based system.
			The concept of this project is to provide less consuming electricity within the area, monitor the status of appliances, and store the information of the card holder who use his card to control the power switch of the appliances inside the classroom and to implement a modern technology at the CICT Department.
			The developed system was designed for College of Information and Communications Technology (CICT) building in order to control the power switch of ceiling fans and lights in the classroom using web-based system.
		</p>
		<br/>
		<h3> Project Goals and Objectives: </h3>
		<ul>
			<li><p class="lead text-justify"> To lessen the electricity consumption in CICT Department.by using a one-tap switch that can shut down all the appliances inside the classroom.</p></li>
			<li><p class="lead text-justify"> To provide a web-based system that can monitor the status of the appliances to assure the faculty that no lights and fans will be left on.</p></li>
			<li><p class="lead text-justify"> 	To develop an innovative technology for the CICT Department in a smarter, safer and convenient environment.</p></li>
		</ul>
		<br/>
		<h3> Project Rationale: </h3>
		<p class="lead text-justify"> The developers chose their college department, College of Information and Communication Technology (CICT) The problem encountered by College of Information and Communication Technology (CICT) are there are some appliances inside the classrooms that will be left on, it takes a lot of time to find the door key of a certain classroom, so the tendency is electricity bill went up even if no one is using it, this drives the developers to conduct the study.
		This project will benefit the CICT Department by providing security to limit the usage of every classroom facility such as excessive usage of electricity even in the no-class period hence, its energy saving helps decrease the consumption of electricity.
		</p>
		<br/>
		<h3> Procedure of the Study: </h3>
		<p class="lead text-justify"> For the success of the project, it needs to undergo several procedures. The said project underwent the following steps as enumerated:</p>
		<p class="text-justify lead"> Steps: </p>
		<ol>
			<li class="text-justify lead">Upon the approval of the capstone project proposal, the developer immediately devised a clear project plan that will help them in the development of the project.</li>
			<li class="text-justify lead">After having a clear project plan. The developers conduct a research about the project using some related study.</li>
			<li class="text-justify lead">The developers consulted Mr. Cenon Sta. Maria, an Electronics Professor of CIT department about the equipment for making a device that needed for the project. The developer also asked where we can buy the equipment.</li>
			<li class="text-justify lead">Afterward, the developers went to Electronic Hub the suggested store for buying the equipment.</li>
			<li class="text-justify lead">The developers including the user-interface, database, processes, device and other necessary elements that were included in the system was devised overall design of the system.</li>
			<li class="text-justify lead">After having a clear design of system. The developer started studying on how to create the device at the same time, the developers started creating database and GUI for this project.</li>
			<li class="text-justify lead">The developer also consulted Prof. Niño Hererra a faculty of CICT to get some useful information regarding how the data will send to database.</li>
			<li class="text-justify lead">After following Prof. Niño Hererra’s suggestion and guidelines. The developers continue to develop the project.</li>
			<li class="text-justify lead">After the developing of the system, the developers will now proceed to the evaluation to 	ensure that the system is working properly.</li>

		</ol>
	</div>
	<?php 
		}

		if (isset($_GET['OnlineQuiz'])) {
	 ?>
	 <div class="container">
	 	<br/><br/><br/><br/>
		<a href="../junportfolio/#Experience" class="btn bg-dark"> Go back </a>
		<br/>
		<h1 class="text-justify"> WU-P Online Quiz: </h1>
		<img class="img-fluid m-auto py-3" src="img/quiz2.png" height="350" width="650"><br/>
		<p class="text-justify lead">
			The WU-P Online Quiz is a system that will allow Instructors/Professors to give their students a quiz. With this system students can take quiz by logging in the website, so students dont need to prepare for a sheet of paper and a piece of ballpen. Also Instructors can monitor the scores and check the students whose already take a quiz.
		</p>
		<div id="Experience">
			<div class="container mt-5">
				<span class="bg-dark text-white">Functionalities</span><hr class="bg-dark">
				<div class="row">
				<div class="col-lg-6">
					<div class="card bg-dark">
						<img src="img/signup.png" width="400" height="200" class="img-fluid m-auto py-3">
						<h3 class="text-center text-primary">Sign Up Page</h3>
						<p class="lead text-justify p-3"></p> 
					</div>
				</div>
				<div class="col-lg-6">
					<div class="card bg-dark">
						<img src="img/dashboard.png" width="400" height="200" class="img-fluid m-auto py-3">
						<h3 class="text-center text-primary">Dashboard Page</h3>
						<p class="lead text-justify p-3"></p>
					</div>
				</div>
				<div class="col-lg-6 mt-5">
					<div class="card bg-dark">
						<img src="img/add.png" width="400" height="200" class="img-fluid m-auto py-3">
						<h3 class="text-center text-primary">Add Quiz Page</h3>
						<p class="lead text-justify p-3"> </p>
					</div>
				</div>
				<div class="col-lg-6 mt-5">
					<div class="card bg-dark">
						<img src="img/results.png" width="400" height="200" class="img-fluid m-auto py-3">
						<h3 class="text-center text-primary">Quiz Results Page</h3>
						<p class="lead text-justify p-3"> </p> </div>
				</div>
				<div class="col-lg-6 mt-5">
					<div class="card bg-dark">
						<img src="img/available.png" width="400" height="200" class="img-fluid m-auto py-3">
						<h3 class="text-center text-primary">Available Quiz Page</h3>
						<p class="lead text-justify p-3"> </p>
					</div>
				</div>
				<div class="col-lg-6 mt-5">
					<div class="card bg-dark">
						<img src="img/user.png" width="400" height="200" class="img-fluid m-auto py-3">
						<h3 class="text-center text-primary">User Page</h3>
						<p class="lead text-justify p-3"> </p> </div>
				</div>
			</div>
			</div>
		</div>
	 </div>
	 <?php 
	 	}
	  ?>
</body>
</html>