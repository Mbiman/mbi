<?php 
	$directoryURI = $_SERVER['REQUEST_URI'];
	$path = parse_url($directoryURI, PHP_URL_PATH);
	$component = explode('/', $path);
	$part = $component[2];
 ?>		
		<div class="header">
			<div class="navbar">
				<div class="content">
				<label class="logo"><a href="#">MBIMAN<i class="fa fa-cart-plus"></i></a></label>
				<ul class="menu-list">
					<div class="icon cancel-btn">
					<i class="fa fa-times"></i>
					</div>
					<li><a href="index.php">Home</a></li>
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