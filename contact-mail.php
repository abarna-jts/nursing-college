<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name_st"];
    $mail = $_POST["emailid"];
    $phone = $_POST["phone"];
    $msg = $_POST["msg"];
   
    $to = "abarnadevi2705@gmail.com"; 
    $subject = "Contact form from $name";
    $body = "Name: $name\n <br>";
    $body.= "Email: $mail\n<br>";
    $body.= "Contact: $phone\n<br>";
    $body.= "Message: $msg\n<br>";

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'test.jorim@gmail.com';
        $mail->Password = 'lzgqvrublhfdjmfx'; 
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->setFrom('test.jorim@gmail.com', 'SriKumaran School of Nursing Form'); 
        $mail->addAddress($to);
        $mail->addAddress('abarnadevi2705@gmail.com');
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->send();

        // Return success status
        echo 'success';
    } catch (Exception $e) {
        echo 'Error cant sent the mail: ' . $e->getMessage();
    }
}
?>
