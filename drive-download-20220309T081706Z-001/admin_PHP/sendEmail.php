<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Mail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
    <div class= "row">
            <div class= "col-md-12 col-sm-16 col-xs-12">
                <div class= "titles">
                    <center>
                        <h3><strong> Send Mail</strong></h3>
                    </center>
                </div>
                <form action ="" method ="POST" accept-charset="utf-8">
                    <div class="contents">
                        <div class="form-group">
                            <label>Subject<span style="color:#f00">&#42;</span></label>
                            <input name="subject" placeholder="Enter the mail subject..." class="form-control" required="required" maxlength="255" type="text" id="contact-name"> 
                        </div>

                        <div class="form-group">
                            <label>To Email: <span style="color:#f00">&#42;</span></label>
                            <input name="toMail" placeholder="Enter the receiver mail..." class="form-control" required="required" maxlength="255" type="email" id="contact-email">  
                        </div>

                        <div class="form-group">
                            <label>Body: <span style="color:#f00">&#42;</span></label>
                            <input name="body" placeholder="Enter body of mail..." class="form-control" required="required" maxlength="255" type="text" id="contact-subject">  
                        </div>
                        <center><button type="submit" name="sendEmail" class="btn btn-info"> Gửi email</button></center>
                    </div><!-- /content -->
                </form>
            </div><!-- /col -->
        </div>
    </div>
</body>
</html>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
require_once "../../vendor/autoload.php";

    if (isset($_POST["sendEmail"])) {
        $myMail = "Dangkyqt2509@gmail.com";
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->SMTPDebug = 0; 
        $mail->SMTPAuth = false;
        $mail->host = "smtp.gmail.com";
        $mail->port = 465;
        $mail->Username = $myMail;
        $mail->Password = "ugiawsgaeutoepvb"; 
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;

        $mail->setFrom($myMail);
        $mail->addAddress($_POST["toMail"]);
        $mail->isHTML();
        $mail->Subject = $_POST["subject"];
        $mail->Body = $_POST["body"];
        $mail->smtpConnect( array(
            "ssl" => array(
                "verify_peer" => false,
                "verify_peer_name" => false,
                "allow_self_signed" => true
            )
        ));
        if (!$mail->send()) {
            echo "<script>alert('Have some problem, sending mail is not successful!')</script>";
            echo $mail->ErrorInfo;
        }
        else {
            echo "<script>alert('Successful!')</script>";
        }
        
    }
?>