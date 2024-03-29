<?php
$recaptcha_response = $_POST['g-recaptcha-response'];

$recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
$recaptcha_secret = '6Ld2YJAmAAAAAMzBw4mJqVM0joIphJRZFGlR761r'; // Replace with your secret key

$recaptcha_data = array(
  'secret' => $recaptcha_secret,
  'response' => $recaptcha_response
);

$recaptcha_options = array(
  'http' => array(
    'header' => "Content-type: application/x-www-form-urlencoded\r\n",
    'method' => 'POST',
    'content' => http_build_query($recaptcha_data)
  )
);

$recaptcha_context = stream_context_create($recaptcha_options);
$recaptcha_result = file_get_contents($recaptcha_url, false, $recaptcha_context);
$recaptcha_response_data = json_decode($recaptcha_result);

if ($recaptcha_response_data->success) {
  $message_sent = false;
  if (isset($_POST['email']) && $_POST['email'] != '') {
    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $userName = $_POST['name'];
      $userEmail = $_POST['email'];
      $message = $_POST['message'];
    
      $to = "cpates93@gmail.com";
      $body = "";
    
      $body .= "From: " . $userName . "\r\n";
      $body .= "Email: " . $userEmail . "\r\n";
      $body .= "Message: " . $message . "\r\n";
      $subject = "Subject test";
    
      mail($to, $subject, $body);

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

<style type="text/css">
  .page-container {
    padding: 0 !important;
  }
  .confirmation-container {
    height: 100vh;
  }
</style>

<body>
  <div class="page-container">
    <div class="confirmation-container">
      <div class="thanks">
        <h1>Thanks for contacting me!<br/>I will be in touch shortly!</h1>
      </div>
      <div class="backto">
        <a href="http://charliepates.online">Back to website</a>
      </div>
    </div>
  </div>
</body>
</html>

<?php
} else {
  // reCAPTCHA validation failed, show an error message
  echo "reCAPTCHA validation failed.";
}
?>
