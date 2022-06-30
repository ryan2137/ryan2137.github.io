<?php
     $name = $_POST['name'];
     $email = $_POST['email'];
     $subject = $_POST['subject'];
     $message = $_POST['message'];
     $from = 'From: <$email>';
     $to = '<rwilliamson2137@gmail.com>';
     $email_subject = 'New Contact Form Submission!';

     $body = "Name: $name\nE-mail: $email\nSubject: $subject\n\nThe message is below:\n$message";;
?>

<?php
    if (isset($_POST['submitbtn']))
    {
        if (mail($to, $email_subject, $body, $from))
        {
            echo "<font color=\"green\"><p>Your message has been sent!</p></font>";
        }
        else
        {
        echo "<font color=\"red\"><p>Your message sending has failed! Please manually email (your email)!</p></font>";
        }
    }
?>
