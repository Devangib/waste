<?php



    use PHPMailer\PHPMailer\PHPMailer;

    require 'vendor/autoload.php';


    $mail = new PHPMailer();

    $mail->isSMTP();                        // set mailer to use SMTP
    $mail->Host = "	smtp.gmail.com";  // specify main and backup server
    $mail->Port = "465";
    $mail->SMTPSecure = "ssl";
    $mail->SMTPAuth = true;     // turn on SMTP authentication
    $mail->Username = "	bhuvadevangi9@gmail.com";  // SMTP username
    $mail->Password = "devangipatel"; // SMTP password	
    $mail->From = "bhuvadevangi9@gmail.com";
    $mail->FromName = "System-Ad";
    $mail->AddAddress('bhuvadevangi@gmail.com');                              // set word wrap to 50 characters
    $mail->IsHTML(true);                                  // set email format to HTML (true) or plain text (false)
    $mail->Subject = "This is a Sampleenter code here Email";
    $mail->Body    = "hello";
    $mail->AltBody = "This is the body in plain text for non-HTML mail clients";    
   
    if(!$mail->Send())
    {
       echo "Message could not be sent. <p>";
       echo "Mailer Error: " . $mail->ErrorInfo;
       exit;
    }
   else{
    echo "Message has been sent";
}
    

?>
