<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
 <title>Mail Test</title>
</head>
<body>
<div>
 <?php 
$emailTo="christy.patterson@gmail.com";
 $subject="I hope this works";
 $body="I think this is great";
 $headers="From: shem.patterson@gmail.com";
if (mail($emailTo, $subject, $body, $headers)) {
 echo "Mail set successfully!";
 } else {
 echo "Mail not sent!";
 }
?>
</div>
</body>
</html>
