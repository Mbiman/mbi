<?php
	session_start();
	if (! isset($_SESSION['name'])) {
		header('location:register.php');
	}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Mbiman International | Home</title>
	<meta charset="UTF-8">
	<meta name="author" content="Ezembi">
	<meta name="keyword" content="html, css, javascript, php, mysqli">
	<meta name="description" content="E-commerce, Clothing, Electronics, Computing">
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
</head>
<body>
	<div id="container">
		<div class="row">
			<div class="header">
			<div class="navbar">
				<div class="content">
				<label class="logo"><a href="#">MBIMAN<i class="fa fa-cart-plus"></i></a></label>
				<ul class="menu-list">
					<div class="icon cancel-btn">
					<i class="fa fa-times"></i>
					</div>
					<li><a class="active" href="#">Home</a></li>
					<li><a href="logout.php">LogOut</a></li>
					<li><a href="#">Help</a></li>
					<li><a href="#">Cart</a></li>
					<li><a href="#">Search</a></li>
				</ul>
				 
				<div class="icon menu-btn">
					<i class="fa fa-bars"></i>
				</div>
			</div>
			</div>
		</div>

			<div class="banner"></div>
			<?php 
						if (isset($_SESSION['name'])) {
							
							echo "</br>";
								echo $_SESSION['name'];
							}
						 ?>	
			<div class="about">

				<div class="content">
					<div class="title">Welcome To MBIMAN<i class="fa fa-cart-plus" ></i> International Online Shopping Mall</div>
					<p style="font-family: sans-serif; text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
			</div>
			

			<script>
				const body = document.querySelector("body");
				const navbar = document.querySelector(".navbar");
				const menu = document.querySelector(".menu-list");
				const menuBtn = document.querySelector(".menu-btn");
				const cancelBtn = document.querySelector(".cancel-btn");
				menuBtn.onclick = ()=>{
					menu.classList.add("active");
					menuBtn.classList.add("hide");
					body.classList.add("disabledScroll");
				}
				cancelBtn.onclick = ()=>{
					menu.classList.remove("active");
					menuBtn.classList.remove("hide");
					body.classList.remove("disabledScroll");
				}

				window.onscroll = ()=>{
					this.scrollY > 20 ? navbar.classList.add("sticky") : navbar.classList.remove("sticky");
				}
			</script>

			<div class="all">
			<div class="Main"><!--Opening Main Div-->
				<div class="mleft">
					<table class="bar">
			
			<tr>
				<td><li><a href="shoes.php"><i class="fa fa-cart-plus" ></i>Shoes</a></li></td>
			</tr>
			<tr>
				<td><li><a href="health.php"><i class="fa fa-ambulance"></i>Health</a></li></td>
			</tr >
			<tr>
				<td><li><a href="home.php"><i class="fa fa-home"></i>Home</a></li></td>
			</tr>
			<tr>
				<td><li><a href="iphone.php"><i class="fa fa-mobile"></i>Phones</a></li></td>
			</tr>
			<tr>
				<td><li><a href="laptop.php"><i class="fa fa-desktop"></i>Computing</a></li></td>
			</tr>
			<tr>
				<td><li><a href="electronics.php"><i class="fa fa-television"></i>Electronics</a></li></td>
			</tr>
			<tr>
				<td><li><a href="fashion.php"><i class="fa fa-female"></i>Fashion</a></li></td>
			</tr>
			<tr>
				<td><li><a href="sports.php"><i class="fa fa-bicycle"></i>Sporting</a></li></td>
			</tr>
			<tr>
				<td><li><a href="soccer.php"><i class="fa fa-briefcase"></i>Soccer</a></li></td>
			</tr>
			<tr>
				<td><li><a href="beauty.php"><i class="fa fa-paint-brush"></i>Beauty</a></li></td>
			</tr>
			<tr>
				<td><li><a href="#"><i class="fa fa-mail-forward"></i>Others</a></li></td>
			</tr>
					</table>
				</div>
				<div class="mcenter">
					 <div class="slide-container">
       <div class="slide fade">
        <img src="images/mbiman1.png" alt=''>
      </div>
      <div class="slide fade">
         <img src="images/mbiman2.png" alt=''>
      </div>
      <div class="slide fade">
         <img src="images/mbiman3.png" alt=''>
      </div>
      <div class="slide fade">
        <img src="images/mbiman4.png" alt=''>
      </div>

      <a href="#" class="prev" title="Previous">&#10094</a>
      <a href="#" class="next" title="Next">&#10095</a>
    </div>
    <div class="dots-container">
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>
    </div>
    <script>
      var currentSlide = 0;
const slides = document.querySelectorAll(".slide")
const dots = document.querySelectorAll('.dot')

const init = (n) => {
  slides.forEach((slide) => {
    slide.style.display = "none"
    dots.forEach((dot) => {
      dot.classList.remove("active")
    })
  })
  slides[n].style.display = "block"
  dots[n].classList.add("active")
}
document.addEventListener("DOMContentLoaded", init(currentSlide))
const next = () => {
  currentSlide >= slides.length - 1 ? currentSlide = 0 : currentSlide++
  init(currentSlide)
}

const prev = () => {
  currentSlide <= 0 ? currentSlide = slides.length - 1 : currentSlide--
  init(currentSlide)
}

document.querySelector(".next").addEventListener('click', next)
document.querySelector(".prev").addEventListener('click', prev)
setInterval(() => {
  next()
}, 5000);
dots.forEach((dot, index) => {
  dot.addEventListener("click", () => {
    init(index)
    currentSlide = i
  })
})
</script>
				</div>
				<div class="mright box">
					
			<div class="inner">
				<div class="contact">
				<!--<td><li><a href="#"><i class="fa fa-envelope-o"></i>Contact Us</a></li></td>-->
				<span class="fa fa-map-marker" style="color: white"></span>
				<span class="text">Contact Us</span>
			</div>
			<div class="sell">
				<!--<td><li><a href="#"><i class="fa fa-building-o"></i>Sell on Mbiman</a></li></td>-->
				<span class="fa fa-building-o" style="color: white"></span>
				<span class="text">Sell on Mbiman</span>
			</div>
			<div class="return">
				<!--<td><li><a href="#"><i class="fa fa-retweet"></i>Return Policy</a></li></td>-->
				<span class="fa fa-retweet" style="color: white"></span>
				<span class="text">Return Policy</span>
			</div>	
					
				</div>
				</div>

			<?php 
				include ("inc/footer.php");
			 ?>

		</div><!--Closing row Div-->
	</div><!--Closing Container Div-->
</body>
</html>