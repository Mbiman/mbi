<!DOCTYPE html>
<html>
<head>
	<title>Mbiman | Shoes</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="iphone.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<style>
		.banner{
	height: 100vh;
	background: url("shoes/bn1.jpg") no-repeat;
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
				
					<div class="title">Welcome To MBIMAN<i class="fa fa-cart-plus" ></i> Shoes Category</div>
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
				<img src="shoes/1.jpg" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>Men's</span>
							<p>Flat Shoes</p>
						</div>
						<div class="price">$100</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add-cart</button>
					</div>
				</div>
			</div>

			<div class="card">
				<img src="shoes/2.jfif" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>FILA</span>
							<p>Men's sneakers</p>
						</div>
						<div class="price">$200</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add--cart</button>
					</div>
				</div>
			</div>

			<div class="card">
				<img src="shoes/3.jfif" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>NIKE</span>
							<p>Outdoor Sneakers</p>
						</div>
						<div class="price">$400</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add-cart</button>
					</div>
				</div>
			</div>

			<div class="card">
				<img src="shoes/4.jpg" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>Men's</span>
							<p>Casual Sneakers</p>
						</div>
						<div class="price">$150</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add-cart</button>
					</div>
				</div>
			</div>

			<div class="card">
				<img src="shoes/5.jpg" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>Men's</span>
							<p>Original Runners with rollers</p>
						</div>
						<div class="price">$700</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add-cart</button>
					</div>
				</div>
			</div>

		
			<div class="card">
				<img src="shoes/6.jpg" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>Men's</span>
							<p>casual sports runners</p>
						</div>
						<div class="price">$180</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add-cart</button>
					</div>
				</div>
			</div>

			<div class="card">
				<img src="shoes/7.jpg" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>NIKE</span>
							<p>Airmax 2</p>
						</div>
						<div class="price">$400</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add-cart</button>
					</div>
				</div>
			</div>

			<div class="card">
				<img src="shoes/8.jpg" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>Female</span>
							<p>Top Hills</p>
						</div>
						<div class="price">$550</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add-cart</button>
					</div>
				</div>
			</div>

			<div class="card">
				<img src="shoes/9.jpg" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>Luis Vitton</span>
							<p>Original Men</p>
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
				<img src="shoes/10.jpg" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>Men's</span>
							<p>casual sneakers</p>
						</div>
						<div class="price">$190</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add-cart</button>
					</div>
				</div>
			</div>

		
			<div class="card">
				<img src="shoes/11.jpg" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>Xl</span>
							<p>Black Original ...</p>
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
				<img src="shoes/12.jpg" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>NIKE</span>
							<p>Zoom with remote lacing</p>
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
				<img src="shoes/13.jpg" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>Men's</span>
							<p>Brown Shoes</p>
						</div>
						<div class="price">$70</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add-cart</button>
					</div>
				</div>
			</div>

			<div class="card">
				<img src="shoes/14.jpg" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>ADDIDAS</span>
							<p>original sports runners</p>
						</div>
						<div class="price">$500</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add-cart</button>
					</div>
				</div>
			</div>

			<div class="card">
				<img src="shoes/15.jpg" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>NIKE</span>
							<p>Moon shoes</p>
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
				<img src="shoes/16.jpg" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>Men's</span>
							<p>Black Originals</p>
						</div>
						<div class="price">$400</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add-cart</button>
					</div>
				</div>
			</div>

			<div class="card">
				<img src="shoes/28.jfif" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>NIKE</span>
							<p>Kwazi Original</p>
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
				<img src="shoes/29.jpg" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>NIKE</span>
							<p>Multi-color with remote Zoom</p>
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
				<img src="shoes/30.jpg" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>NIKE</span>
							<p>Bulk Purchase(20 pairs)</p>
						</div>
						<div class="price">$22,100</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add-cart</button>
					</div>
				</div>
			</div>

			<div class="card">
				<img src="shoes/17.jpg" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>NIKE</span>
							<p>rainbow Zoom without remote</p>
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
				<img src="shoes/18.jpg" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>Addidas</span>
							<p>Yeezy Original</p>
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
				<img src="shoes/19.jpg" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>Men's</span>
							<p>Brown loafers</p>
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
				<img src="shoes/20.jpg" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>Men's</span>
							<p>Original Black</p>
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
				<img src="shoes/21.jpg" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>Men;s</span>
							<p>DArktan Original</p>
						</div>
						<div class="price">$120</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add-cart</button>
					</div>
				</div>
			</div>

			<div class="card">
				<img src="shoes/22.jfif" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>FILA</span>
							<p>Women Sneakers</p>
						</div>
						<div class="price">$80</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add-cart</button>
					</div>
				</div>
			</div>

		
			<div class="card">
				<img src="shoes/27.jpg" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>NIKE</span>
							<p>Zoom X with remote</p>
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
				<img src="shoes/26.jpg" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>NIKE</span>
							<p>Outdoor runners</p>
						</div>
						<div class="price">$240</div>
					</div>
					<div class="buttons">
						<button>Buy Now</button>
						<button>Add-cart</button>
					</div>
				</div>
			</div>

			<div class="card">
				<img src="shoes/25.png" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>Men's</span>
							<p>Casual sandals</p>
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
				<img src="shoes/23.jpg" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>Puma</span>
							<p>Max pro</p>
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
				<img src="shoes/24.jpg" alt="">
				<div class="content">
					<div class="row">
						<div class="details">
							<span>NIKE</span>
							<p>Runners original</p>
						</div>
						<div class="price">$200</div>
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
			<li><a href="#">Page 2</a></li>
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