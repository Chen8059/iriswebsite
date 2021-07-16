<?php
    $name = $_POST["name"];
    $visitor_email = $_POST["email"];
    $message = $_POST["message"];
    $httpParamSerializer({
        cycle : key,
        emp_id : user.id
    }),

    $email_from = "HappyPopcorn@iris8310.com";
    $email_subject = "New Form Submission";
    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                        "User Message: $message.\n";
    
    $to = "chhua8059@gmail.com";
    $headers ="From: $email_from \r\n";
    $headers .="Reply-To: $visitor_email \r\n";
    mail($to, $email_subject, $email_body, $headers);
    header("Location: index.html");

?>
