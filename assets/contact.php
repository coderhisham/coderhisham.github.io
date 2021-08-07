<?php
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $subject = $_POST['Subject'];
    $message = $_POST["Message"];

    $email_from = 'hishamhsm609@gmail.com';
    $email_subject = "$subject\n"

    $email_body = "User Name: $name.\n".
                    "User Email: $email.\n".
                    "User Subject: $subject.\n"
                        "User Message: $name.\n".

    $to = "hishamhsm609@gmail.com";

    $headers = "From: $email_from \r\n";
    $headers = "Reply-to: $ \r\n";

    mail($to,$email_subject,$email_body,$headers);
    header("Location: index.html");
    
?>