<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $title = $_POST['title'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $to = "diamondkirov@gmail.com";

    $headers = "From: $name <$email>, <$phone>" . "\r\n" .
        "Reply-To: $email" . "\r\n" .
        "Content-type: text/html; charset=UTF-8" . "\r\n".
        "X-Mailer: PHP/" . phpversion();

    mail($to, $title, $message, $headers);
    echo 'Done';
?>