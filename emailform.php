<?php
  $message_sent = false;
  if(isset($_POST['email']) && $_POST['email'] !='' ) 
  {

    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) 
    {
      $userName = $_POST['name'];
      $userEmail = $_POST['email'];
      $message = $_POST['message'];
      $subject - $_POST['Subject test'];
    
      $to ="cpates93@gmail.com";
      $body = "";
    
      $body .= "From: ".$userName. "\r\n";
      $body .= "Email: ".$userEmail. "\r\n";
      $body .= "Message: ".$message. "\r\n";
    
      mail($to,$messageSubject,$body);

      $message_sent = true;
    }
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Charlie Pates</title>
  <link rel="stylesheet" href="main.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="slick-1.8.1/slick/slick.css" />

</head>

<body>
  <?php
if($message_sent):
  ?>
  <div class="thanks">
    thanks!
  </div>
  <div class="backto">
    <a href="http://charliepates.online">Back to website</a>
  </div>
  <?php
  else:
  ?>
  <div class="wrong">
    wrong
  </div>
  <?php
  endif;
  ?>
</body>
</html>