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

Form code
<form method="post" action="index.php">
  <div class="fields">
    <div class="field half">
      <label for="name">Name</label>
      <input type="text" name="name" id="name" />
    </div>
    <div class="field half">
      <label for="email">Email</label>
      <input type="text" name="email" id="email" />
    </div>
    <div class="field">
      <label for="message">Message</label>
      <textarea name="message" id="message" rows="4"></textarea>
    </div>
  </div>
  <ul class="actions">
    <li><input type="submit" name="sumitbtn" value="Send Message" class="primary" /></li>
    <li><input type="reset" value="Reset" /></li>
  </ul>
</form>
