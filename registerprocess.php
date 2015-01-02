<?php
$con = mysql_connect("mysql.samhita.org.in","samhitaitadbuser","SIGSEGV_samhitadb");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$college=$_POST['college'];
mysql_select_db("samhitaitadb", $con);
$sql= "insert into users(name,email,phone,college) values('$name','$email','$phone','$college')";
if (!mysql_query($sql,$con))
{
die('Error: ' . mysql_error());
}
//mysql_close($con);

//send mail to user
$to ='$_POST[email]'
;
$subject = 'Samhita-15:Thank You for Your Registration';
$body = 'Thank you';
require_once('mailer/class.phpmailer.php');
date_default_timezone_set('Asia/Kolkata');
    $mail= new PHPMailer();
 
    // telling the class to use SMTP
    $mail->IsSMTP(); 
 
    // sets SMTP server
    $mail->Host = "YOUR MAIL SERVER HOST NAME"; 
 
    // enable SMTP authentication
    $mail->SMTPAuth   = true;      
 
    // sets SMTP port
    $mail->Port = 25;
 
    // SMTP account username   
    $mail->Username   = "chairmanita@mitindia.edu";
 
    // SMTP account password   
    $mail->Password   = "adminchairman"; 
        
    $mail->SetFrom("chairmanita@mitindia.edu", "Samhita");
    $mail->AddReplyTo("chairmanita@mitindia.edu","Samhita");
    $mail->Subject    = $subject;
    $mail->MsgHTML($body);
 
    // To address
    $mail->AddAddress($to);
 
    if(!$mail->Send()) {
        echo "Oops!! Something went wrong";
    } else {
        echo "Email sent";
    }
    
 
$to = $_POST['to_email'];
$subject = $_POST['subject'];
$body = $_POST['body'];
sendmail($to,$subject,$body);

die();
?> 

