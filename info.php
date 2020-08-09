<?php
session_start();
function checkemail($str) {
     return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
}
$errors = [];
if(isset($_POST['submit'])){
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST["email"];
	$dateofbirth = $_POST['dateofbirth'];
	$favcolor = $_POST['favcolor'];
	$gender = $_POST['gender'];
	$department = $_POST['department'];
	$password = $_POST['password'];

	if(empty($firstname) || empty($lastname) || empty($email) || empty($dateofbirth) || empty($favcolor) || empty($gender) || empty($department) || empty($password)){
		$errors['empty'] = 'all fields required' ;
		//header('location:error.php?message'.$message);
		
	}
   if(!checkemail($email)){
      $errors['email'] = 'Invalid email';
      //header('location:error.php?message'.$message);
   }
   // else{
   //    echo "Valid email address.";
   // }
   	$uppercase = preg_match('@[A-Z]@', $password);
	$lowercase = preg_match('@[a-z]@', $password);
	$number    = preg_match('@[0-9]@', $password);
	$specialChars = preg_match('@[^\w]@', $password);

	if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
	    $errors['password'] = 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
	   //header('location:error.php?message'.$message);
	}
	if(!empty($errors)) {
    $_SESSION['errors'] = $errors;
    header('Location: index.php');
    exit;
	}

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Submission</title>

	<style type="text/css">
		body{
			background-color: <?php echo $_POST['favcolor']; ?>;
			color: white;
		}
		.wrapper{
		  text-align: center;
		  background-color: #004156;
		  line-height: 2;
		  letter-spacing: 0.1em;
		  width: 500px;
		  margin: 200px auto;
		  padding: 20px 0px 30px;
		  border-radius: 5px;
		  box-shadow: 0px 1px 4px #CCD7D4;
		}

	</style>
</head>
<body>
	<div class="wrapper">
		<?php 
			echo 'firstname:' .$firstname. '<br>' ;
			echo 'lastname:' .$lastname .'<br>';
			echo 'email:' . $email . '<br>';
			echo 'gender:' . $gender . '<br>'; 
			echo 'department:' . $department . '<br>';
			echo 'date of birth:' . $dateofbirth . '<br>';
			echo 'password:' . $password . '<br>';
		 ?>
	</div>
</body>
</html>