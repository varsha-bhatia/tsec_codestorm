<?php include 'db.php'; ?>

<?php
	$query = "SELECT * FROM signup";
	$mesages = mysqli_query($conn,$query);
?>

<!DOCTYPE html>
<html>
<head>


	<title>Home</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta charset="utf-8">
	
  		<meta name="viewport" content="width=device-width, initial-scale=1">
 		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  		<style>

.overlay {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0, 0.9);
    overflow-x: hidden;
    transition: 0.5s;
}

.overlay-content {
    position: relative;
    top: 25%;
    width: 100%;
    text-align: center;
    margin-top: 30px;
}

.triple {
	color:white;
}

.overlay a {
    padding: 8px;
    text-decoration: none;
    font-size: 36px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
    color: #f1f1f1;
}

.overlay .closebtn {
    position: absolute;
    top: 20px;
    right: 45px;
    font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay a {font-size: 20px}
  .overlay .closebtn {
    font-size: 40px;
    top: 15px;
    right: 35px;
  }
}
</style>


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
		.wrapper{
			border: 1px solid lightgrey;
			width:1300px;
			height:150px;
			position:relative;
			top:30px;
			left:20px;
		}


		.wrapper1{
			border: 1px solid lightgrey;
			width:100px;
			height:150px;
			position:relative;
			top:0px;
			left:0px;
		}

		.wrapper2{
			border: 1px solid lightgrey;
			width:500px;
			height:150px;
			position: absolute;
			top:0px;
			left:120px;
		}

		.wrapper3{
			border: 1px solid lightgrey;
			width:300px;
			height:120px;
			position: absolute;
			top:30px;
			left:1000px;
		}

		/* The Modal (background) */
		
		/* The Close Button */
		.close {
		    color: #aaaaaa;
		    float: right;
		    font-size: 28px;
		    font-weight: bold;
		}

		.close:hover,
		.close:focus {
		    color: #000;
		    text-decoration: none;
		    cursor: pointer;
		}

		.btn {
		    background-color: skyblue;
		    color: black;
		    padding: 16px 20px;
		    border: none;
		    cursor: pointer;
		    width: 30%;
		    opacity: 0.9;
		}

		.btn:hover {
		    opacity: 1;
		}

		.container2 {
		    display: inline-block;
		    cursor: pointer;
		}

		.bar1, .bar2, .bar3 {
		    width: 35px;
		    height: 5px;
		    background-color: white;
		    margin: 6px 10px;
		    transition: 0.4s;
		  		    
		}

		.change .bar1 {
		    -webkit-transform: rotate(-45deg) translate(-9px, 6px);
		    transform: rotate(-45deg) translate(-9px, 6px);
		}

		.change .bar2 {opacity: 0;}

		.change .bar3 {
		    -webkit-transform: rotate(45deg) translate(-8px, -8px);
		    transform: rotate(45deg) translate(-8px, -8px);
		   }
		 .overlay {
			    height: 100%;
			    width: 0;
			    position: fixed;
			    z-index: 1;
			    top: 0;
			    left: 0;
			    background-color: rgb(0,0,0);
			    background-color: rgba(0,0,0, 0.9);
			    overflow-x: hidden;
			    transition: 0.5s;
			}

			.overlay-content {
			    position: relative;
			    top: 25%;
			    width: 100%;
			    text-align: center;
			    margin-top: 30px;
			}

			.overlay a {
			    padding: 8px;
			    text-decoration: none;
			    font-size: 36px;
			    color: #818181;
			    display: block;
			    transition: 0.3s;
			}

			.overlay a:hover, .overlay a:focus {
			    color: #f1f1f1;
			}

			.overlay .closebtn {
			    position: absolute;
			    top: 20px;
			    right: 45px;
			    font-size: 60px;
			}

			@media screen and (max-height: 450px) {
			  .overlay a {font-size: 20px}
			  .overlay .closebtn {
			    font-size: 40px;
			    top: 15px;
			    right: 35px;
			  }
			}
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
</head>
<body style="background-color: lightgray;">
	<div class="topnav">
		<span style="font-size:30px;cursor:pointer" onclick="openNav()" class="triple">&#9776; </span>
		<a href="login.php" style="float: right;" id="myBtn" name="login"><i class="fa fa-fw fa-user"></i>Login</a>
		<a href="#contact" style="float: right;"><i class="fa fa-fw fa-envelope"></i>Contact</a>
		<a class="active" href="index.php" style="float: right;" ><i class="fa fa-fw fa-home"></i>Home</a>
	</div>

	<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <a href="education.html">Educational schemes</a>
    <a href="science.html">Science and Technology</a>
    <a href="arts.html">Arts</a>
    <a href="travels.html">Travels and Tourism</a>
    <a href="agriculture.html">Agriculture</a>
  </div>
