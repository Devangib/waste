<?php
session_start();
include('check.php');
$correct="";
if(! $conn ) {
die('Could not connect: ' . mysqli_error());}
if(isset($_POST['submit']))		{	
                  
                    $image_item1=$_SESSION['VAR'];	
			       
					$query = "SELECT correct_ans from mcqs WHERE module= '".$image_item1."'";
					$retval = mysqli_query( $conn, $query );
					if(! $retval ) {
					die('Could not get data: ' . mysqli_error($conn));}
					$i=0;
				    $totalCorrect = 0;
 while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC))              
 {  $correct=$row['correct_ans'];
    //$answer = $_GET['question-'.$i.'-answers'];
	$answer= mysqli_real_escape_string($conn, $_POST['question-'.$i.'-answers']);
 if ($answer == $correct){ $totalCorrect++; }
 $i=$i+1;
       echo $totalCorrect;
 }

$_SESSION["TOTALSCORE"]=$totalCorrect; 
echo "".$_SESSION["TOTALSCORE"];
}  

exit();

?>
   <?php 
	  
	   include 'check.php';
	  
	   
      	
	if(! $conn ) {
			die('Could not connect: ' . mysqli_error());
					}
			
			$module=$_SESSION['VAR']; 
		
			$query="SELECT short_desp FROM course_info WHERE MODULE ='".$module."'" ;
			$result=mysqli_query($conn,$query);
			$sql = "SELECT question,option_A,option_B,option_C,option_D FROM mcqs WHERE module='".$module."' ";
			$retval = mysqli_query( $conn, $sql );
					if(! $retval ) {
                  die('Could not get data: ' . mysqli_error($conn));
               }
			
			if(! $result ) {
                  die('Could not get data: ' . mysqli_error($conn));
               }
		 if(isset($_POST['submit']))		{	
					$query = "SELECT correct_ans from mcqs WHERE module= '".$module."'";
					$retval = mysqli_query( $conn, $query );
					if(! $retval ) {
					die('Could not get data: ' . mysqli_error($conn));}
					$i=0;
				    $totalCorrect = 0;
 while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC))              
 {  $correct=$row['correct_ans'];
    //$answer = $_GET['question-'.$i.'-answers'];
	$answer= mysqli_real_escape_string($conn, $_POST['question-'.$i.'-answers']);
 if ($answer == $correct){ $totalCorrect++; }
 $i=$i+1;
 
 }
		 }
		 
		 echo"<center><h1>YOUR SCORE IS :".$totalCorrect."/10</h1></center><br>
             correct are given below:";
			 if($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
			 {echo "<center><h1>$row[short_desp]</h1></center>";}
		 $conn -> close();
		 
?>

