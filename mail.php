<?php





#
# Verify captcha
/*
$post_data = http_build_query(
    array(
        'secret' => '6LdADDEUAAAAAIiFSZEHIeZHT5ltbh-zPmHcyBo-',
        'response' => $_POST['g-recaptcha-response'],
        'remoteip' => $_SERVER['REMOTE_ADDR']
    )
);
$opts = array('http' =>
    array(
        'method'  => 'POST',
        'header'  => 'Content-type: application/x-www-form-urlencoded',
        'content' => $post_data
    )
);
$context  = stream_context_create($opts);
$response = file_get_contents('https://www.google.com/recaptcha/api/siteverify', false, $context);
$result = json_decode($response);
if (!$result->success) {
  //  throw new Exception('Gah! CAPTCHA verification failed.', 1);
    echo 'CAPTCHA verification failed';
    return false;
}
*/

$to = "krissam.tapa@gmail.com";
$subject = "USCR";

$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>Name: ". $_POST['FullName']  ."</p><br>
<p>Email Address: ". $_POST['EmailAddress']  ."</p><br>
<p>Contact Number: ". $_POST['ContactNumber']  ."</p><br>
<p>State: ". $_POST['State']  ."</p><br>
------------------------------------------------------- <br>
 ". $_POST['Msg']  ."
</body>
</html>
";



// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <'. $_POST['EmailAddress']  .'>' . "\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$subject,$message,$headers);

header('location: ./contact.php?send=1');

?>