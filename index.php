<?php
session_start();
if(!empty($_SESSION['errors']['empty'])){
   echo $_SESSION['errors']['empty'];
}
if(!empty($_SESSION['errors']['email'])){
   echo $_SESSION['errors']['email'];
}
if(!empty($_SESSION['errors']['password'])){
   echo $_SESSION['errors']['password'];
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script> 
	
</head>
<body>
	<form action="info.php" method="POST">
		<div class="container">
			<h2>Please fill in this form to sign up for our services</h2>
			<hr>

			<label for="firstname"><b>Firstname</b></label>
			<input type="text" name="firstname">

			<label for="lastname"><b>Lastname</b></label>
			<input type="text" name="lastname">

			<label for ="email"><b>Email</b></label>
			<input type="text" name="email">

			<label for="dateofbirth"><b>Date of Birth</b></label>
			<input type="date" name="dateofbirth" id="dateofbirth" max="2019-12-31"> <br>

			<label for="favcolor"><b>Select your favorite color</b></label>
  			<input type="color" name="favcolor" id="favcolor"> <br>

  			<label for="gender"><b>Gender</b></label><br>
			<input value="Female" name="gender" class="gender" type="checkbox">Female
    		<input value="Male" name="gender" class="gender" type="checkbox">Male  
    		<script type="text/javascript">
			    $('.gender').click(function() {
		        $(this).siblings('input:checkbox').prop('checked', false);
		   		 });
  			</script>
			<br>
			<br>
			
			<label for="department"><b>Select a department</b></label>

			<select name="department" id="department">
			  <option value="IT">IT</option>
			  <option value="HR">HR</option>
			  <option value="Marketing">Marketing</option>
			</select>

			<br>

			<label for ="password"><b>Password</b></label>
			<input type="password" name="password">

			
			<hr>

			<p>By creating an account you agree to our <a href="#"> Terms & Privacy</a>.</p>

			<button type="submit" class="signup" name = "submit">Signup</button>
			
		</div>
		<div class="container signin">
			<p>Already have an account? <a href="signin.php">Sign in</a>.</p>
			
		</div>
	</form>	
</body>

</html>