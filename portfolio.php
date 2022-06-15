<?php 
	include ('connection/conn.php');

	if (isset($_POST['message'])) {

		$name = $_POST['fullname'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$desc = $_POST['describe'];

		$sql = "INSERT INTO portfolio_contact (name, email, subject, description) VALUES ('$name', '$email', '$subject', '$desc')";
		$query = mysqli_query($conn,$sql);

		if ($query) {
			$succ = "Message sent successfully";
			header('location:portfolio.php?succ='.$succ);
		}else{
			$err = "Message sending FAILED";
			header('location:portfolio.php?err='.$err);
		}
	}
	mysqli_close($conn);

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Mbiman Portfolio | Home</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="portfolio.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	
</head>
<body>
	<div class="scroll-up-btn">
		<i class="fa fa-angle-up"></i>
	</div>
	<div class="container"><!--opening container-->
		<nav class="navbar">
			<div class="max-width">
				<div class="logo"><a href="#">Mbi<span>MAN.</span></a></div>
				<ul class="menu">
					<li><a href="#home" class="menu-btn">Home</a></li>
					<li><a href="#about" class="menu-btn">About</a></li>
					<li><a href="#services" class="menu-btn">Services</a></li>
					<li><a href="#skills" class="menu-btn">Skills</a></li>
					<li><a href="#team" class="menu-btn">Team</a></li>
					<li><a href="#contact" class="menu-btn">Contact</a></li>
					<li><a href="index.html" target="blank">Mbiman Intl</a></li>
				</ul>
				<div class="menu-btn">
					<i class="fa fa-bars"></i>
				</div>
			</div>
		</nav>

		<section class="home" id="home">
			<div class="max-width">
				<div class="home-content">
					<div class="text-1">Hello, my name is</div>
					<div class="text-2">Ezembi Godwin C.</div>
					<div class="text-3">And I'm a <span class="typing"></span></div>
					<a href="#">Hire Me</a>
				</div>
			</div>
		</section>
<!--About details-->
<section class="about" id="about">
			<div class="max-width">
				<h2 class="title">About me</h2>
				<div class="about-content">
					<div class="column left">
						<img src="images/jnr.jpg" alt="">
					</div>
					<div class="column right">
						<div class="text">I'm Ezembi and I'm a <span class="typing1"></span></div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<a href="#">Download CV</a>
					</div>
				</div>
			</div>
		</section>
<!-- closing about div -->




		


		<!--Services details-->
		<section class="services" id="services">
			<div class="max-width">
				<h2 class="title">My Services</h2>
				<div class="serv-content">
					<div class="card">
						<div class="box">
							<i class="fa fa-paint-brush"></i>
							<div class="text">Web Design</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							</p>
						</div>
					</div>
					<div class="card">
						<div class="box">
							<i class="fa fa-retweet"></i>
							<div class="text">Advertising</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							</p>
						</div>
					</div>
					<div class="card">
						<div class="box">
							<i class="fa fa-code"></i>
							<div class="text">Apps Design</div>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							</p>
						</div>
					</div>

				</div>
			</div>
		</section>
		<!-- closing services div -->

		<!--Skills details-->
		<section class="skills" id="skills">
			<div class="max-width">
				<h2 class="title">My skills</h2>
				<div class="skills-content">
					<div class="column left">
						<div class="text">Creativity & Experiences</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<a href="#">Read more</a>
					</div>	
					<div class="column right">
						<div class="bars">
							<div class="info">
								<span>HTML</span>
								<span>90%</span>
							</div>
							<div class="line html"></div>
						</div>
						<div class="bars">
							<div class="info">
								<span>CSS</span>
								<span>70%</span>
							</div>
							<div class="line css"></div>
						</div>
						<div class="bars">
							<div class="info">
								<span>JavaScript</span>
								<span>55%</span>
							</div>
							<div class="line js"></div>
						</div>
						<div class="bars">
							<div class="info">
								<span>PHP</span>
								<span>85%</span>
							</div>
							<div class="line php"></div>
						</div>
						<div class="bars">
							<div class="info">
								<span>MySQL</span>
								<span>80%</span>
							</div>
							<div class="line mysql"></div>
						</div>
					</div>		
				</div>
			</div>
		</section>
		<!-- closing skills div -->

		
		<!--teams details-->
		<section class="team" id="team">
			<div class="max-width">
				<h2 class="title">My Team</h2>
				<div class="carousel owl-carousel">
					<div class="card">
						<div class="box">
							<img src="images/ney1.jpg" alt="">
							<div class="text">Jay</div>
							<p>Founder of MBIMAN International @mbiman.com <br>junormbi70@gmail.com</p>
						</div>
					</div>
					<div class="card">
						<div class="box">
							<img src="images/nelson.jpg" alt="">
							<div class="text">Mgbebu Nelson</div>
							<p>JavaScript Admin: He writes all scripts we use in the field <br>Nelsonjay@yahoo.com</p>
						</div>
					</div>
					<div class="card">
						<div class="box">
							<img src="images/raph.jpg" alt="">
							<div class="text">Aso Leroi</div>
							<p>He's in charge of all advertisements & publications<br>leroi2004@hotmail.com</p>
						</div>
					</div>
					<div class="card">
						<div class="box">
							<img src="images/target.png" alt="">
							<div class="text">Nnachi Gozie</div>
							<p>Graphics Admin:He edits all images & gives our work 3d feel<br>targetphotography@gmail.com</p>
						</div>
					</div>
					<div class="card">
						<div class="box">
							<img src="images/mira1.jpg" alt="">
							<div class="text">Mirabel</div>
							<p>Editor-In-Chief: Looks out for all errors on scripts. <br>mirabella23@gmail.com</p>
						</div>
					</div>
					<div class="card">
						<div class="box">
							<img src="images/anams.jpg" alt="">
							<div class="text">Anams Ebube</div>
							<p>Mobile App Developer: Head of all mobile app's work <br>sandra4life@yahoo.com</p>
						</div>
					</div>



				</div>
			</div>
		</section>
		<!--closing team div-->

<!--contact details-->
		<section class="contact" id="contact">
			<div class="max-width">
				<h2 class="title">Contact Me</h2>
				<div class="contact-content">
					<div class="column left">
					<div class="text">Get In Touch</div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat.</p>
					<div class="icons">

						<div class="row">
							<i class="fa fa-user"></i>
							<div class="info">
								<div class="head">Name</div>
								<div class="sub-title">Ezembi Godwin Chidiebube Jnr</div>
							</div>
						</div>
						<div class="row">
							<i class="fa fa-map-marker"></i>
							<div class="info">
								<div class="head">Address</div>
								<div class="sub-title">AE-Funai</div>
							</div>
						</div>
						<div class="row">
							<i class="fa fa-envelope"></i>
							<div class="info">
								<div class="head">Email</div>
								<div class="sub-title">mbiman@gmail.com</div>
							</div>
						</div>

					</div>
					</div>

					<div class="column right">
						<div class="text">Message Me</div>
						<form method="post">
							<div class="fields">
								<div class="field name">
									<input type="text" placeholder="Name" required="" name="fullname">
								</div>
								<div class="field email">
									<input type="email" placeholder="Email" required="" name="email">
								</div>
							</div>
								<div class="field">
									<input type="text" placeholder="Subject" required="" name="subject">
								</div>
								<div class="field textarea">
									<textarea placeholder="Describe your project" cols="30" rows="10" required="" name="describe"></textarea>
								</div>
								<div class="button">
									<button type="submit" name="message" id="message">Send message</button>
								</div>
						</form>
					</div>
				</div>
			</div>
		</section>
		<!--footer detailsss-->
		<footer>
			<span>Created By <a href="#">MbiMAN</a> | <span class="fa fa-copyright"></span>2020 All Rights Reserved</span>
		</footer>

		<script src="portfolio.js"></script>


	</div><!--closing container-->
</body>
</html>