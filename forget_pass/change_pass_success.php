<?php
session_start();
?>

<html>
<title></title>
<head>
<style>
	label{
		float:left;
		position:relative;
	}
	input[type=text] {
    width: 100%;
    padding: 12px 15px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	
}

input[type=submit]:hover {
    background-color: #45a049;
}

.form{

    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
	width:500px;
}

</style></head>
<body>

					<a href="index.html"><img src="../images/logo.png" alt="S-SparQ"  height="60px" width="140px" /><em>.</em></a>
					<hr>
					<center><h2 style="color:#45a049">FOR ONLINE SOLAR TRANING PROGRAMME</h2>
					
<div class="form">

<?php 
    include'../database/check.php';
    if(! $conn ) {
			die('Could not connect: ' . mysqli_error());
				}
    if(isset($_POST['submit']))
    {
        $username=$_POST['username'];
        $pass=md5($_POST['pass1']);
        $query="UPDATE course_signup1 SET password='".$pass."' WHERE email='".$email."' ";
        $result = mysqli_query( $conn, $query );
       
    }
    
    ?>
    <center>Password Changed Succesfully!</center>
   <p> <a href="../index.php">click here</a>to go to login page</p>
    
      
  </div>
  </center>
  <hr>
</body>
</html>