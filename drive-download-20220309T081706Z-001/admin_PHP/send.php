<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
function sendEmail($email,$subject,$content){
    require ('PHPMailer/Exception.php');
    require ('PHPMailer/SMTP.php');
    require ('PHPMailer/PHPMailer.php');
    
    
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);
    
    try {
        //Server settings                    //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'ntu34543@gmail.com';                    //SMTP username
        $mail->Password   = 'pcennuljvgtkpwho';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 465 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('ntu34543@gmail.com', $email);   //Add a recipient
        $mail->addAddress('ntu34543@gmail.com');               //Name is optional
    
    
        // $name = $_POST['name'];
        // $email= $_POST['email'];
        // $message= $_POST['mess'];
        // $content = "Name: " .$name. "<br>Email: " .$email . "<br>Message: " .$message; 
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $content;
        
        $mail->send();
        // header("Location:thank.php");
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
//Load Comoser's autoloader


include('connect.php') ;

if (isset($_POST['send'])) 
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['mess'];

    $sql = "INSERT INTO contacts(name, email, content) VALUES('$name', '$email', '$message')";
    $result = mysqli_query($conn,$sql);
    $subject= 'Email from'.$name. 'To Shop';
    $content = "Name: " .$name. "<br>Email: " .$email . "<br>Message: " .$message;
    sendEmail($email,$subject,$content);
    if ($result) 
    {
        header("location:thank.php?thanhcong");
    } 
    else 
    {
        header("location:thank.php?loi");
    }
}
?>