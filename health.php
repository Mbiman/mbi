<!DOCTYPE html>
<html>
<head>
	<title>Mbiman | Health</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="iphone.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<style>
		.banner{
	height: 100vh;
	background: url("health/bn (2).jpg") no-repeat;
	background-size: cover;
	background-position: center;
	background-attachment: fixed;
}
	</style>
</head>
<body>
	<div id="container">

		<div class="header">
			<div class="navbar">
				<div class="content">
				<label class="logo"><a href="#">MBIMAN<i class="fa fa-cart-plus"></i></a></label>
				<ul class="menu-list">
					<div class="icon cancel-btn">
					<i class="fa fa-times"></i>
					</div>
					<li><a href="itd.html">Home</a></li>
					<li><a href="register.php">Login</a></li>
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

		<div class="about">
				
					<div class="title">Welcome To MBIMAN<i class="fa fa-cart-plus" ></i> Health Category</div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			
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



		<div class="wrapper"><!--1st Wrapper-->
			<div class="cart-nav">
				<div class="icon">
					<i class="fa fa-shopping-cart"></i>
					<span>Cart</span>
				</div>
				<div class="item-numb">0</div>
			</div>

			<div class="card">
				<img src="health/1.jfif" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>Aera</span>
							<p>Moistsurizing Creme</p>
						</div>
						<div class="price">$60</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add-cart</button>
					</div>
				</div>
			</div>

			<div class="card">
				<img src="health/2.jfif" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>All</span>
							<p>mouth wash</p>
						</div>
						<div class="price">25</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add--cart</button>
					</div>
				</div>
			</div>

			<div class="card">
				<img src="health/3.jfif" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>2 in 1</span>
							<p>Skin Moistsurizer</p>
						</div>
						<div class="price">$40</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add-cart</button>
					</div>
				</div>
			</div>

			<div class="card">
				<img src="health/4.png" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>Vaseline</span>
							<p>Cream with free tooth paste</p>
						</div>
						<div class="price">$40</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add-cart</button>
					</div>
				</div>
			</div>

			<div class="card">
				<img src="health/5.jpg" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>Fair/Lovely</span>
							<p>Original Skin toner</p>
						</div>
						<div class="price">$29</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add-cart</button>
					</div>
				</div>
			</div>

		
			<div class="card">
				<img src="health/6.jpg" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>E45</span>
							<p>Body creme</p>
						</div>
						<div class="price">$20</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add-cart</button>
					</div>
				</div>
			</div>

			<div class="card">
				<img src="health/7.jfif" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>COLGATE</span>
							<p>3 value pack bundle toothpaste</p>
						</div>
						<div class="price">$9</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add-cart</button>
					</div>
				</div>
			</div>

			<div class="card">
				<img src="health/8.png" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>Dr Switch</span>
							<p>Mouthwash pair</p>
						</div>
						<div class="price">$13</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add-cart</button>
					</div>
				</div>
			</div>

			<div class="card">
				<img src="health/9.jfif" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>ORAL-B</span>
							<p>original soft brush</p>
						</div>
						<div class="price">$3</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add-cart</button>
					</div>
				</div>
			</div>

			<div class="card">
				<img src="health/10.jpg" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>Original</span>
							<p>body cream</p>
						</div>
						<div class="price">$20</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add-cart</button>
					</div>
				</div>
			</div>

		
			<div class="card">
				<img src="health/11.jpg" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>Epiderm</span>
							<p>spots cleanser</p>
						</div>
						<div class="price">$9</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add-cart</button>
					</div>
				</div>
			</div>

			<div class="card">
				<img src="health/12.jpg" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>CeraVe</span>
							<p>Body lotion</p>
						</div>
						<div class="price">$11</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add-cart</button>
					</div>
				</div>
			</div>

			<div class="card">
				<img src="health/13.jpg" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>COLGATE</span>
							<p>toothpaste</p>
						</div>
						<div class="price">$2</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add-cart</button>
					</div>
				</div>
			</div>

			<div class="card">
				<img src="health/14.png" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>Original</span>
							<p>bodyspray set</p>
						</div>
						<div class="price">$7</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add-cart</button>
					</div>
				</div>
			</div>

			<div class="card">
				<img src="health/15.jpg" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>DUO</span>
							<p>lotion set</p>
						</div>
						<div class="price">$21</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add-cart</button>
					</div>
				</div>
			</div>


			<div class="card">
				<img src="health/16.jpg" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>KS</span>
							<p>4 value pack toothbrush</p>
						</div>
						<div class="price">$5</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add-cart</button>
					</div>
				</div>
			</div>

			<div class="card">
				<img src="health/29.jpg" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>CASTOR</span>
							<p>hair oil</p>
						</div>
						<div class="price">$11</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add-cart</button>
					</div>
				</div>
			</div>

			<div class="card">
				<img src="health/30.jpg" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>Original</span>
							<p>rose lip polish</p>
						</div>
						<div class="price">$3</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add-cart</button>
					</div>
				</div>
			</div>

			<div class="card">
				<img src="health/25.png" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>Original</span>
							<p>beard serum</p>
						</div>
						<div class="price">$13</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add-cart</button>
					</div>
				</div>
			</div>

			<div class="card">
				<img src="health/17.png" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>Original</span>
							<p>body care set</p>
						</div>
						<div class="price">$19</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add-cart</button>
					</div>
				</div>
			</div>

		
			<div class="card">
				<img src="health/18.jpg" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>CAREDENT</span>
							<p>toothpaste</p>
						</div>
						<div class="price">$1</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add-cart</button>
					</div>
				</div>
			</div>

			<div class="card">
				<img src="health/19.jpg" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>BELLY</span>
							<p>Oil</p>
						</div>
						<div class="price">$4</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add-cart</button>
					</div>
				</div>
			</div>

			<div class="card">
				<img src="health/20.jpg" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>FAIR/LOVELY</span>
							<p>lotion</p>
						</div>
						<div class="price">$7</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add-cart</button>
					</div>
				</div>
			</div>

			<div class="card">
				<img src="health/21.jpg" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>Toiletries</span>
							<p>set</p>
						</div>
						<div class="price">$6</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add-cart</button>
					</div>
				</div>
			</div>

			<div class="card">
				<img src="health/22.jpg" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>DEBIC</span>
							<p>Sugar serum</p>
						</div>
						<div class="price">$11</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add-cart</button>
					</div>
				</div>
			</div>

		
			<div class="card">
				<img src="health/28.jpg" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>Body Care</span>
							<p>Original set</p>
						</div>
						<div class="price">$15</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add-cart</button>
					</div>
				</div>
			</div>

			<div class="card">
				<img src="health/27.jfif" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>GLOW</span>
							<p>Oil set</p>
						</div>
						<div class="price">$9</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add-cart</button>
					</div>
				</div>
			</div>

			<div class="card">
				<img src="health/26.jpg" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>Original</span>
							<p>Bodyspray</p>
						</div>
						<div class="price">$3</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add-cart</button>
					</div>
				</div>
			</div>


			<div class="card">
				<img src="health/23.png" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>TWIN</span>
							<p>mouthwash</p>
						</div>
						<div class="price">$11</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add-cart</button>
					</div>
				</div>
			</div>

			<div class="card">
				<img src="health/24.jfif" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>CREST</span>
							<p>Teeth WHitening Paste</p>
						</div>
						<div class="price">$4</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add-cart</button>
					</div>
				</div>
			</div>

			


		</div><!--Closing Wrapper--> 


		<ul class="page">
			<li class="active"><a href="#">Page 1</a></li>
			<li><a href="health2.html">Page 2</a></li>
			<li #><a href="#">Page 3</a></li>
			<li #><a href="#">Page 4</a></li>
			
		</ul>



		

			<div class="footer" style="clear: both">
				<div class="main-content"><!--Opening Main-content Div-->
					<div class="left box"><!--Opening Left-Box Div-->
						<h2>About Us</h2>
						<div class="content"><!--Opening content Div-->
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. </p>
							<div class="social">
								<a href="#" style="color: White;"><span class="fa fa-facebook-f"></span></a>
								<a href="#" style="color: White;"><span class="fa fa-twitter"></span></a>
								<a href="#" style="color: White;"><span class="fa fa-instagram"></span></a>
								<a href="#" style="color: White;"><span class="fa fa-youtube"></span></a>
							</div>
						</div><!--Closing content Div-->
					</div><!--Closing Left-Box Div-->
					<div class="center box"><!--Opening center box Div-->
						<h2>Address</h2>
						<div class="content"><!--Opening content Div-->
							<div class="place">
								<span class="fa fa-map-marker"></span>
								<span class="text">Ae - Funai, Ikwo</span>
							</div>
							<div class="phone">
								<span class="fa fa-phone"></span>
								<span class="text">+234-8141923322</span>
							</div>
							<div class="email">
								<span class="fa fa-envelope"></span>
								<span class="text">Mbimanshop@gmail.com</span>
							</div>
						</div><!--Closing center Div-->
					</div><!--Closing center box Div-->
					<div class="right box">
						<h2>Contact Us</h2>
						<div class="content">
							<form action="#">
								<div class="email">
									<div class="text">Email *</div>
									<input type="email" required="">
								</div>
								<div class="msg">
									<div class="text">Message *</div>
									<textarea rows="2" cols="25" required=""></textarea>
								</div>
								<div class="btn">
									<button type="submit">Send</button>
								</div>
							</form>
						</div>
					</div>
				</div><!--Closing Main-content Div-->
				<div class="bottom">
					<center>
						<span class="credit">Shop Now @ <a href="#">Mbiman International</a></span>
						<span class="fa fa-copyright"></span><span> 2020 All Rights Reserved</span>
					</center>
				</div>
			</div><!--Closing Footer Div-->



	</div>
</body>
</html>