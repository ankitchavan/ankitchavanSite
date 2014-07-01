// Get values from the form
<?php  
$name=$_POST['name'];
$city=$_POST['city'];
$phone=$_POST['phone'];
$email=$_POST['email'];
 
$to = "ankit.11ch@gmail.com";
$subject = "Contact Form Test";
$message = " Name: " . $name . "\r\n City: " . $city . "\r\n Phone: " . $phone . "\r\n Email: " . $email;
 
 
$from = "FutureTutorials";
$headers = "From:" . $from . "\r\n";
$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
 
if(@mail($to,$subject,$message,$headers))
{
  print "success!!";
  // Created by Future Tutorials
}else{
  echo "Error! Please try again.";
}
?>