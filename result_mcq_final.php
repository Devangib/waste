 <?php 
   session_start();
	  
	   include 'database/check.php';
	  
	   
      	
	if(! $conn ) {
			die('Could not connect: ' . mysqli_error());
					}
			
			$module=8; 
		
			$query="SELECT short_desp FROM course_info WHERE MODULE ='".$module."'" ;
			$result=mysqli_query($conn,$query);
			$sql = "SELECT * FROM mcqs WHERE module='".$module."'";
			$retval1 = mysqli_query( $conn, $sql );
					if(! $retval1 ) {
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
					$i=1;
				    $totalCorrect = 0;
 while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC))              
 {  $correct=$row['correct_ans'];
    //$answer = $_GET['question-'.$i.'-answers'];
	$answer= mysqli_real_escape_string($conn, $_POST['question-'.$i.'-answers']);
 if ($answer == $correct){ $totalCorrect++; }
 $i=$i+1;
 
 }
		 }
 $_SESSION['SCORE']=$totalCorrect;
////// email code goes here...

		 $conn -> close();
		 
?>
