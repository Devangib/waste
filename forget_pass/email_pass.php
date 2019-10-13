
<?php
session_start();
  ///sending an email to change password is here
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
					<center><h2 style="color:#45a049"> ONLINE SOLAR TRANING PROGRAMME</h2>
					
<div class="form">
    <center><h3 style="color:green">THANK YOU!</h3></center>
    <p>Click on verification link sent to your email id.</p>
    <?php
    include'../database/check.php';
    if(! $conn ) {
			die('Could not connect: ' . mysqli_error());
				}
    if(isset($_POST['submit']))
    {
        $email_id=$_POST['email'];
        $q="SELECT email FROM course_signup1 WHERE email='".$email_id."'";
        $result = mysqli_query( $conn, $q );
        if($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
        {
            // sending email code here
             //Email
            require_once '../database_connection.php';
            require_once '../MyPHPMailer/email.php';
            $workshop_type = "";    
            $link = 'localhost/online_course/forget_pass/change_pass.php'; 
                       
            $email_subject = "Solar Basic Course Team(Forget Password)";

            $email_name1 = "kWatt Solutions";
            $email_name2 = "Contact No : 7045044005/022-67208033";
            $email_signature = "www.kwattsolutions.com";

            $verification_link = '
                <html>
                <head>
                </head>
                <body>
                    <table>
                    <tr>
                      <th>
                            <a href='.$link.'>Click here for Verification and proceed to payment.</a>
                      </th>
                    </tr>
                  </table>
                </body>
                </html>
                ';

            //$email_body1 = "You have received a new message from kWatt Solutions $workshop_type registration form.\n\n"."Here are the details:\n\nName: $firstname $lastname\n\nEmail: $email\n\nContact no: $phone\n\nCollege Name: $college\n\nCity Name: $city\n\nState Name: $state\n\nDate: $date\n\nLocation: $location\n\nAmount: $amount\n\nTransaction ID: $txnid\n\n$email_name1\n$email_name2\n$email_signature";


            $email_body2 = "A forget password has been requested at 'Online Solar Basic Course' using your email address.\nTo change your new password, please click on the given link:\n$verification_link\n $email_name1\n$email_name2\n$email_signature";
                        
            //mail("training.sparq@kwattsolutions.com",$email_subject,$email_body1,"From: ".$email."\n");
            $data['success']=true;
            $email_kwatt="training.sparq@kwattsolutions.com";
            //mail($email,$email_subject,$email_body2,"From: ".$email_kwatt."\n");


            $mail->From = "info@kwattsolutions.com";
            $mail->FromName = "System-Ad";
            $mail->AddAddress($email_id);

            //$mail->WordWrap = 50;                                 // set word wrap to 50 characters
            $mail->IsHTML(true);                                  // set email format to HTML (true) or plain text (false)

           
            $mail->Subject = $email_subject;
            $mail->Body    = $email_body2;
            $mail->AltBody = "This is the body in plain text for non-HTML mail clients";    
           
            if(!$mail->Send())
            {
               echo "Message could not be sent. <p>";
               echo "Mailer Error: " . $mail->ErrorInfo;
               exit;
            }

            echo "Message has been sent";
        }
          
    }
			
    ?>
    <br><h2><font color="red">
    If you did not recieve any email or<br>Your Service Not Activated in 12 Hours.<br> Call : Your Phone No</font></h2>
</div>
  </center>
  <hr>
</body>
</html>