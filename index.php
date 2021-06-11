<?php
include('db.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>KAEN KAO HOTEL</title>
	<!-- for-mobile-apps -->

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="keywords" content="Resort Inn Responsive , Smartphone Compatible web template , Samsung, LG, Sony Ericsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //for-mobile-apps -->
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	
	<link rel="icon" href="images/logo.png" type="image/x-icon">
	
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
	<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
	<link rel="stylesheet" href="css/jquery-ui.css" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
	<!--fonts-->
	<link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
	<!--//fonts-->

	<style>
		.silder {
			display: none;
		}
	</style>
</head>

<body>
	<!-- header -->
	<div class="banner-top">
		<div class="social-bnr-agileits">
			<ul class="social-icons3">
				<li><a href="https://www.facebook.com/" class="fa fa-facebook icon-border facebook"> </a></li>
				<li><a href="https://twitter.com/" class="fa fa-twitter icon-border twitter"> </a></li>
			</ul>
		</div>
		<div class="contact-bnr-w3-agile">
			<ul>
				<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">INFO@kaenkao.COM</a></li>
				<li><i class="fa fa-phone" aria-hidden="true"></i>043 236 538 </li>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="w3_navigation">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1><a class="navbar-brand" href="index.php">Kaen <span>Kao</span>
							<p class="logo_w3l_agile_caption">Welcom</p>
						</a></h1>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--iris">
						<ul class="nav navbar-nav menu__list">
							<li class="menu__item menu__item--current"><a href="" class="menu__link">หน้าหลัก</a></li>
							<li class="menu__item"><a href="#about" class="menu__link scroll">เกี่ยวกับ</a></li>
							<li class="menu__item"><a href="#service" class="menu__link scroll">บริการ</a></li>
							<li class="menu__item"><a href="#gallery" class="menu__link scroll">แกลลอรี่</a></li>
							<li class="menu__item"><a href="#rooms" class="menu__link scroll">ห้องพัก</a></li>
							<li class="menu__item"><a href="#contact" class="menu__link scroll">ติดต่อ</a></li>
						</ul>
					</nav>
				</div>
			</nav>

		</div>
	</div>
	<!-- //header -->
	<!-- banner -->
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			<li data-target="#carousel-example-generic" data-slide-to="2"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="images/bn1.jpg" alt="...">
				<div class="carousel-caption">
				
				</div>
			</div>
			<div class="item">
				<img src="images/bn2.jpg" alt="...">
				<div class="carousel-caption">
					
				</div>
			</div>
			<div class="item">
				<img src="images/bn3.jpg" alt="...">
				<div class="carousel-caption">
					
				</div>
			</div>
		</div>

		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<!--banner Slider starts Here-->
	<!-- //banner -->
	<!--//Header-->
	<div id="availability-agileits">
		<div class="col-md-12 book-form-left-w3layouts">
			<a href="admin/reservation.php">
				<h2>จองห้องพัก</h2>
			</a>
		</div>

		<div class="clearfix"> </div>
	</div>
	<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
			<div class="agileits_banner_bottom">
				<h3><span>ความสะดวกสบาย</span> รอต้อนรับคุณอยู่</h3>
			</div>
			<div class="w3ls_banner_bottom_grids">
				<ul class="cbp-ig-grid">
					<li>
						<div class="w3_grid_effect">
							<span class="cbp-ig-icon w3_road"></span>
							<h4 class="cbp-ig-title">ห้องพักที่แสนสบาย</h4>
							<span class="cbp-ig-category">KAEN KAO</span>
						</div>
					</li>
					<li>
						<div class="w3_grid_effect">
							<span class="cbp-ig-icon w3_cube"></span>
							<h4 class="cbp-ig-title">บรรยากาศดีเยี่ยม</h4>
							<span class="cbp-ig-category">KAEN KAO</span>
						</div>
					</li>
					<li>
						<div class="w3_grid_effect">
							<span class="cbp-ig-icon w3_users"></span>
							<h4 class="cbp-ig-title">คาเฟ่ขนาดใหญ่</h4>
							<span class="cbp-ig-category">KAEN KAO</span>
						</div>
					</li>
					<li>
						<div class="w3_grid_effect">
							<span class="cbp-ig-icon w3_ticket"></span>
							<h4 class="cbp-ig-title">WIFI 5G</h4>
							<span class="cbp-ig-category">KAEN KAO</span>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //banner-bottom -->
	<!-- /about -->
	<div class="about-wthree" id="about">
		<div class="container">
			<div class="ab-w3l-spa">
				<h3 class="title-w3-agileits title-black-wthree">แนะนำโรงแรม</h3>
				<p class="about-para-w3ls"> </p>
	<video width="100%" height="100%" controls autoplay>
  					<source src="images/นำเสนอ.mp4" type="video/mp4">
  					<source src="movie.ogg" type="video/ogg">
				</video>

				<div class="w3l-slider-img">
				</div>

				<div class="w3ls-info-about">
				<h6> โรงแรมแก่นเก้า ประกอบไปด้วยห้องพักทั้งหมด 6 ห้อง </h6>
					<h6>ประกอบไปด้วย ห้อง Double room ห้อง Twin room และห้อง Connecting room  </h6>
					<h6>ห้องพักเหล่านี้สามารถเปิดให้แขกเข้าพักได้จริง มีสิ่งอำนวยความสะดวกเหมือนโรงแรมทั่วไป ในราคาเริ่มต้นที่ 500 บาทต่อคืน</h6>
					<p></p>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //about -->
	<!--sevices-->
	<div class="advantages" id="service">
		<div class="container">
			<div class="advantages-main">
				<h3 class="title-w3-agileits">บริการ</h3>
				<div class="advantage-bottom">
					<div class="col-md-6 advantage-grid left-w3ls wow bounceInLeft" data-wow-delay="0.3s">
						<div class="advantage-block ">
							<i class="fa fa-credit-card" aria-hidden="true"></i>
							<h4>สิ่งอำนวยความสะดวกในห้องพัก </h4>
							<p></p>
							<p><i class="fa fa-check" aria-hidden="true"></i>ตู้เย็น</p>
							<p><i class="fa fa-check" aria-hidden="true"></i>ระเบียง</p>
							<p><i class="fa fa-check" aria-hidden="true"></i>เครื่องปรับอากาศ</p>
							<p><i class="fa fa-check" aria-hidden="true"></i>เครื่องทำน้ำอุ่น</p>

						</div>
					</div>
					<div class="col-md-6 advantage-grid right-w3ls wow zoomIn" data-wow-delay="0.3s">
						<div class="advantage-block">
							<i class="fa fa-clock-o" aria-hidden="true"></i>
							<h4>ส่วนกลาง</h4>
							<p></p>
							<p><i class="fa fa-check" aria-hidden="true"></i>อาหารบุฟเฟต์เช้า-เย็น</p>
							<p><i class="fa fa-check" aria-hidden="true"></i>บริการรถรับ-ส่ง สนามบิน</p>
							<p><i class="fa fa-check" aria-hidden="true"></i>มีพนักงานบริการตลอด 24 ชั่วโมง</p>
							<p><i class="fa fa-check" aria-hidden="true"></i>ระบบรักษาความปลอดภัย 24 ชั่วโมง</p>

						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!--//sevices-->
	<!-- team -->
	<div class="team" id="team">
		<div class="container">

			<div class="resp-tabs-container">


			</div>
			<div class="clearfix"> </div>
		</div>


	</div>
	<div class="clearfix"> </div>
	</div>


	</div>
	<div class="clearfix"> </div>
	</div>


	</div>
	</div>
	<div class="clearfix"> </div>
	</div>
	</div>
	</div>
	</div>
	</div>
	<!-- //team -->
	<!-- Gallery -->
	<section class="portfolio-w3ls" id="gallery">
		<h3 class="title-w3-agileits title-black-wthree">แกลลอรี่</h3>
		<div class="col-md-3 gallery-grid gallery1">
			<a href="images/IMG_5393.jpg" class="swipebox"><img src="images/IMG_5393.jpg" class="img-responsive" alt="/">
				<div class="textbox">
					<h4>Kaen Kao</h4>
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>
		<div class="col-md-3 gallery-grid gallery1">
			<a href="images/IMG_526.jpg" class="swipebox"><img src="images/IMG_526.jpg" class="img-responsive" alt="/">
				<div class="textbox">
					<h4>Kaen Kao</h4>
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>
		<div class="col-md-3 gallery-grid gallery1">
			<a href="images/IMG_5296.jpg" class="swipebox"><img src="images/IMG_5296.jpg" class="img-responsive" alt="/">
				<div class="textbox">
					<h4>Kaen Kao</h4>
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>
		<div class="col-md-3 gallery-grid gallery1">
			<a href="images/IMG_5332.jpg" class="swipebox"><img src="images/IMG_5332.jpg" class="img-responsive" alt="/">
				<div class="textbox">
					<h4>Kaen Kao</h4>
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>
		<div class="col-md-3 gallery-grid gallery1">
			<a href="images/IMG_5336.jpg" class="swipebox"><img src="images/IMG_5336.jpg" class="img-responsive" alt="/">
				<div class="textbox">
					<h4>Kaen Kao</h4>
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>
		<div class="col-md-3 gallery-grid gallery1">
			<a href="images/IMG_5303.jpg" class="swipebox"><img src="images/IMG_5303.jpg" class="img-responsive" alt="/">
				<div class="textbox">
					<h4>Kaen Kao</h4>
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>
		<div class="col-md-3 gallery-grid gallery1">
			<a href="images/IMG_5370.jpg" class="swipebox"><img src="images/IMG_5370.jpg" class="img-responsive" alt="/">
				<div class="textbox">
					<h4>Kaen Kao</h4>
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>
		<div class="col-md-3 gallery-grid gallery1">
			<a href="images/IMG_5379.jpg" class="swipebox"><img src="images/IMG_5379.jpg" class="img-responsive" alt="/">
				<div class="textbox">
					<h4>Kaen Kao</h4>
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>
		<div class="col-md-3 gallery-grid gallery1">
			<a href="images/IMG_5386.jpg" class="swipebox"><img src="images/IMG_5386.jpg" class="img-responsive" alt="/">
				<div class="textbox">
					<h4>Kaen Kao</h4>
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>
		<div class="col-md-3 gallery-grid gallery1">
			<a href="images/IMG_5396.jpg" class="swipebox"><img src="images/IMG_5396.jpg" class="img-responsive" alt="/">
				<div class="textbox">
					<h4>Kaen Kao</h4>
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>
		<div class="col-md-3 gallery-grid gallery1">
			<a href="images/IMG_5398.jpg" class="swipebox"><img src="images/IMG_5398.jpg" class="img-responsive" alt="/">
				<div class="textbox">
					<h4>Kaen Kao</h4>
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>
		<div class="col-md-3 gallery-grid gallery1">
			<a href="images/g2.jpg" class="swipebox"><img src="images/IMG_5403.jpg" class="img-responsive" alt="/">
				<div class="textbox">
					<h4>Kaen Kao</h4>
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>
		<div class="clearfix"> </div>
	</section>
	<!-- //gallery -->
	<!-- rooms & rates -->
	<div class="plans-section" id="rooms">
		<div class="container">
		<center>
			<h3 class="title-w3-agileits title-black-wthree">ห้องพักและราคา</h3>
			<div class="priceing-table-main">
				<div class="col-md-1 price-grid">
				</div>
				
					<div class="col-md-3 price-grid ">
						<div class="price-block agile">
							<div class="price-gd-top">
								<br></br>
								<img src="images/IMG_5384.jpg" alt=" " class="img-responsive" />
								<br></br>
								<h4>Connecting Room</h4>
							</div>
							<div class="price-gd-bottom">
								<div class="price-list">
									<ul>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
									</ul>
								</div>
								<div class="price-selet">
									<h3>1000<span>฿</span></h3>
									<a href="admin/reservation.php">Book Now</a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-3 price-grid lost">
						<div class="price-block agile">
							<div class="price-gd-top">
								<br></br>
								<img src="images/IMG_526.jpg" alt=" " class="img-responsive" />
								<br></br>
								<h4>Sweet room</h4>
							</div>
							<div class="price-gd-bottom">
								<div class="price-list">
									<ul>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
										<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
									</ul>
								</div>
								<div class="price-selet">
									<h3>700<span>฿</span></h3>
									<a href="admin/reservation.php">Book Now</a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-3 price-grid wthree lost">
						<div class="price-block agile">
							<div class="price-gd-top ">
								<br></br>
								<img src="images/IMG_5332.jpg" alt=" " class="img-responsive" />
								<br></br>
								<h4>Twins room</h4>
							</div>
							<div class="price-gd-bottom">
								<div class="price-list">
									<ul>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star" aria-hidden="true"></i></li>
										<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
										<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
										<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
									</ul>
								</div>
								<div class="price-selet">
									<h3> 500<span>฿</span></h3>
									<a href="admin/reservation.php">Book Now</a>
								</div>
							</div>
						</div>
					</div>

					<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--// rooms & rates -->
	<!-- visitors -->

	</section>
	</div>
	</div>
	<!-- visitors -->
	<!-- contact -->
	<center>
		<section class="contact-w3ls" id="contact">
			<center>
				<div class="container">
					<div class="col-lg-12 col-md-12 col-sm-12 contact-w3-agile1">
						<h4>Connect With Us</h4>
						<p class="contact-agile1"><strong>โทรศัพท์ :</strong>043 236 538</p>
						<p class="contact-agile1"><strong>Email :</strong> <a href="mailto:name@example.com">INFO@kaenkao.COM</a></p>
						<p class="contact-agile1"><strong>ที่อยู่ :</strong> อาคาร 9 ชั้น 2  วิทยาลัยอาชีวศึกษาขอนแก่น <br> 1/1 ถนนหลังเมือง ต.ในเมือง,อ.เมือง จ.ขอนแก่น 40000</p>
						<div class="social-bnr-agileits footer-icons-agileinfo">
							<ul class="social-icons3">
								<li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
								<li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
								<li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li>

							</ul>
						</div>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3826.751288507039!2d102.83664061486333!3d16.43745308865429!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31228a39f6c72de3%3A0x4651427ab9c16081!2z4Lin4Li04LiX4Lii4Liy4Lil4Lix4Lii4Lit4Liy4LiK4Li14Lin4Lio4Li24LiB4Lip4Liy4LiC4Lit4LiZ4LmB4LiB4LmI4LiZ!5e0!3m2!1sth!2sth!4v1615772681287!5m2!1sth!2sth" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
					</div>
					<div class="clearfix"></div>
				</div>
			</center>
		</section>
	</center>
	<!-- /contact -->
	<div class="copy">
		<p>© 2021 KAEN KAO . All Rights Reserved | Design by <a href="index.php">KAEN KAO</a> </p>
	</div>
	<!--/footer -->
	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- contact form -->
	<script src="js/jqBootstrapValidation.js"></script>

	<!-- /contact form -->
	<!-- Calendar -->
	<script src="js/jquery-ui.js"></script>
	<script>
		var myIndex = 0;
		carousel();

		function carousel() {
			var i;
			var x = document.getElementsByClassName("silder");
			for (i = 0; i < x.length; i++) {
				x[i].style.display = "none";
			}
			myIndex++;
			if (myIndex > x.length) {
				myIndex = 1
			}
			x[myIndex - 1].style.display = "block";
			setTimeout(carousel, 2000); // Change image every 2 seconds
		}
	</script>
	<script>
		$(function() {
			$("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
		});
	</script>
	<!-- //Calendar -->
	<!-- gallery popup -->
	<link rel="stylesheet" href="css/swipebox.css">
	<script src="js/jquery.swipebox.min.js"></script>
	<script type="text/javascript">
		jQuery(function($) {
			$(".swipebox").swipebox();
		});
	</script>
	<!-- //gallery popup -->
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->
	<!-- flexSlider -->
	<script defer src="js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(window).load(function() {
			$('.flexslider').flexslider({
				animation: "slide",
				start: function(slider) {
					$('body').removeClass('loading');
				}
			});
		});
	</script>
	<!-- //flexSlider -->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		// You can also use "$(window).load(function() {"
		$(function() {
			// Slideshow 4
			$("#slider4").responsiveSlides({
				auto: true,
				pager: true,
				nav: false,
				speed: 500,
				namespace: "callbacks",
				before: function() {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function() {
					$('.events').append("<li>after event fired.</li>");
				}
			});

		});
	</script>
	<!--search-bar-->
	<script src="js/main.js"></script>
	<!--//search-bar-->
	<!--tabs-->
	<script src="js/easy-responsive-tabs.js"></script>
	<script>
		$(document).ready(function() {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true, // 100% fit in a container
				closed: 'accordion', // Start closed if in accordion view
				activate: function(event) { // Callback function if tab is switched
					var $tab = $(this);
					var $info = $('#tabInfo');
					var $name = $('span', $info);
					$name.text($tab.text());
					$info.show();
				}
			});
			$('#verticalTab').easyResponsiveTabs({
				type: 'vertical',
				width: 'auto',
				fit: true
			});
		});
	</script>
	<!--//tabs-->
	<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});
		});
	</script>

	<div class="arr-w3ls">
		<a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	</div>
	<!-- //smooth scrolling -->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
</body>

</html>