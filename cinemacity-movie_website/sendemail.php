<?php
    
    $isSend = false;

    if (isset($_POST['submitChoice']) && isset($_POST['inputName']) &&isset($_POST['inputEmail']) && isset($_POST['inputAbout']) && isset($_POST['inputText'])) {

        $isSend = true;

        $clientname = @trim(stripslashes($_POST['inputName']));

        if (strlen($clientname) > 3 && strlen($clientname) < 50) {
            $name = $clientname;
        } else {
            $name="";
            echo "Името трябва да бъде между 3 и 50 знака";
            $isSend = false;

        }

        if (!filter_var($_POST['inputEmail'], FILTER_VALIDATE_EMAIL) === false) {
            
            $email = @trim(stripslashes($_POST['inputEmail']));

        } else {
            echo "$email не е валиден емейл адрес";
            $email = "";
            $isSend = false;

        }

        $subject = @trim(stripslashes($_POST['inputAbout'])); 
        $message = @trim(stripslashes($_POST['inputText'])); 
           
        $email_from = $email;
        $email_to = 'pacho.angarev@gmail.com';

        $body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . $subject . "\n\n" . 'Message: ' . $message;

        $success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');

        if ($isSend) {
            header("Location: index.php?page=contact");
        } else {
            echo "Съжалявам, но в момента съобщението не може да бъде изпратено. Попълнете всички полета.";
        }


    } 



?>