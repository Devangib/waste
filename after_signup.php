
<?php
		
	session_start();
	require_once 'database_connection.php';
	$uname=$_POST['username1'];
	//$password=$_POST['password1'];
	$password_hash=md5($_POST['password1']);
	$sql = "INSERT INTO `PublicTable` (`public_email`, `password`) VALUES ('$uname', '$password_hash') ";
	$result = mysqli_query($con, $sql);
	$errorMessage = 0;
	while($row = mysqli_fetch_assoc($result)) {
		if($row["public_email"] == $uname){
			$errorMessage = 1;
			break;
		}
	}
	if($errorMessage == 1)
	{
		$_SESSION['errorMessage'] = 1;
		//header("Location: index.php");
        echo "error";
	}
	else{
			$_SESSION['email']=$uname;
			$_SESSION['password']=$password_hash;
			//header("Location: index.php");
		exit();
	}	
?>
