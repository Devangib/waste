
<?php
		
	session_start();

	require_once 'database_connection.php';

	$uname=$_POST['username1'];
	//$password=$_POST['password1'];
	$password_hash=md5($_POST['password1']);

	$sql = "SELECT * FROM course_signup1";
	$result = mysqli_query($con, $sql);

	$errorMessage = 0;
	while($row = mysqli_fetch_assoc($result)) {

		if($row["email"] == $uname){
			$errorMessage = 1;
			break;
		}
	}
	if($errorMessage == 1)
	{
		$_SESSION['errorMessage'] = 1;
		header("Location: index.php");
	}
	else{
			$_SESSION['email']=$uname;
			$_SESSION['password']=$password_hash;
			header("Location: online_payment/index.php");

		exit();
	}	
?>