<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<?php include("connect.php") ?>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Online Library</title>
	<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/themify-icons.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/nouislider.min.css">
	<link rel="stylesheet" href="css/ion.rangeSlider.css" />
	<link rel="stylesheet" href="css/ion.rangeSlider.skinFlat.css" />
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/main.css">

	<style type="text/css">
		.img-fluid{
			height: 400px;
		}
		footer.footer-area.section_gap{
			padding: 0;
		}
		p.footer-text.m-0{
			padding-top: 30px;
			padding-bottom: 20px;
			}
		.banner-area{
			margin-top: 80px; 
			}
		img.img-fluid{
			margin-top: -30px;
		}		
	</style>
</head>

<body>

	<!-- Start Header Area -->
	<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.php"><img src="img/logo.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
							<li class="nav-item"><a class="nav-link" href="category.php?cat=Classics">Category</a></li>
							<li class="nav-item"><a class="nav-link" href="about-us.php">About us</a></li>
							<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="nav-item">
								<!-- <button class="search"><span class="lnr lnr-magnifier" id="search"></span></button> -->
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<div class="search_input" id="search_input_box">
			<div class="container">
				<form class="d-flex justify-content-between">
					<input type="text" class="form-control" id="search_input" placeholder="Search Book">
					<button type="submit" class="btn"></button>
					<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
				</form>
			</div>
		</div>
	</header>
	<!-- End Header Area -->

	<!-- start banner Area -->
	<section class="banner-area">
		<div class="container">
			<div class="row fullscreen align-items-center justify-content-start">
				<div class="col-lg-12">
					<div class="active-banner-slider owl-carousel">
						<!-- single-slide -->
						<div class="row single-slide align-items-center d-flex">
							<div class="col-lg-5 col-md-6">
								<div class="banner-content">
									<h1>Stephen King<br>Collection!</h1>
									<p>It is a 1986 horror novel by American author Stephen King. It was his 22nd book, and his 18th novel written under his own name. The story follows the experiences of seven children as they are terrorized by an evil entity that exploits the fears and phobias of its victims to disguise itself while hunting its prey.</p>
									<div class="add-bag d-flex align-items-center">
										<a class="add-btn" href="single-product.php?name=IT"><span class="lnr lnr-book"></span></a>
										<span class="add-text text-uppercase">Read Now</span>
									</div>
								</div>
							</div>
							<div class="col-lg-7">
								<div class="banner-img">
									<img class="img-fluid" src="img/banner/banner_it.jpg" alt="">
								</div>
							</div>
						</div>
						<!-- single-slide -->
						<div class="row single-slide align-items-center d-flex">
							<div class="col-lg-5 col-md-6">
								<div class="banner-content">
									<h1>Stephen King<br>Collection!</h1>
									<p>Doctor Sleep is a 2013 horror novel by American writer Stephen King and the sequel to his 1977 novel The Shining. The book reached the first position on The New York Times Best Seller list for print and ebook fiction (combined), hardcover fiction, and ebook fiction. Doctor Sleep won the 2013 Bram Stoker Award for Best Novel.</p>
									<div class="add-bag d-flex align-items-center">
										<a class="add-btn" href="single-product.php?name=DOCTOR%20SLEEP"><span class="lnr lnr-book"></span></a>
										<span class="add-text text-uppercase">Read Now</span>
									</div>
								</div>
							</div>
							<div class="col-lg-7">
								<div class="banner-img">
									<img class="img-fluid" src="img/banner/banner_drsleep.jpg" alt="">
								</div>
							</div>
						</div>
						<!-- single-slide -->
						<div class="row single-slide">
							<div class="col-lg-5">
								<div class="banner-content">
									<h1>Stephen King<br>Collection!</h1>
									<p>Cujo is a 1981 psychological horror novel by American writer Stephen King, about a rabid dog. The novel won the British Fantasy Award in 1982,and was made into a film in 1983.</p>
									<div class="add-bag d-flex align-items-center">
										<a class="add-btn" href="single-product.php?name=CUJO"><span class="lnr lnr-book"></span></a>
										<span class="add-text text-uppercase">Read Now</span>
									</div>
								</div>
							</div>
							<div class="col-lg-7">
								<div class="banner-img">
									<img class="img-fluid" src="img/banner/banner_cujo.jpg" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- start features Area -->
	<section class="features-area section_gap">
		<div class="container">
			<div class="row features-inner">
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="img/features/f-icon1.png" alt="">
						</div>
						<h6>Free Delivery</h6>
						<p>Directly to your device</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="img/features/f-icon2.png" alt="">
						</div>
						<h6>Return Policy</h6>
						<p>No need to return. Read again</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="img/features/f-icon3.png" alt="">
						</div>
						<h6>On Demand</h6>
						<p>Get books on demand</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon">
							<img src="img/features/f-icon4.png" alt="">
						</div>
						<h6>No Payment</h6>
						<p>All the books are free</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end features Area -->

	<!-- start product Area -->
	<section class="owl-carousel active-product-area section_gap">
		<!-- single product slide -->
		<div class="single-product-slider">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="section-title">
							<h1>Latest Books</h1>
							<p>Here are few of the latest books that got added to our huge collection.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<?php 
						$sql = "SELECT * FROM bookdetails ";
						$result = mysqli_query($conn, $sql);
						while($row = mysqli_fetch_array($result))
						{
						$name = $row['name'];
						$author = $row['author'];
						$description = $row['description'];
						$imgsrc = $row['imgsrc'];
						$highlight = $row['highlight'];
						$category = $row['category'];
						if ($highlight == "new")
							{
							echo "

								<div class='col-lg-3 col-md-6'>
									<div class='single-product'>
										<a href='single-product.php?name=$name'>
										<img class='img-fluid' src='$imgsrc'>
										</a>
										<div class='product-details'>
											<h6>$name</h6>
											<div class='price'>
												<h6>$author</h6>
											</div>
										</div>
									</div>
								</div>
								";
							}
						}
					?>

				</div>
			</div>
		</div>
		<!-- single product slide -->
		<div class="single-product-slider">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6 text-center">
						<div class="section-title">
							<h1>Popular Books</h1>
							<p>Here is the list of most pupular books from our collection.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<?php 
						$sql = "SELECT * FROM bookdetails ORDER BY name DESC";
						$result = mysqli_query($conn, $sql);
						while($row = mysqli_fetch_array($result))
						{
						$name = $row['name'];
						$author = $row['author'];
						$description = $row['description'];
						$imgsrc = $row['imgsrc'];
						$highlight = $row['highlight'];
						$category = $row['category'];
						if ($highlight == "popular")
							{
							echo "

								<div class='col-lg-3 col-md-6'>
									<div class='single-product'>
										<a href='single-product.php?name=$name'>
										<img class='img-fluid' src='$imgsrc'>
										</a>
										<div class='product-details'>
											<h6>$name</h6>
											<div class='price'>
											<h6>$author</h6>
											</div>
										</div>
									</div>
								</div>
								";
							
							}
						}
					?>

				</div>
			</div>
		</div>
	</section>
	<!-- end product Area -->

	<!-- start footer Area -->
	<footer class="footer-area section_gap">
		<div class="container">
			
			<div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
				<p class="footer-text m-0">
Copyright &copy;2019 All rights reserved | Designed with &nbsp;<i class="fa fa-heart-o" aria-hidden="true"></i> &nbsp;by Siddharth, Shivani and Pooja</a>
</p>
			</div>
		</div>
	</footer>
	<!-- End footer Area -->

	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/countdown.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/main.js"></script>
</body>

</html>