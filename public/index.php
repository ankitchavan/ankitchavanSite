<?php
if ($_POST['parse_var'] == "contactform") {
    
    $emailTitle = 'New Email from your website!';
    $yourEmail = 'ankit.11ch@gmail.com';

    $emailField = $_POST['email'];
    $nameField = $_POST['name'];
    $messageField = $_POST['message'];

    $body = <<<EOD <br><hr><br>
    Email: $emailField <br />
    Name: $nameField <br /> 
    Message: $messageField <br />

EOD;

    $headers = "From: $emailField\r\n";
    $headers .= "content-type: text/html\r\n";
    $success = mail("$yourEmail","$emailTitle","$body","$headers");

    $Sent = "Thank You! Your message has been sent.";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Simple PHP Contact Form</title>
    <link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
 
<body>
  <div class="wrapper">  
    <div id="contact_form">
    <form name="contactform" id="contactform" method="post" action="index.php">
    <h1>Responsive HTML5 Contact Form Demo</h1>
        <label>
        <span>Name*:</span>
        <input type="text" maxlength="30" size="30" placeholder="Please enter your name" name="name" id="name" required autofocus value="<?php print "$nameField"; ?>">
        </label>
         
       <label>
        <span>Email*:</span>
        <input type="email" maxlength="40" size="40" placeholder="youremail@gmail.com" name="email" id="email" required value="<?php print "$emailField"; ?>">
        </label>
       
        <label>
        <span>Message*:</span>    
        <textarea name="message" id="message" cols="10" rows="5" required><?php print "$messageField"; ?></textarea>
        </label>

        <input type="hidden" name="parse_var" id="parse_var" value="contactform">
        <input type="submit" id="submit"  name="submit" value="Send">
        
        <?php print "$sent"; ?>     

    </form>
    </div>
   </div>
 
</body>
</html>