<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();
// get value of id that sent from address bar

$p_id=$_GET['p_name'];

?>
<!DOCTYPE HTML>
<html>
<head>
<title>The E-books Website</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/owl.carousel.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="js/owl.carousel.js"></script>
	<script>
			$(document).ready(function() {
				$("#owl-demo").owlCarousel({
					items : 4,
					lazyLoad : true,
					autoPlay : true,
					navigation : true,
					navigationText : ["", ""],
					rewindNav : false,
					scrollPerPage : false,
					pagination : false,
					paginationNumbers : false,
				});
			});
		</script>
		<!-- //Owl Carousel Assets -->
		<!-----768px-menu----->
		<link type="text/css" rel="stylesheet" href="css/jquery.mmenu.all.css" />
		<script type="text/javascript" src="js/jquery.mmenu.js"></script>
			<script type="text/javascript">
				//	The menu on the left
				$(function() {
					$('nav#menu-left').mmenu();
				});
		</script>
		<!-----//768px-menu----->
</head>
<body>
<!-- start header -->
<div class="header_bg">
<div class="wrap">
	<div class="header">
		<div class="logo">
			<a href="index.html">
				<img src="images/lg.png" alt=""/>
				<h1>Books@Need</h1>
				<div class="clear"> </div>
			 </a>
		</div>
		<div class="text">
		  <p>Improve your creativity live like a man</p>
		</div>
		<div class="clear"> </div>
	</div>
</div>
</div>
<!-- start header -->
<div class="header_btm">
	<div class="wrap">
		<!------start-768px-menu---->
			<div id="page">
					<div id="header">
						<a class="navicon" href="#menu-left"> </a>
					</div>
					<nav id="menu-left">
						<ul>
							<li class="active"><a href="admin_index.html">Home</a></li>
							<li><a href="adm_authors.html">Add Authors</a></li>
							<li><a href="adminbookadd.html">Add Books</a></li>
							<li><a href="latestuploadauthor.html">Add Latest</a></li>
							<li><a href="adm_viewreview.php">View Review</a></li>
							<li><a href="contact.html">Contact us</a></li>
							<li><a href="about.html">About us</a></li>
						</ul>
					</nav>
			</div>
		<!------start-768px-menu---->
			<div class="header_sub">
				<div class="h_menu">
					<ul>
							<li class="active"><a href="user_index.html">Home</a></li>
							<li><a href="user_viewauthors.php">Authors</a></li>
							<li><a href="user_viewbooks.php">Books</a></li>
							<li><a href="user_viewlatest.php">Latest</a></li>
							<li><a href="user_uploadownbooks.php">Upload Your Book</a></li>
							<li><a href="user_top_book.php">Top Rated Books</a></li>
							<li><a href="contact.html">Contact us</a></li>
							<li><a href="about.html">About us</a></li>
							<li><a href="logout.php">Logout</a></li>
						</ul>
				</div>
				
				<div class="clear"> </div>
			</div>
	</div>
</div>
			<!---start-banner---->
			<div class="banner" id="move-top">
				<!----start-image-slider---->
					<div data-scroll-reveal="enter bottom but wait 0.7s" class="img-slider" id="home">
						<div class="wrap">
							<div class="slider">
								<ul id="jquery-demo">
								  <li>
								    <a href="#slide1">
								    </a>
								    <div data-scroll-reveal="enter bottom but wait 0.7s" class="slider-detils">
								    	<span>Books@Need</span>
								    </div>
								  </li>
								  <li>
								    <a href="#slide2">
								    </a>
								      <div data-scroll-reveal="enter bottom but wait 1s" class="slider-detils">
								    	<h3>Books From Famous writers</h3>
								    	</div>
								  </li>
								  <li>
								    <a href="#slide3">
								    </a>
								      <div data-scroll-reveal="enter bottom but wait 1.5s" class="slider-detils">
								      		<h3>Books you wrote upload........ </h3>
								    </div>
								  </li>
								</ul>
							</div>
						</div>
					</div>
					<div class="clear"> </div>
				</div>
						<!---slider---->
				<link rel="stylesheet" href="css/slippry.css">
				<script src="js/jquery-ui.js" type="text/javascript"></script>
				<script src="js/scripts-f0e4e0c2.js" type="text/javascript"></script>
				<script>
					  jQuery('#jquery-demo').slippry({
					  // general elements & wrapper
					  slippryWrapper: '<div class="sy-box jquery-demo" />', // wrapper to wrap everything, including pager
					  // options
					  adaptiveHeight: false, // height of the sliders adapts to current slide
					  useCSS: false, // true, false -> fallback to js if no browser support
					  autoHover: false,
					  transition: 'fade'
					});
				</script>
				<!---scrooling-script--->
					<!----//End-image-slider---->
					<div class="simple-text">
						<div class="wrap">
							<h4>'Books' are the store of knowledge and wisdom.They contain variety of pleasures.Reading books makes our mind strong and broaden our outlook.</h4>
							<h1><p> Books open your mind, broaden your mind, and strengthen you as nothing else can.</p></h1>
						</div>
					</div>
		
			<div class="last_posts"><!-- start last_posts -->
				<div class="wrap">
					</div>
						</div>
						<div class="l-grid-1 l-grid-2">
							
							
							<div class="clear"> </div>
						</div>
						<div class="clear"> </div>
					</div>
				</div>
			</div>
			
						<div class="clear"> </div>
					</div>
				</div>
			</div>
			<div class="get_in_touch"><!-- start last_posts -->
				<div class="wrap">
					<h5 class="heading"></h5>
					<div class="get-left">
						
					</div>
					
				</div>
				<div class="clear"> </div>
					</div>
			</div>
			<div class="footer">
				<div class="wrap">
					<div class="footer-left">
						
					
						</ul>
					</div>
					<div class="soc_icons soc_icons1">
							<ul>
								
								<div class="clear"> </div>	
							</ul>
								
					</div>
					</div>
					<div class="footer-right">
						<h3></h3>
						<div class="comments1">
							<center>
					<form action="latest_pay.php" method="post">
					   <input type="hidden" name="book_nam" value="<?php echo $p_id?>">
						<font color="white">	 Select the Payment Type:
						<td><tr><input type="RADIO"   name="pay_type" value="credit card"/>Credit Card
                              <input type="RADIO" name="pay_type" value="debit card"/>Debit Card</td></tr></font><br/>	<br/>
                         <td><tr><input type="text" name="card_no" placeholder="Card Number"></td></tr><br/><br/>
						 <td><tr><input type="text" name="b_nam" placeholder="Bank name"></td></tr><br/><br/>
						 <td><tr><input type="text" name="amt" placeholder="Amount"></td></tr><br/><br/>
                         
						<td><tr><input type="submit" value="Pay"><td><tr>
						
					
						</form>
						</center>
						</div>
						<div class="comments1">
							
							<span></span>
						</div>
					</div>
					<div class="clear"> </div>	
				</div>
			</div>
			<div class="copy">
				       
			  </div>
</body>
</html>