<?php 
	include ('connection/conn.php');

	if (isset($_POST['sign_up'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$con_password = $_POST['con_password'];
		$number = $_POST['phone'];
		$address = $_POST['address'];

		if (!($password == $con_password)) 
		{
			$err = "Password did not match...";
			header('location:register.php?err='.$err);
		}else{
			$sql = "INSERT INTO registration (name, email, password, phone_number, address) VALUES ('$name', '$email', '$password', '$number', '$address')";
			$query = mysqli_query($conn, $sql);
			if ($query) 
			{
				$succ = "Registration successful...";
				header('location:register.php?succ='.$succ);
			}else
			{
				$err = "Registration failed...";
				header('location:register.php?err='.$err);
			}
		}
	}
	mysqli_close($conn);
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>MBIMAN | REGISTER</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="register.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

	
			<div class="navbar">
				<div class="content">
				<label class="logo"><a href="#">MBIMAN<i class="fa fa-cart-plus"></i></a></label>
				<ul class="menu-list">
					<div class="icon cancel-btn">
					<i class="fa fa-times"></i>
					</div>
					<li><a href="index.html">Home</a></li>
					<li><a class="active" href="#">Login</a></li>
					<li><a href="#">Help</a></li>
					<li><a href="#">Cart</a></li>
					<li><a href="#">Search</a></li>
				</ul>
				<div class="icon menu-btn">
					<i class="fa fa-bars"></i>
				</div>
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


	<div class="wrapper">
		<div class="title-text">
			<div class="title login">Login Form</div>
			<div class="title signup">SignUp Form</div>
		</div>
		
		<div class="form-container">
			<div class="slide-controls">
			<input type="radio" name="slider" id="login" checked="">
			<input type="radio" name="slider" id="signup">
			<label for="login" class="slide login">Login</label>
			<label for="signup" class="slide signup">Signup</label>
			<div class="slide-tab"></div>
		</div>
			<div class="form-inner">
				<form class="login" method="post" action="login_process.php">
					<div class="field">
						<input type="text" placeholder="Email Address" required="" name="email">
					</div>
					<div class="field">
						<input type="password" placeholder="Password" required="" name="password">
					</div>
					<div class="pass-link"><a href="#">Forgot password?</a></div>
					<div class="field">
						<input type="submit" value="Login" name="sign_in">
					</div>
					<div class="signup-link">Not a member?<a href="#">SignUp now</a></div>
				</form>
				<form class="signup" method="post">
					<div class="field">
						<input type="text" placeholder="Full Name" required="" name="name">
					</div>
					<div class="field">
						<input type="text" placeholder="Email Address" required="" name="email">
					</div>
					<div class="field">
						<input type="password" placeholder="Password" required="" name="password">
					</div>
					<div class="field">
						<input type="password" placeholder="Confirm Password" required="" name="con_password">
					</div>
					<div class="field">
						<input type="number" placeholder="Phone Number" required="" name="phone">
					</div>
					<div class="field">
						<input type="text" placeholder="Shipping Address" required="" name="address">
					</div>
					
					<div class="field">
						<input type="submit" value="SignUp" name="sign_up">
					</div>
				</form>
			</div>
		</div>
	</div>
	<script>
		const loginForm = document.querySelector("form.login");
		const signupForm = document.querySelector("form.signup");
		const loginBtn = document.querySelector("label.login");
		const signupBtn = document.querySelector("label.signup");
		const signupLink = document.querySelector(".signup-link a");
		const loginText = document.querySelector(".title-text .login");
		const signupText = document.querySelector(".title-text .signup"); 
		signupBtn.onclick = (()=>{
			loginForm.style.marginLeft = "-50%";
			loginText.style.marginLeft = "-50%";
		});
		loginBtn.onclick = (()=>{
			loginForm.style.marginLeft = "0%";
			loginText.style.marginLeft = "0%";
		});
		signupLink.onclick = (()=>{
			signupBtn.click();
			return false;
		});
	</script>
</body>
</html>