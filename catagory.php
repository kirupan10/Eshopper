<!DOCTYPE html>
<?php 
include('includes/config.php');
if($_GET['pid']){
	$pid = $_GET['pid'];
	$sql=mysqli_query($con,"SELECT * FROM products WHERE category= $pid");
	while($row=mysqli_fetch_array($sql)){
	}
	
}else{
	header("location:/eshopper");
}

?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Catagory | E-Shopper</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href=""><i class="fa fa-phone"></i> +94 123 456 7890</a></li>
								<li><a href=""><i class="fa fa-envelope"></i> contact@Eshopper.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="http://www.facebook.com/kirupanoffcl"><i class="fa fa-facebook"></i></a></li>
								<li><a href="http://www.twitter.com/kirupanoffcl"><i class="fa fa-twitter"></i></a></li>
								<li><a href="http://www.linkedin.com/kirupanoffcl"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="http://www.dribbble.com/kirupanoffcl"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="http://www.googleplus.com/kirupanoffcl"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="/eshopper"><img src="images/home/logo.png" alt="" /></a>
						</div>
						<form action="search" method="POST">
						<div class="search_box pull-right">
							<input type="text" name="search" placeholder=""/>
						</div>
						</form>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="profile"><i class="fa fa-user"></i> Account</a></li>
								<li><a href="wishlist"><i class="fa fa-star"></i> Wishlist</a></li>
								<li><a href="checkout"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="cart"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<li><a href="login"><i class="fa fa-lock"></i> Login</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>E</span>-SHOPPER</h1>
									<h2>Free Shopping Now</h2>
									<p>Now , We're providing free shopping around island wide  </p>
									<button type="button" class="btn btn-default get">Get it now</button>
								</div>
								<div class="col-sm-6">
									<img src="images/home/girl1.jpg" class="girl img-responsive" alt="" />
									<img src="images/home/price.png"  class="pricing" alt="" />
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							
							
							
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="catagory?pid=1">Breakfast Recipes</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="catagory?pid=2">Lunch Recipes</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="catagory?pid=3">Dinner Recipes</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="catagory?pid=4">Dessert Recipes</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="catagory?pid=5">Special Recipes </a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="catagory?pid=6">Soft Drinks</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="catagory?pid=7">Juices</a></h4>
								</div>
							</div>
							
						</div><!--/category-products-->
<?php $rt=mysqli_query($con,"select * from products where category= '1'");
$num=mysqli_num_rows($rt);{
}
?>	
<?php $rt1=mysqli_query($con,"select * from products where category= '2'");
$num1=mysqli_num_rows($rt1);{
}
?>	
<?php $rt2=mysqli_query($con,"select * from products where category= '3'");
$num2=mysqli_num_rows($rt2);{
}
?>	
<?php $rt3=mysqli_query($con,"select * from products where category= '4'");
$num3=mysqli_num_rows($rt3);{
}
?>	
<?php $rt4=mysqli_query($con,"select * from products where category= '6'");
$num4=mysqli_num_rows($rt4);{
}
?>	
<?php $rt5=mysqli_query($con,"select * from products where category= '7'");
$num5=mysqli_num_rows($rt5);{
}
?>	
<?php $rt6=mysqli_query($con,"select * from products where category= '5'");
$num6=mysqli_num_rows($rt6);{
}
?>					
						<div class="brands_products"><!--brands_products-->
							<h2>Recipes</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href="catagory?pid=1"> <span class="pull-right">(<?php echo htmlentities($num);?>)</span>Breakfast Recipes</a></li>
									<li><a href="catagory?pid=2"> <span class="pull-right">(<?php echo htmlentities($num1);?>)</span>Lunch Recipes</a></li>
									<li><a href="catagory?pid=3"> <span class="pull-right">(<?php echo htmlentities($num2);?>)</span>Dinner Recipes</a></li>
									<li><a href="catagory?pid=4"> <span class="pull-right">(<?php echo htmlentities($num3);?>)</span>Dessert Recipes</a></li>
									<li><a href="catagory?pid=5"> <span class="pull-right">(<?php echo htmlentities($num6);?>)</span>Special Recipes</a></li>
									<li><a href="catagory?pid=6"> <span class="pull-right">(<?php echo htmlentities($num5);?>)</span>Juices</a></li>
									<li><a href="catagory?pid=7"> <span class="pull-right">(<?php echo htmlentities($num4);?>)</span>Soft Drinks</a></li>
								</ul>
							</div>
						</div><!--/brands_products-->
					
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>
<?php
$ret=mysqli_query($con,"select * from products where category='$pid' limit 6;");
while ($row=mysqli_fetch_array($ret)) {
	# code...


?>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="images/products/<?php echo htmlentities($row['id']);?>.jpg" alt="" />
											<h2>RS.<?php echo htmlentities($row['productPrice']);?>	</h2>
											<p><?php echo htmlentities($row['productName']);?></p>
											<a href="index.php?page=product&action=add&id=<?php echo $row['id']; ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>RS.<?php echo htmlentities($row['productPrice']);?>	</h2>
												<p><?php echo htmlentities($row['productName']);?></p>
												<a href="product-details.php?pid=<?php echo $row['id']; ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>View details </a>
												<a href="index.php?page=product&action=add&id=<?php echo $row['id']; ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
										</div>
								</div>
								<div class="choose">
								</div>
							</div>
						</div>
						<?php }?>
					</div>	
					<br>
					<br>
					<br>
					<br>
				</div>
			</div>
		</div>
	</section>
	
<?php include('includes/footer.php'); ?>
	

  
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>