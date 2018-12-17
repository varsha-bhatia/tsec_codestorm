<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sign Up</title>
  
  <style>
  
  body{
	background-color: lightgray;
	
}
	.wrapper{
			border: 1px solid lightgray;
			width:1000px;
			height:600px;
			position:relative;
			top:30px;
			left:20px;
		}
		
	.wrapper1{
			border: 1px solid lightgray;
			width:500px;
			height:500px;
			position:relative;
			top:0px;
			left:0px;
		}

	.wrapper2{
			border: 1px solid lightgray;
			width:500px;
			height:750px;
			position:absolute;
			top:0px;
			left:650px;
			font-size:30px;
		}
		

  </style>
</head>
<body>
<div class="wrapper">
 
	<div class="wrapper1">
		<img  src="z6.jpg" alt="Card image" style="width:100%">
	</div>
  <br>
  
  <div class="wrapper2">
		<form id="myForm" method="POST" action="process.php"> 
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			First name:
			<input type="text" name="firstname" required>
			<br><br>
			Last name:
			<input type="text" name="lastname" required>
			<br><br>
			Password:
			<input type="password" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required><br><br>
			<input type="checkbox" onclick="myFunction()">Show Password<br><br>
			<br>
			Email-Id:
			<input type="email" name="email" required><br><br>
			Gender:
			<input type="radio" name="gender" value="male" required style="size: 40px;">Male
			<input type="radio" name="gender" value="female" required>Female
			<input type="radio" name="gender" value="other" required>Other<br>
			<br><br>
								<button type="Submit" name="submit" style="width:70px; height:50px;" >Submit</button>
					<button type="reset" style="width:70px; height:50px;">Reset</button>

		</form>
	</div>
</div>

		<script>
						function myFunction() {
						    var x = document.getElementById("psw");
						    if (x.type === "password") {
						        x.type = "text";
						    } else {
						        x.type = "password";
						    }
						}
					</script>				
					<script>
						var myInput = document.getElementById("psw");
						var letter = document.getElementById("letter");
						var capital = document.getElementById("capital");
						var number = document.getElementById("number");
						var length = document.getElementById("length");


						// When the user clicks outside of the password field, hide the message box
						myInput.onblur = function() {
						    document.getElementById("message").style.display = "none";
						}

						// When the user starts to type something inside the password field
						myInput.onkeyup = function() {
						  // Validate lowercase letters
						  var lowerCaseLetters = /[a-z]/g;
						  if(myInput.value.match(lowerCaseLetters)) {  
						    letter.classList.remove("invalid");
						    letter.classList.add("valid");
						  } else {
						    letter.classList.remove("valid");
						    letter.classList.add("invalid");
						  }
						  
						  // Validate capital letters
						  var upperCaseLetters = /[A-Z]/g;
						  if(myInput.value.match(upperCaseLetters)) {  
						    capital.classList.remove("invalid");
						    capital.classList.add("valid");
						  } else {
						    capital.classList.remove("valid");
						    capital.classList.add("invalid");
						  }

						  // Validate numbers
						  var numbers = /[0-9]/g;
						  if(myInput.value.match(numbers)) {  
						    number.classList.remove("invalid");
						    number.classList.add("valid");
						  } else {
						    number.classList.remove("valid");
						    number.classList.add("invalid");
						  }
						  
						  // Validate length
						  if(myInput.value.length >= 8) {
						    length.classList.remove("invalid");
						    length.classList.add("valid");
						  } else {
						    length.classList.remove("valid");
						    length.classList.add("invalid");
						  }
						}
					</script> 

					<script>
						$(document).ready(function(){
							$('#myForm input').focus(function(){
								$(this).css('background','pink');
							

							$(this).blur(function(){
								$(this).css('background','none');
							});
						});
						});
					</script>
  
 </div>

</body>
</html>
 