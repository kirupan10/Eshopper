<?php 
session_start();
error_reporting(0);
if(strlen($_SESSION['login'])==0){   
header('location:login.php');
}
else{
include('includes/config.php');
// code for Shipping address updation
	if(isset($_POST['Update'])){
		$currentpass = $_POST['currentpass'];
		$newpass = $_POST['newpass'];
		$confirmpass = $_POST['confirmpass'];
		
		if($newpass!=$confirmpass){
			echo "<script>alert('Enter the same password ');
			window.location.href='profile';</script>";
		}else{
			$query=mysqli_query($con,"select password from users where id='".$_SESSION['id']."'");
			while($row=mysqli_fetch_array($query)){
				$passdp = $row['password'];
			}
		
			if($passdp != $currentpass){
				echo "<script>alert('Enter the Current password ');
				window.location.href='profile';</script>";
				
			}else{
				$query=mysqli_query($con,"update users set password='$newpass'where id='".$_SESSION['id']."'");
				if($query){
					echo "<script>alert('Password has been updated');
					window.location.href='profile';</script>";
					
				}
			}
		}
	}
		
		
		
		
	if(isset($_POST['UpdateInfo'])){
		
		$name=$_POST['fullname'];
		$baddress=$_POST['billingaddress'];
		$bstate=$_POST['bilingstate'];
		$bcity=$_POST['billingcity'];
		$bpincode=$_POST['billingpincode'];
		
		$saddress=$_POST['shippingaddress'];
		$sstate=$_POST['shippingstate'];
		$scity=$_POST['shippingcity'];
		$spincode=$_POST['shippingpincode'];
		
		$query=mysqli_query($con,"update users set name='$name', shippingAddress='$saddress',shippingState='$sstate',shippingCity='$scity',
		shippingPincode='$spincode', billingAddress='$baddress',billingState='$bstate',billingCity='$bcity',billingPincode='$bpincode'
		where id='".$_SESSION['id']."'");
		if($query){
			echo "<script>alert('Shipping Address has been updated');
			window.location.href='profile';</script>";
			
		}else{
			echo "<script>alert('Wrong Information');
			window.location.href='profile';</script>";
			
		}
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Profile | Friends Corner</title>
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
								<li><a href=""><i class="fa fa-envelope"></i> contact@Friends-Corner.com</a></li>
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
						<a href="/Friends-Corner"><img src="images/home/logo.png" alt="" width="40" height="40"  />&emsp; Friends-Corner</a>
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
								<li><a href="profile" class="active"><i class="fa fa-user"></i> Account</a></li>
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

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="/Friends-Corner">Home</a></li>
				  <li class="active">Profile</li>
				</ol>
			</div><!--/breadcrums-->
<?php
$query=mysqli_query($con,"select * from users where id='".$_SESSION['id']."'");
while($row=mysqli_fetch_array($query))
{

?>
			<div class="checkout-options">
				<h3><?php echo "Hey " . $row['name'];?></h3>
				<p></p>
				<ul class="nav">
					<li>
						<label><input type="checkbox" checked onclick="return false;"/> Member Account</label>
					</li>
					<li>
						<label><input type="checkbox" onclick="return false;"/> Admin Account</label>
					</li>
					<li>
						<a href=""><i class="fa fa-times"></i>Delete</a>
					</li>
				</ul>
			</div><!--/checkout-options-->

			<div class="register-req">
				<p> <b>*</b> symbols says , you can't change details.</p>
			</div><!--/register-req-->

			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-3">
						<div class="shopper-info">
							<p>Change Your Password</p>
							<form autocomplete="off" action="" method="POST">
								<input type="password" name="currentpass" placeholder="Current Password*"  autocomplete="false">
								<input type="password" name="newpass" placeholder="New Password*"  autocomplete="off">
								<input type="password" name="confirmpass" placeholder="Confirm Password*"  autocomplete="off">
								
								<input class="btn btn-primary" type="submit" name="Update" value="Update" >
							
							</form>
						</div>
					</div>
					<div class="col-sm-5 clearfix">
						<div class="bill-to">
							<p>Your Persnal Information</p>
							<div class="form-one">
								<form>
									<input type="text"  value="Name" readonly>
									<input type="text"  value="Email" readonly>
									<input type="text"  value="Phone Number" readonly>
									<input type="text"  value="Shipping Address" readonly>
									<input type="text"  value="Shipping State" readonly>
									<input type="text"  value="Shipping City" readonly>
									<input type="text"  value="Shipping Pincode" readonly>
									<input type="text"  value="Billing Address" readonly>
									<input type="text"  value="Billing State" readonly>
									<input type="text"  value="Billing City" readonly>
									<input type="text"  value="Billing Pincode" readonly>
									
									
									
									
								</form>
							</div>
							<div class="form-two">
								<form action="" method="POST">
									<input type="text" placeholder="Customer Name" name="fullname" value="<?php echo $row['name'];?>" >
									<input type="text" placeholder="Email*" value="<?php echo $row['email']." *";?>" readonly>
									<input type="text" placeholder="Contact Number*" value="<?php echo $row['contactno']." *";?>" readonly>
									<input type="text" placeholder="Shipping Address" name="shippingaddress" value="<?php echo $row['shippingAddress'];?>">
									<input type="text" placeholder="Shipping State" name="shippingstate" value="<?php echo $row['shippingState'];?>">
									<input type="text" placeholder="Shipping City " name="shippingcity"  value="<?php echo $row['shippingCity'];?>">
									<input type="text" placeholder="Shipping Pincode " name="shippingpincode" value="<?php echo $row['shippingPincode'];?>">
									
									<input type="text" placeholder="Billing Address" name="billingaddress" value="<?php echo $row['billingAddress'];?>">
									<input type="text" placeholder="Billing State" name="bilingstate" value="<?php echo $row['billingState'];?>">
									<input type="text" placeholder="Billing City" name="billingcity" value="<?php echo $row['billingCity'];?>">
									<input type="text" placeholder="Billing Pincode" name="billingpincode" value="<?php echo $row['billingPincode'];?>">
									<input class="btn btn-primary" type="submit" name="UpdateInfo" value="Update" >
								</form>
							</div>
						</div> 
					</div>
					
					<div class="col-sm-4">
						<div class="order-message">
							<p>Shipping Address</p>
							
							
							<textarea name="message"  placeholder="<?php echo $row['shippingAddress']."\r\n".$row['shippingState']."\r\n".$row['shippingCity']."\r\n".$row['shippingPincode']."\r\n";?>" rows="16" ></textarea>
							
						</div>	
					</div>					
				</div>
			</div>
<?php } ?> <!-- -->
			<div class="register-req">
				<a href="activity" >Login History/Activity Logs</a>
			</div><!--/register-req-->
			<div class="register-req">
				<a href="Bill-history" >View Bills/Manage Bills/Invoice</a>
			</div><!--/register-req-->
			<div class="register-req">
				<a href="logout" >Logout</a>
			</div><!--/register-req-->
	</section><!--/#do_action-->
		</form>
<?php include('includes/footer.php'); ?>
	


    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
<?php }?>