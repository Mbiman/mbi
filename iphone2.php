<!DOCTYPE html>
<html>
<head>
	<title>Mbiman | Phones</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="iphone.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<style>
		.banner{
	height: 100vh;
	background: url("phone/20.jpg") no-repeat;
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
				
					<div class="title">Welcome To MBIMAN<i class="fa fa-cart-plus" ></i> Smart Phones Category</div>
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
				<img src="phone/1.jpg" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>Samsung</span>
							<p>S8</p>
						</div>
						<div class="price">$300</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add-cart</button>
					</div>
				</div>
			</div>

			<div class="card">
				<img src="phone/6.jfif" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>Blackberry</span>
							<p>Z20</p>
						</div>
						<div class="price">$240</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add--cart</button>
					</div>
				</div>
			</div>

			<div class="card">
				<img src="phone/2.jpg" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>Google</span>
							<p>Pixel 3A</p>
						</div>
						<div class="price">$415</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add-cart</button>
					</div>
				</div>
			</div>

			<div class="card">
				<img src="images/ip4.jfif" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>Apple</span>
							<p>Iphone Xs</p>
						</div>
						<div class="price">$1100</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add-cart</button>
					</div>
				</div>
			</div>

			<div class="card">
				<img src="phone/3.jpg" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>Samsung</span>
							<p>S10</p>
						</div>
						<div class="price">$1050</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add-cart</button>
					</div>
				</div>
			</div>

		
			<div class="card">
				<img src="phone/8.jpg" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>Samsung</span>
							<p>Note20</p>
						</div>
						<div class="price">$1600</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add-cart</button>
					</div>
				</div>
			</div>

			<div class="card">
				<img src="phone/5.jpg" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>Apple</span>
							<p>Iphone Xs Max</p>
						</div>
						<div class="price">$1200</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add-cart</button>
					</div>
				</div>
			</div>

			<div class="card">
				<img src="phone/11.jpg" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>Huawei</span>
							<p>P40 Pro</p>
						</div>
						<div class="price">$1800</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add-cart</button>
					</div>
				</div>
			</div>

			<div class="card">
				<img src="phone/12.jpg" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>Realme</span>
							<p>A2</p>
						</div>
						<div class="price">$1100</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add-cart</button>
					</div>
				</div>
			</div>

			<div class="card">
				<img src="images/pp.jfif" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>Apple</span>
							<p>Iphone Xs</p>
						</div>
						<div class="price">$1100</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add-cart</button>
					</div>
				</div>
			</div>

		
			<div class="card">
				<img src="images/ip1.jpg" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>Apple</span>
							<p>Iphone 12</p>
						</div>
						<div class="price">$1900</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add-cart</button>
					</div>
				</div>
			</div>

			<div class="card">
				<img src="images/ip2.jpg" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>Apple</span>
							<p>Iphone X</p>
						</div>
						<div class="price">$1000</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add-cart</button>
					</div>
				</div>
			</div>

			<div class="card">
				<img src="images/ip3.jfif" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>Apple</span>
							<p>Iphone 11 Pro</p>
						</div>
						<div class="price">$1500</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add-cart</button>
					</div>
				</div>
			</div>

			<div class="card">
				<img src="phone/13.jpg" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>Samsung</span>
							<p>S20</p>
						</div>
						<div class="price">$1700</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add-cart</button>
					</div>
				</div>
			</div>

			<div class="card">
				<img src="phone/10.jpg" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>Motorolla</span>
							<p>Z3</p>
						</div>
						<div class="price">$1300</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add-cart</button>
					</div>
				</div>
			</div>


			<div class="card">
				<img src="phone/14.jpg" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>Apple</span>
							<p>Iphone Xs</p>
						</div>
						<div class="price">$1100</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add-cart</button>
					</div>
				</div>
			</div>

			<div class="card">
				<img src="phone/15.jfif" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>Apple</span>
							<p>Iphone Xs Max</p>
						</div>
						<div class="price">$1200</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add-cart</button>
					</div>
				</div>
			</div>

			<div class="card">
				<img src="phone/16.jpg" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>Samsung</span>
							<p>Note20</p>
						</div>
						<div class="price">$1800</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add-cart</button>
					</div>
				</div>
			</div>

			<div class="card">
				<img src="images/ip4.jfif" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>Apple</span>
							<p>Iphone XR</p>
						</div>
						<div class="price">$900</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add-cart</button>
					</div>
				</div>
			</div>

			<div class="card">
				<img src="phone/7.jpeg" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>Samsung</span>
							<p>S20</p>
						</div>
						<div class="price">$1500</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add-cart</button>
					</div>
				</div>
			</div>

		
			<div class="card">
				<img src="images/sam1.jpg" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>Samsung</span>
							<p>Note10</p>
						</div>
						<div class="price">$1300</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add-cart</button>
					</div>
				</div>
			</div>

			<div class="card">
				<img src="images/sam2.jpg" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>Samsung</span>
							<p>S10</p>
						</div>
						<div class="price">$1000</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add-cart</button>
					</div>
				</div>
			</div>

			<div class="card">
				<img src="images/sam3.jpg" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>Samsung</span>
							<p>Note20</p>
						</div>
						<div class="price">$1700</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add-cart</button>
					</div>
				</div>
			</div>

			<div class="card">
				<img src="images/sam4.jpg" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>Samsung</span>
							<p>A71</p>
						</div>
						<div class="price">$600</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add-cart</button>
					</div>
				</div>
			</div>

			<div class="card">
				<img src="phone/17.jpg" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>Oppo</span>
							<p>Reno4</p>
						</div>
						<div class="price">$1000</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add-cart</button>
					</div>
				</div>
			</div>

		
			<div class="card">
				<img src="phone/18.jpg" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>Google</span>
							<p>Pixel 2A</p>
						</div>
						<div class="price">$200</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add-cart</button>
					</div>
				</div>
			</div>

			<div class="card">
				<img src="phone/19.png" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>Nokia</span>
							<p>6</p>
						</div>
						<div class="price">$800</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add-cart</button>
					</div>
				</div>
			</div>

			<div class="card">
				<img src="phone/20.jpg" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>Sumsumg</span>
							<p>Note10+</p>
						</div>
						<div class="price">$1500</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add-cart</button>
					</div>
				</div>
			</div>


			<div class="card">
				<img src="images/ip2.jpg" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>Apple</span>
							<p>Iphone Xs Max</p>
						</div>
						<div class="price">$1100</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add-cart</button>
					</div>
				</div>
			</div>

			<div class="card">
				<img src="images/ip3.jfif" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>Apple</span>
							<p>Iphone 11 Pro</p>
						</div>
						<div class="price">$1100</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add-cart</button>
					</div>
				</div>
			</div>

			

		</div><!--Closing Wrapper--> 


		<ul class="page">
			<li><a href="iphone.html">Page 1</a></li>
			<li class="active"><a href="#">Page 2</a></li>
			<li #><a href="#">Page 3</a></li>
			<li #><a href="#">Page 4</a></li>
			<li #><a href="#">Page 5</a></li>
			<li #><a href="#">Page 6</a></li>
			<li #><a href="#">Page 7</a></li>
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