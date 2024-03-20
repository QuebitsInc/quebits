<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    </html><link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="mil-frame-top">
    <a href="index.html" ><img class="mil-logo" src="/img/icons/Logo transparency 3 (1) (1).png"></a>
</div>


<footer class="mil-dark-bg">
                    <div class="mi-invert-fix">
                        <div class="container mil-p-120-60">
                            <div class="row justify-content-between">
                                <div class="col-md-4 col-lg-4 mil-mb-60">

                                    <div class="mil-muted mil-logo mil-up mil-mb-30">Quebits.</div>

                                    <p class="mil-light-soft mil-up mil-mb-30">Subscribe our newsletter:</p>

                                    <form action="send-email.php" method="post" class="mil-subscribe-form mil-up">
                                        <input name="msg" type="text" placeholder="Enter your email">
                                        <button type="submit" class="mil-button mil-icon-button-sm mil-arrow-place"></button>
                                    </form>

                                </div>
                                <div class="col-md-7 col-lg-6">
                                    <div class="row justify-content-end">
                                        <div class="col-md-6 col-lg-7">

                                            <nav class="mil-footer-menu mil-mb-60">
                                                <ul>
                                                    <li class="mil-up mil-active">
                                                        <a href="home-1.html">Home</a>
                                                    </li>
                                                    <li class="mil-up">
                                                        <a href="team.html">Who We Are</a>
                                                    </li>
                                                    <li class="mil-up">
                                                        <a href="#">Our Solutions</a>
                                                    </li>
                                                    <li class="mil-up">
                                                        <a href="portfolio-1.html">Partners</a>
                                                    </li>
                                                    <li class="mil-up">
                                                        <a href="blog.html">Quebits Blog</a>
                                                    </li>
                                                    <li class="mil-up">
                                                        <a href="contact.html">Contact Us</a>
                                                    </li>
                                                </ul>
                                            </nav>

                                        </div>
                                        <div class="col-md-6 col-lg-5">

                                            <ul class="mil-menu-list mil-up mil-mb-60">
                                                <li><a href="#." class="mil-light-soft">Privacy Policy</a></li>
                                                <li><a href="#." class="mil-light-soft">Terms and conditions</a></li>
                                                <li><a href="#." class="mil-light-soft">Cookie Policy</a></li>
                                                <li><a href="#." class="mil-light-soft">Careers</a></li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-between flex-sm-row-reverse">
                                <div class="col-md-7 col-lg-6">

                                    <div class="row justify-content-between">

                                        <div class="col-md-6 col-lg-5 mil-mb-60">

                                            <h6 class="mil-muted mil-up mil-mb-30">Canada</h6>

                                            <p class="mil-light-soft mil-up">71 South Los Carneros Road, California <span class="mil-no-wrap">+51 174 705 812</span></p>

                                        </div>
                                        <div class="col-md-6 col-lg-5 mil-mb-60">

                                            <h6 class="mil-muted mil-up mil-mb-30">Nigeria</h6>

                                            <p class="mil-light-soft mil-up">Leehove 40, 2678 MC De Lier, Netherlands <span class="mil-no-wrap">+31 174 705 811</span></p>

                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-4 col-lg-6 mil-mb-60">

                                    <div class="mil-vert-between">
                                        <div class="mil-mb-30">
                                            <ul class="mil-social-icons mil-up">
                                                <li><a href="#." target="_blank" class="social-icon"> <i class="fa-brands fa-google"></i></a></li>
                                                <li><a href="https://www.instagram.com/quebits?igsh=bGhieDYwaG95OHFq" target="_blank" class="social-icon"> <i class="fa-brands fa-instagram"></i></a></li>
                                                <li><a href="https://www.linkedin.com/company/quebits/" target="_blank" class="social-icon"> <i class="fa-brands fa-linkedin"></i></a></li>

                                            </ul>
                                        </div>
                                        <p class="mil-light-soft mil-up">© Copyright 2024 - Quebits. All Rights Reserved.</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </footer>

</body>

  
<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['send']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];
//Load Composer's autoloader
require 'PHPMailer\src\Exception.php';
require 'PHPMailer\src\PHPMailer.php';
require 'PHPMailer\src\SMTP.php';


//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'mail.quebits.ca';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'info@quebits.ca';                     //SMTP username
    $mail->Password   = 'mashoodquadri1';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('info@quebits.ca', 'Mailer');
    $mail->addAddress('support@quebits.ca', 'Joe User');     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Quebits website';
    $mail->Body    =  "sender name-$name <br> sender email- $email <br> message- $msg";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo "<div class='success'>Message has been sent!</div>";
} catch (Exception $e) {
    echo "<div class='alert'>Message hasn't been sent!</div>";
}
}
