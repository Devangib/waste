
<?php
	
	
	
	session_start();

	require_once 'database_connection.php';

	$uname=$_POST['username'];
	$password=$_POST['password'];
	$password1=md5($password);

	$sql = "SELECT email,password FROM course_signup1";
	$result = mysqli_query($con, $sql);

	while($row = mysqli_fetch_assoc($result)) {

		if($row["email"] == $uname && $row["password"] == $password1){
			$flag = 1;
			break;
		}
	}
	if($flag == 1)
	{
		header("Location: http://localhost/online_course/after_login.php");
	}
	else{
		$_SESSION['loginfail']=1;
		header("Location: index.php");
		exit();
	}	
?>