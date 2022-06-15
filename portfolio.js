$(document).ready(function(){
	$(window).scroll(function(){
		if (this.scrollY > 20) {
			$('.navbar').addClass("sticky");
		}else{
			$('.navbar').removeClass("sticky");
		}
		if(this.scrollY > 500){
			$('.scroll-up-btn').addClass("show");
		}else{
			$('.scroll-up-btn').removeClass("show");
		}
	});

	//slide up btn script
	$('.scroll-up-btn').click(function(){
		$('html').animate({scrollTop: 0});
	});

	//toggle menu and navbar
	$('.menu-btn').click(function(){
		$('.navbar .menu').toggleClass("active");
		$('.menu-btn i').toggleClass("active");
	});

	//multitext animation
	var typed = new Typed(".typing",{
		strings: ["WebDesigner", "Blogger", "Developer", "Freelancer"],
		typeSpeed: 100,
		backSpeed: 60,
		loop: true
	});
	var typed = new Typed(".typing1",{
		strings: ["WebDesigner", "Blogger", "Developer", "Freelancer"],
		typeSpeed: 100,
		backSpeed: 60,
		loop: true
	});

	//owl carousel 
	$('.carousel').owlCarousel({
		margin: 20,
		loop: true,
		autoplay:true,
		autoplayTimeOut: 200,
		autoplayHoverPause: true,
		responsive: {
			0:{
				items: 1,
				nav: false
			},
			600:{
				items: 2,
				nav: false
			},
			1000:{
				items: 3,
				nav: false
			}
		}
	});
}); 

