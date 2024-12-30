<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<title>greySense - Book Check Out</title>
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
				<li><a class="nav-link" href="../registration/dashboard.php">Dashboard</a></li>
				<li>
					<button class="get-started-button"><a href="../registration/logout.php" class="get-satrted-link">Logout</a></button>
				</li>
			</ul>
		</nav>
		<!--End of Navigation Bar-->
	
	<!--Hero Section-->
	<section class="hero">
		<div class="hero-row">
			<div class="hero-column">
				<div class=" login-form-container">
					<form class="login-form" action="checkingOutProcessing.php" method="post">
						<i class="fa-solid fa-user"></i>
						<h4>Book Check-Out</h4>
						<div class="login-info-container">
							<input type="text" class="inputield" name="studentID" size="20" maxlength="30" placeholder="Student's school issued ID number" required>
							<input type="text" class="inputield" name="ISBN" size="20" maxlength="30" placeholder="ISBN" required>
							<input type="date" class="dateCheckOut" name="dateCheckOut">
							<input type="submit" class="loginButton" value="Check-Out">
						</div>
					</form>
				</div>
			</div>
			<div class="hero-comunn hero-column-2">
				<img src="../assets/img/Reading glasses-pana.png" class="hero-vector hero-vector-login">
			</div>
		</div>
	</section>
	<!--End of Hero Section-->
	
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
