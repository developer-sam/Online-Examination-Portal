<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
	<head>
		<title>dreams Website Template | Home :: w3layouts</title>
		<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery.min.js"></script>
		 <!-- Custom Theme files -->
		 <!---- animated-css ---->
		<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
		<script src="js/wow.min.js"></script>
		<script>
		 new WOW().init();
		</script>
		<!---- animated-css ---->
		  <!---- start-smoth-scrolling---->
		
		 <!---- start-smoth-scrolling---->
		<link href="css/style.css" rel='stylesheet' type='text/css' />
   		 <!-- Custom Theme files -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		</script>
		
		
		<!----//End-top-nav-script---->
	</head>
	<body>
    <?php	
	if(isset($_POST['submit']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
		
		if( $username=='admin' and $password=='admin')
		{
			header("location:questntype.php");
        }
		else
		{
			header("location:invalid.php");
		}
		
	}
	?>
    
		<div class="bg">
		<!----- start-header---->
			<div id="home" class="header wow bounceInDown" data-wow-delay="0.4s">
					<div class="top-header">
						<div class="container">
						<div class="logo">
							<a href="#"><img src="images/logo.png"  /></a>
						</div>
						<!----start-top-nav---->
						 
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<!----- //End-header---->
			<!---- banner ---->
			<div class="banner wow fadeIn" data-wow-delay="0.5s">
				<div class="container">
                
					<div class="banner-info text-center">

<h2 style="color:#AFA8A8">Administrator Login</h2>
						<div class="contact-right wow fadeInLeft" data-wow-delay="0.4s">
							<form method="post" action="">
								<input type="text" class="text" name="username" value="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}"><br>
					 			<input type="password" class="password" name="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}"><br>
					 	 		
								<input class="wow shake" data-wow-delay="0.3s" name="submit" type="submit" value="Login" />
							</form>
					</div>
				</div>
			</div>
		</div>
			
			
		</div>
	</body>
</html>

