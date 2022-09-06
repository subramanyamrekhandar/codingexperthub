	<?php 
	 session_start();
	 include "includes/navbar.php";

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>codingexperthub</title>
	<!----css file link-->
	


    <!-- ICONSCOUT CDN -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">


   <!----favicon setting-->
	<link rel="shortcut icon" type="text/css" href="images/logo.png">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	<!----Linking google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

	<!----font-awsome start-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style type="text/css">
		
		

.div1                           /* for title image*/
{
	margin-top: 10%;
   position: relative;
    height: 500px;
    width: 1263px;
    background:url(uploadimg/programming_image.png);
}

/*programming css */

.latest-news-wrap
{
	box-shadow: 0px 3px 10px rgba(0,0,0,0.2);
	height: 350px;

}
.news-img
{
	position: relative;

}

.news-img:before
{
	position: absolute;
	left:0;
	top:0;
	width: 100%;
	height: 100%;
	background: #000;
	 content: "";
	 opacity: 0;
	 transform: scale(.8);
	 transition: all 0.5s;

}

.latest-news-wrap:hover .news-img:before
{
	opacity: .5;
	transform: scale(1);
}

.deat
{
	background: #f89406 none repeat scroll 0.0;
	height: 50px;
	left:0;
	position: absolute;
	text-align: center;
	top:0;
	width: 90px;
	padding: 10px;
}

.deat span
{
	color: white;
	font-weight: 700;
	font-size: 16px;
}


.news-content p
{
	margin-bottom: 15px;
	text-align: justify;
	margin-top: 20px;

}


.news-content a
{
	font-size: 14px;
	background-color: #34495e;
	padding:10px 20px;
	color: white;
	transition: all 0.5s ease-in;
}


.news-content a:hover
{
	font-size: 14px;
	border:1px solid #34495e;
	border-top-right-radius: 20px;
	background-color: transparent;
	color: #34495e;
	margin-right: 0;
	text-decoration: none;

}


/*=======================================
       Programming  Languages Properties Start
==========================================*/


	</style>
 <style>
        /* { background-image: url("./images/bg-texture.png") ;
			
		      background-color:#1F2641;
		}*/
	

 </style>


</head>
<body style="background-color:#7bb4e2";>
			<!---programming languages Section Start	----->

 			<section class="latest-news-area" id="latest">
 				<div class="container">
 					<div class="row">
 						<div class="col-xs-12">
 							<div class="section-title text-center">
 								<h1><b>Trending Courses</b></h1>
 								<div class="sub-heading">
 									Following are the available courses 
 									Start learning today
 								</div>
 							</div>
 						</div>
 					</div>
<br>

 					

<?php


			   // session_start();

			   $con=mysqli_connect('localhost','root');


			mysqli_select_db($con,'codingexperthub');

			$q="select * from programming_languages";
			$query=mysqli_query($con,$q);
			while ($res=mysqli_fetch_array($query)) {

			?>

			<div class="col-md-4 col-sm-6 col-xs-12 content-border" style="margin-bottom: 10px;">
 								<div class="latest-news-wrap">
 									<div class="news-img">
 										<img src=<?php echo $res['language_image']; ?> class="img-responsive">
 										<div class="deat">
 											<span><?php echo $res['language_name']; ?></span>
 										</div>
 									</div>

 									<div class="news-content">
 										<p>
 											<?php echo $res['language_description']; ?>
 										</p><br>
 										<a href="programming/java/java_programming.php?course_name=<?php echo $res['language_name'] ?>">Start Reading...</a>
 									</div>
 								</div>
 							</div>
                <?php } ?>
 			</div>	
 	</section>


 			<!---programming languages Section ends	----->

	<!-- footer section starts -->

  
<!-- footer section ends -->		
</body>
</html>