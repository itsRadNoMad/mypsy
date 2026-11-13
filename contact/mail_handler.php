<?php 
if(isset($_POST['submit'])){
    $to = "itsradnomad@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = "MYPSY Designs - Someone wants to hear from you";
    $subject2 = "MYPSY Designs - Your message has been successfully submitted";
    $message = <<<TO
      Hi Rad,

      You've received the following message from $name <$email>:

      $_POST['message'];

      Thanks,
      MYPSY Daemon
      TO;
    $message2 = <<<FROM
      Hi $name,

      Thank you for reaching out!  I will be in contact with you shortly.
      
      I've attached a copy of your message for your records below:

      $_POST['message'];

      Regards,
      Rad No Mad
      MYPSY Designs
      FROM;
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Your message has been submitted.  Thank you, " . $name . "!";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>
