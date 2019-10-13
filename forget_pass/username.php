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
					<center><h2 style="color:#45a049">REGISTER HERE FOR ONLINE SOLAR TRANING PROGRAMME</h2>
					
<div class="form">
   <form name="postForm" action="email_pass.php" method="POST">
    <label for="fname">Email/Username</label>
    <input type="text" id="fname" name="email" placeholder="Enter your username here...">
    <input type="submit" value="submit" name='submit'>
    </form>
  </div>
  </center>
  <hr>
</body>
</html>