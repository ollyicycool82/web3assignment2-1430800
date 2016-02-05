<! DOCTYPE HTML>
<html lang= "en">
<head>
<meta charset= "UTF-8">
</head>
<body>
<?php
$name = $_POST['name'];
$mail = $_POST['mail'];
$comment = $_POST['comment'];
echo "<p>Thanks for this comment $name...</p>";
echo "<p><i>We will reply to $mail</p>";
?>
</html>