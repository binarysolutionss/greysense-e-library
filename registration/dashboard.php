<?php

session_start();

?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>greySense - Dashboard</title>
	<link href="../assets/css/style.css" rel="stylesheet" type="text/css">
	<link href="../assets/css/logInStyle.css" rel="stylesheet" type="text/css">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="../assets/js/main.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://kit.fontawesome.com/b5a38f818c.js" crossorigin="anonymous"></script>
	<link href="../assets/img/Logo - Fav Icon.png" rel="icon">
</head>

<body>
	
	<!--Navigation Bar-->
		<nav class="nav-bar" id="nav-bar">
			<div class="logo">
			<a href="#"><img src="../assets/img/Logo.png"></a>
			</div>
			<ul>
				<li>
					<button class="get-started-button"><a href="logout.php" class="get-satrted-link">Log Out</a></button>
				</li>
			</ul>
		</nav>
		<!--End of Navigation Bar-->
	
	<!--Services-->
	<section class="services dashboardOptions">
		<div class="services-title dashboard-title">
			<h2>Dashboard</h2>
         	<p>Hello User! Welcome to your dashboard.</p>
		</div>
		
		<div class="services-info">
			<div class="services-row dashboardOptions-row">
				<div class="services-column dashboardOptions-column">
					 <i class="fa-solid fa-cog fa-spin"></i>
					<h4 class="services-header">Add Book</h4>
					<p class="services-description">Add new books into the greySense e-Library database.</p>
					<button class="dashboard-actions"><a href="../bookActions/addBook.php">Get Started</a></button>
				</div>
				
				<div class="services-column dashboardOptions-column">
					 <i class="fa-solid fa-cog fa-spin"></i>
					<h4 class="services-header">Add Student</h4>
					<p class="services-description">Add new students into the greySense e-Library database.</p>
					<button class="dashboard-actions"><a href="../studentActions/addStudent.php">Get Started</a></button>
				</div>
				
				<div class="services-column dashboardOptions-column">
					 <i class="fa-solid fa-cog fa-spin"></i>
					<h4 class="services-header">Record Book Check-In</h4>
					<p class="services-description">Record the check in of a book returned by a student.</p>
					<button class="dashboard-actions"><a href="../bookActions/bookCheckIn.php">Get Started</a></button>
				</div>
				
				<div class="services-column dashboardOptions-column">
					 <i class="fa-solid fa-cog fa-spin"></i>
					<h4 class="services-header">Record Book Check-Out</h4>
					<p class="services-description">Record the check out of a book borrowed by a student.</p>
					<button class="dashboard-actions"><a href="../bookActions/bookCheckOut.php">Get Started</a></button>
				</div>
				
				<div class="services-column dashboardOptions-column">
					 <i class="fa-solid fa-cog fa-spin"></i>
					<h4 class="services-header">Update Book Records</h4>
					<p class="services-description">Edit and update boo records in the greySense e-Library database.</p>
					<button class="dashboard-actions"><a href="../bookActions/updateBook.php">Get Started</a></button>
				</div>
				
				<div class="services-column dashboardOptions-column">
					 <i class="fa-solid fa-cog fa-spin"></i>
					<h4 class="services-header">Update Student Records</h4>
					<p class="services-description">Edit and update student records in the greySense e-Library database.</p>
					<button class="dashboard-actions"><a href="../studentActions/updateStudent.php">Get Started</a></button>
				</div>
				
				<div class="services-column dashboardOptions-column">
					 <i class="fa-solid fa-cog fa-spin"></i>
					<h4 class="services-header">Delete Book</h4>
					<p class="services-description">Delete books from the greySense e-Library database.</p>
					<button class="dashboard-actions"><a href="../bookActions/deleteBook.php">Get Started</a></button>
				</div>
				
				<div class="services-column dashboardOptions-column">
					 <i class="fa-solid fa-cog fa-spin"></i>
					<h4 class="services-header">Delete Student</h4>
					<p class="services-description">Delete students from the greySense e-Library database.</p>
					<button class="dashboard-actions"><a href="../studentActions/deleteStudent.php">Get Started</a></button>
				</div>
				
				<div class="services-column dashboardOptions-column">
					 <i class="fa-solid fa-cog fa-spin"></i>
					<h4 class="services-header">Search Book</h4>
					<p class="services-description">Retrieve specific book records in the greySense e-Library database.</p>
					<button class="dashboard-actions"><a href="../bookActions/searchBook.php">Get Started</a></button>
				</div>
				
				<div class="services-column dashboardOptions-column">
					 <i class="fa-solid fa-cog fa-spin"></i>
					<h4 class="services-header">Search Student</h4>
					<p class="services-description">Retrieve specific student records in the greySense e-Library database.</p>
					<button class="dashboard-actions"><a href="../studentActions/searchStudent.php">Get Started</a></button>
				</div>
				
			</div>
		</div>
		
		
	</section>		
	<!--End of Services-->
	
	<!--Footer-->
	<footer class="footer">
		<div class="footer-content">
			<div class="copyright">
					&copy; Copyright <strong>greySense</strong>. All Rights Reserved
					<p>Designed by <a href="#">Stanley Masimba Chiremba 200180</a></p>
				</div>
			<div class="footer-links">
				<nav class="footer-nav">
					<a class="footer-nav-links" href="../assets/documentation/Stanley Masimba Chiremba - NCSE303 Project Documentation.docx" download>Documentation</a>
				</nav>
			</div>
		</div>
	</footer>
	<!--End of Footer-->
	
	<script>
		//Nav bar whitens as you scroll down
		$(function(){
			$(document).scroll(function(){
				var $nav = $('.nav-bar');
				$nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
			});
		});
	</script>
	
</body>
</html>
