<?php
  $name = $_POST['name'];
  $visitor_phone = $_POST['phone'];
  $visitor_email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
?>

<?php
  $email_from = 'fcaptureteam@fcaptureteam.com';

  $email_body = "You have received a new message from $name.\n".
                  "$message\nThey can also be reached at $visitor_phone\n"
?>

<?php
  $to = "fcapturemail@gmail.com";

  $headers = "From: $email_from \r\n";

  $headers .= "Reply-To: $visitor_email \r\n";

  mail($to,$subject,$email_body,$headers);
?>
  <script language="javascript" type="text/javascript">
    window.location = 'index.php';
  </script>
<?php
?>
