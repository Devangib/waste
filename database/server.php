<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', 'devangi', 'kwatt_online_course');

if(mysqli_connect_errno($db))
{
 echo 'Failed to connect';
}
else{ echo "sucessful <br>";}

// LOGIN USER
if (isset($_POST['login_user'])) {
 $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  echo "post login user is cool <br>";
 
  if (empty($username)) {
    array_push($errors, "Username is required");
	echo "username is empty";
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
		echo "password is empty";
  }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT username,password FROM user_login WHERE username='$username' AND password='$password'";
	echo"query exceuted";
    $results = mysqli_query($db, $query);
    //if (mysqli_num_rows($results) ==2 ) 
		if(mysqli_num_rows($results) == 1){
      //$_SESSION['username'] = $username;
      //$_SESSION['success'] = "You are now logged in";
	  echo"result is succesfully stored";
      header('location: http://localhost/online_course/after_login.php');
	  
    }
	else {
      array_push($errors, "Wrong username/password combination");
	  echo " Wrong username/password combination";
    }
  }
}

?>
