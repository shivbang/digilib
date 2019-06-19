<?php
	include("connect.php");
	$category = $_GET['cat'];
?>

<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
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
	<title>Digilib</title>

	<!--
            CSS
            ============================================= -->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/themify-icons.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/nouislider.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/main.css">
	<style type="text/css">
		.img-fluid{
			height: 300px;
		}
		footer.footer-area.section_gap{
			padding: 0;
		}
		p.footer-text.m-0{
			padding-top: 30px;
			padding-bottom: 20px;
		}
		img.img-fluid{
			margin-top: -30px;
		}
	</style>
</head>

<body id="category">

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
                            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                            <li class="nav-item active"><a class="nav-link" href="category.php?cat=Classics">Category</a></li>
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

	<!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Book Categories</h1>
					<nav class="d-flex align-items-center">
						<a href="index.php">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.php?cat=Classics">Category<span class="lnr lnr-arrow-right"></span></a>
						<a href="#"><?php echo $category;?></a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->
	<div class="container">
		<div class="row">
			<div class="col-xl-3 col-lg-4 col-md-5">
				<div class="sidebar-categories">
					<div class="head" style="background: #FFA300;">Browse Categories</div>
					<ul class="main-categories">
						<li class="main-nav-list"><a href="category.php?cat=Self%20Help">Self Help</a></li>
						<li class="main-nav-list"><a href="category.php?cat=Mystery">Mystery</a></li>
						<li class="main-nav-list"><a href="category.php?cat=Classics">Classics</a></li>
						<li class="main-nav-list"><a href="category.php?cat=Horror">Horror</a></li>
						<li class="main-nav-list"><a href="category.php?cat=Academics">Academics</a></li>
					</ul>
				</div>
			</div>
			<div class="col-xl-9 col-lg-8 col-md-7">
				<!-- Start Best Seller -->
				<section class="lattest-product-area pb-40 category-list">
					<div class="row">
						<!-- single product -->

						<?php 
						$sql = "SELECT * FROM bookdetails where category = '$category' ORDER BY name DESC";
						$result = mysqli_query($conn, $sql);
						while($row = mysqli_fetch_array($result))
						{
						$name = $row['name'];
						$author = $row['author'];
						$description = $row['description'];
						$imgsrc = $row['imgsrc'];
						$highlight = $row['highlight'];
						$category = $row['category'];
							
							echo "

						<div class='col-lg-4 col-md-6'>
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
					?>
						
					</div>
				</section>
				<!-- End Best Seller -->
			</div>
		</div>
	</div>

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
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/main.js"></script>
</body>

</html>