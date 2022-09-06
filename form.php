
<html>
    <head>
    <link href="https://fonts.googleapis.com/css?family=Aleo" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
<title>CodingExperthub</title>
<!----Linking google fonts-->
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

<!----font-awsome start-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!----font-awsome ends-->

    <!----css file link-->

<link rel="stylesheet" type="text/css" href="css/signupstyle.css">

   <!----favicon setting-->
<link rel="shortcut icon" type="text/css" href="images/logo.png">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!----------email notification-------->


    </head>
   
     <style>
        body { background-image: url("./images/bg-texture.png");
            
            background-color:#1F2641;}
    </style>
    
    
    <body onload="myfunction()">
		   <!---preloader starts	----->

	<div id="loading"></div>

		   <!---preloader Ends	----->

    <!-- Modal Section -->
    <section class="slider text-center" id="slider">
				<div class="modal-dialog ">
					<div class="modal-content">
						<h3 id="login-heading">Login</h3>
						
					<div class="modal-body" >
						<div class="left-box">
						<form method="POST" action="validation.php"> 
							<div class="form-group"><br>
								<label><i class="fa fa-user fa-2x"></i>&nbspUsername :</label>
								<input type="text" name="name" class="form-control">

								<label><i class="fa fa-lock fa-2x"></i>&nbspPassword :</label>
								<input type="text" name="password" class="form-control" id="pwd">

							
								<div id="errorlabel"></div><br><br><br><br>
								<button id="btn-login" type="submit">Login</button>
							</div>
						</form>
					</div>
					<div class="right-box">
						<span class="signinwith">log in With <br> Social Networks</span><br><br><br>

						<button class="social facebook">Log in with Facebook</button>
						<button class="social twitter">Log in with twitter</button>
						<button class="social google">Log in with gmail</button>
					</div>
						
					</div>
					
						
						<button id="btn-signup" style="margin-buttom:50px;"><a id="sign" href="Singup.html">Singup</a></button>
				</div>
			</div>
			</section>
  
    <script type="text/javascript">
	
    function validation() {
        var username=document.getElementById('username').value;
        var password=document.getElementById('password').value;
    
        if ((username=="") ||( password==""))
         {
             document.getElementById('perror').innerHTML="please fill the details";
             return false;
         }
    }
    
    
    function clear() {
        document.getElementById('perror').innerHTML="ksdfisdhfg";
    }
    
    </script>
             <!---confirm password validation end------->
    
           
    
    <script src="js/jquery.ripples-min.js" type="text/javascript"></script>
    <script src="js/typed.min.js" type="text/javascript"></script>
   <!--==========================end of login form==============================-->

   
    </body>
    </html>
    