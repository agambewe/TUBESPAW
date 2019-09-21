<?php
use PHPMailer\src\Exception;

require("../libraries/PHPMailer/src/PHPMailer.php");
require("../libraries/PHPMailer/src/SMTP.php");
require("../libraries/PHPMailer/src/Exception.php");

$mail = new PHPMailer\PHPMailer\PHPMailer();

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    include('../db.php');

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $hash = md5(rand(0,1000));
    $status = 0;
    $image = "upload/default.png";
    $role = 0;

    $input = mysqli_query($con,"INSERT INTO users(name,email,password,hash,status,image,role) 
            VALUES('$name','$email','$password','$hash','$status','$image','$role')")or die(mysqli_error($con));
    if($input){
            $base_url = "http://iconic-shoes-care.com/";
            $url = "localhost/try/";
            $noD = "style='text-decoration: none!important; color: inherit;'";
            $mail_body = "
            <p>Hi ".$name.",</p>
            <p>Thanks for Registration. Your account will work only after your email verification.</p>
            <button><a ".$noD." href=".$url."proses/prosesVerify.php?email=".$email."&hash=".$hash."><b>Please Click this button to verified your email address</b></a></button>
            <p>Best Regards,<br />IconicShoesCare</p>
            ";

            try {
                $mail->SMTPDebug = 0;  
                $mail->IsSMTP();        //Sets Mailer to send message using SMTP
                $mail->Host = 'smtp.gmail.com';  //Sets the SMTP hosts of your Email hosting, this for Godaddy
                $mail->Port = 587;        //Sets the default SMTP server port
                $mail->SMTPAuth = true;       //Sets SMTP authentication. Utilizes the Username and Password variables
                $mail->Username = 'iconicshoescare@gmail.com';     //Sets SMTP username
                $mail->Password = 'IconicShoesCare!';     //Sets SMTP password
                $mail->SMTPSecure = 'tls';       //Sets connection prefix. Options are "", "ssl" or "tls"
                $mail->From = 'info@iconic-shoes-care.com';   //Sets the From email address for the message
                $mail->FromName = 'IconicShoesCare';     //Sets the From name of the message
                $mail->AddAddress($email, $name);  //Adds a "To" address   
                $mail->WordWrap = 50;       //Sets word wrapping on the body of the message to a given number of characters
                $mail->IsHTML(true);       //Sets message type to HTML    
                $mail->Subject = 'Email Verification';   //Sets the Subject of the message
                $mail->Body = $mail_body;       //An HTML or plain text message body
                if($mail->Send())        //Send an Email. Return true on success or false on error
                {
                $message = '<label class="text-success">Register Done, Please check your mail.</label>';
                echo '<script>alert("Register Done, Please check your mail."); window.location = "../index.php"</script>';
                }
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
    }else{
        echo '<script>alert("success"); window.location = "../index.php"</script>';
    }
}else{
    echo '<script>window.history.back()</script>';
}
?>