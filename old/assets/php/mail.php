<?php 
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    if(isset($_POST['submit'])){

        require 'PHPmailer/src/Exception.php';
        require 'PHPmailer/src/PHPMailer.php';
        require 'PHPmailer/src/SMTP.php';

        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = 0;                                       // Enable verbose debug output
            $mail->isSMTP();                                            // Set mailer to use SMTP
            $mail->Host       = 'smtp.live.com';                        // Specify main and backup SMTP servers
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'i-youri-i@hotmail.com';                // SMTP username
            $mail->Password   = 'Roc1234.';                             // SMTP password
            $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
            $mail->Port       = 587;                                    // TCP port to connect to

            //Recipients
            $mail->setFrom('i-youri-i@hotmail.com', 'Mailer');
            $mail->addAddress('i-youri-i@hotmail.com', 'Mailer2');     // Add a recipient


            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Portfolio Contact';
            $mail->Body    = 'Message from <b>'.$_POST["email"].'</b><br><br>'.$_POST["message"];
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            header("Location: ../../index.php?completed=yes#form");
            exit();
        } catch (Exception $e) {
            header("Location: ../../index.php");
            exit();
        }
    } else {
        header("Location: ../../index.php");
        exit();
    }
?>