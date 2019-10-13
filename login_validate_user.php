<?php
	
	
	
	session_start();
	require_once 'database_connection.php';
	$uname=$_POST['username'];
	$password=$_POST['password'];
	$password1=md5($password);
    $flag=0;
	$sql = "SELECT * FROM `PublicTable` WHERE `public_email` = '$uname' AND `password` = '$password1'";
	$result = mysqli_query($con, $sql);
	while($row = mysqli_fetch_assoc($result)) {
		if($row["public_email"] == $uname && $row["password"] == $password1){
			$flag = 1;
			break;
		}
	}
	if($flag == 1)
	{
		header("Location: after_login.php");
	}
	else{
		$_SESSION['loginfail']=1;
        echo "error";
		//header("Location: index.php");
		exit();
	}	
?>
