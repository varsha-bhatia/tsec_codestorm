<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<style>
		.topnav {
		  overflow: hidden;
		  background-color: #333;
		}

		.topnav a {
		  float: left;
		  color: #f2f2f2;
		  text-align: center;
		  padding: 14px 16px;
		  text-decoration: none;
		  font-size: 17px;
		}

		.topnav a:hover {
		  background-color: lightgrey;
		  color: black;
		}

		.topnav a.active {
		  background-color: grey;
		  color: white;
		}
		.btn {
		    background-color: #4CAF50;
		    color: white;
		    padding: 16px 20px;
		    border: none;
		    cursor: pointer;
		    width: 30%;
		    opacity: 0.9;
		}

		.btn:hover {
		    opacity: 1;
		}

		.wrapper{
			border: 1px solid white;
			width:1300px;
			height:400px;
			position:relative;
			top:30px;
			left:20px;
		}


		.wrapper1{
			border: 1px solid white;
			width:400px;
			height:250px;
			position:absolute;
			top:50px;
			right:50px;
		}

		.col_white_amrc { color:#FFF;}
footer { width:100%; background-color:#263238; min-height:250px; padding:10px 0px 25px 0px ;}
.pt2 { padding-top:40px ; margin-bottom:20px ;}
footer p { font-size:13px; color:#CCC; padding-bottom:0px; margin-bottom:8px;}
.mb10 { padding-bottom:15px ;}
.footer_ul_amrc { margin:0px ; list-style-type:none ; font-size:14px; padding:0px 0px 10px 0px ; }
.footer_ul_amrc li {padding:0px 0px 5px 0px;}
.footer_ul_amrc li a{ color:#CCC;}
.footer_ul_amrc li a:hover{ color:#fff; text-decoration:none;}
.fleft { float:left;}
.padding-right { padding-right:10px; }

.footer_ul2_amrc {margin:0px; list-style-type:none; padding:0px;}
.footer_ul2_amrc li p { display:table; }
.footer_ul2_amrc li a:hover { text-decoration:none;}
.footer_ul2_amrc li i { margin-top:5px;}

.bottom_border { border-bottom:1px solid #323f45; padding-bottom:20px;}
.foote_bottom_ul_amrc {
	list-style-type:none;
	padding:0px;
	display:table;
	margin-top: 10px;
	margin-right: auto;
	margin-bottom: 10px;
	margin-left: auto;
}
.foote_bottom_ul_amrc li { display:inline;}
.foote_bottom_ul_amrc li a { color:#999; margin:0 12px;}

.social_footer_ul { display:table; margin:15px auto 0 auto; list-style-type:none;  }
.social_footer_ul li { padding-left:20px; padding-top:10px; float:left; }
.social_footer_ul li a { color:#CCC; border:1px solid #CCC; padding:8px;border-radius:50%;}
.social_footer_ul li i {  width:20px; height:20px; text-align:center;}
	</style>
	</style>
</head>
<body>
	<div class="topnav">
		<a class="active" href="login.php" style="float: right;" id="myBtn" name="login"><i class="fa fa-fw fa-user"></i>Login</a>
		<a href="#contact" style="float: right;"><i class="fa fa-fw fa-envelope"></i>Contact</a>
		<a  href="index.php" style="float: right;" ><i class="fa fa-fw fa-home"></i>Home</a>
	</div>
	<div class="wrapper">
		<div class="wrapper1">
			<h2>Log In</h2>
			<form action="login_backend.php" method="POST">

				<label style="font-size: 20px;">Email:</label>
				<input type="email" placeholder="Enter Email" name="email" style="font-size: 20px;"><br><br>
				<label style="font-size: 20px;">password:</label>
				<input type="password" placeholder="Enter password" name="psw" style="font-size: 20px;"><br><br>
				<button type="submit" class="btn">Login</button>
				<h3>Don't have an account?<a href="signup.php">Sign Up</a></h3>
			</form>
		</div>

		<div class="wrapper2">
			<img src="z7.jpg" >
		</div>
	</div><br><br>

	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

	
	<h1><center></center></h1>

				<!--footer starts from here-->
				<footer class="footer">
				<div class="container bottom_border">
				<div class="row">
				<div class=" col-sm-4 col-md col-sm-4  col-12 col">
				<h5 class="headin5_amrc col_white_amrc pt2" style="color: white;">Find us</h5>
				<!--headin5_amrc-->
				<p class="mb10">The Government of India (IAST: Bhārata Sarakāra), often abbreviated as GoI, is the union government created by the constitution of India as the legislative, executive and judicial authority of the union of 29 states and seven union territories of a constitutionally democratic republic.</p>
				<p><i class="fa fa-location-arrow"></i> TSEC, Near Linking Road </p>
				<p><i class="fa fa-phone"></i>  +91-9999878398  </p>
				<p><i class="fa fa fa-envelope"></i> info@example.com  </p>


				</div>


				<div class=" col-sm-4 col-md  col-6 col">
				<h5 class="headin5_amrc col_white_amrc pt2" style="color: white;">ABOUT GOVERNMENT</h5>
				<!--headin5_amrc-->
				<ul class="footer_ul_amrc">
				<li><a href="const.html">Constitution of India</a></li>
				<li><a href="parliament.html">Indian Parliament</a></li>
				<li><a href="president.html">President Of India</a></li>
				<li><a href="primeminister.html">Prime Minister Of India</a></li>
				<li><a href="vicepresident.html">Vice-President of India</a></li>
				</ul>
				<!--footer_ul_amrc ends here-->
				</div>


				<div class=" col-sm-4 col-md  col-12 col">
				<h5 class="headin5_amrc col_white_amrc pt2" style="color: white;">Follow us</h5>
				<!--headin5_amrc ends here-->

				<ul class="footer_ul2_amrc">
				<li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a><p>It is a government venture<a href="#">https://www.lipsum.com/</a></p></li>
				<li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a><p>It is a government venture<a href="#">https://www.lipsum.com/</a></p></li>
				<li><a href="#"><i class="fab fa-twitter fleft padding-right"></i> </a><p>It is a government venture<a href="#">https://www.lipsum.com/</a></p></li>
				</ul>
				<!--footer_ul2_amrc ends here-->
				</div>
				</div>
				</div>



<!--foote_bottom_ul_amrc ends here-->
<p class="text-center">Copyright @2017 | Designed With by <a href="#">Your Company Name</a></p>

<ul class="social_footer_ul">
<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
<li><a href="#"><i class="fab fa-twitter"></i></a></li>
<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
<li><a href="#"><i class="fab fa-instagram"></i></a></li>
</ul>
<!--social_footer_ul ends here-->
</div>

</footer>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>

 