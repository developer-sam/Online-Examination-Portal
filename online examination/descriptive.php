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
	$con=mysql_connect("localhost","root","");
mysql_select_db("question",$con);

$sql="select max(id) from des_question";
$res=mysql_query($sql);
$row=mysql_fetch_array($res);
$qid=$row["max(id)"];
$id=$qid+1;
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
<h2 style="color:#AFA8A8">Question NO:<?php echo $id;?></h2>
<h3 style="color:#AFA8A8">Please Enter the Question</h3>
						<div class="contact-right wow fadeInLeft" data-wow-delay="0.4s">
							<form action="" method="post">
								<input type="textarea" class="text" name="qus" ><br>
					 			<input  name="next" type="submit" value="Next" >
					 	 		<input  name="save" type="submit" value="Save">
							</form>
					</div>
				</div>
			</div>
		</div>
			
			
		</div>
        <?php
if(isset($_POST["next"]))
{
	$qus=$_POST["qus"];
	
	$sql="insert into des_question(question) values('$qus')";
	mysql_query($sql);
	
	

	header("location:descriptive.php");
}
if(isset($_POST["save"]))
{
	$qus=$_POST["qus"];
	$sql="insert into des_question(question) values('$qus')";
	mysql_query($sql);
	header("location:secondpage.php");
}


?>
	</body>
</html>