</div>



<script>
function openNav() {
  document.getElementById("myNav").style.width = "30%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
</script>
     

	<div class="wrapper">
		<div class="wrapper1">
			<img src="z1.jpg" height="150" style="background-color: lightgray; ">
		</div>
		<div class="wrapper2">
			<h1>Central Government of India</h1>
		</div>

		<div class="wrapper3">
		    <form action="search.php" method="POST">
		      <input type="text" placeholder="Search.." name="search" style="width: 150px; height: 50px;">
		      <button type="submit" style="width: 80px; height: 50px;"><i class="fa fa-search"></i></button>
		    </form>
		</div>
	</div><br><br><br><br>
	<div class="container">
		  <div id="myCarousel" class="carousel slide" data-ride="carousel">
		    <!-- Indicators -->
		    <ol class="carousel-indicators">
		      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		      <li data-target="#myCarousel" data-slide-to="1"></li>
		      <li data-target="#myCarousel" data-slide-to="2"></li>
		      <li data-target="#myCarousel" data-slide-to="3"></li>
		    </ol>

		    <!-- Wrapper for slides -->
		    <div class="carousel-inner">

		      <div class="item active">
		        <img src="z2.jpg" alt="Los Angeles" style="width:100%; height: 450px;">
		        <div class="carousel-caption">
		     
		        </div>
		      </div>

		      <div class="item">
		        <img src="z3.jpg" alt="Chicago" style="width:100%; height: 450px;">
		        <div class="carousel-caption">
		         
		        </div>
		      </div>
		    
		      <div class="item">
		        <img src="z4.jpg" alt="New York" style="width:100%; height: 450px;">
		        <div class="carousel-caption">
		       
		        </div>
		      </div>

		      <div class="item">
		        <img src="z5.jpg" alt="New York" style="width:100%; height: 450px;">
		        <div class="carousel-caption">
		          
		        </div>
		      </div>
		  
		    </div>

		    <!-- Left and right controls -->
		    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
		      <span class="glyphicon glyphicon-chevron-left"></span>
		      <span class="sr-only">Previous</span>
		    </a>
		    <a class="right carousel-control" href="#myCarousel" data-slide="next">
		      <span class="glyphicon glyphicon-chevron-right"></span>
		      <span class="sr-only">Next</span>
		    </a>
		  </div>
</div><br><br><br><br>
	<script>
		// Get the modal
		var modal = document.getElementById('myModal');

		// Get the button that opens the modal
		var btn = document.getElementById("myBtn");

		// Get the <span> element that closes the modal
		var span = document.getElementsByClassName("close")[0];

		// When the user clicks the button, open the modal 
		btn.onclick = function() {
		    modal.style.display = "block";
		}

		// When the user clicks on <span> (x), close the modal
		span.onclick = function() {
		    modal.style.display = "none";
		}

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
		    if (event.target == modal) {
		        modal.style.display = "none";
		    }
		}
	</script>

	<script>
		function myFunction(x) {
		    x.classList.toggle("change");
		}
	</script>
	<script>
					function openNav() {
					  document.getElementById("myNav").style.width = "100%";
					}

					function closeNav() {
					  document.getElementById("myNav").style.width = "0%";
					}
	</script>
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