<! DOCTYPE HTML>
<html lang= "en">
<head>
<meta charset= "UTF-8">
</head>
<body>
<?php
echo '
<form action="isset_handler.php" method="POST">
<fieldset>
<legend>What kind of language is PHP?</legend>
Scripting<input type="radio"
	name="definition" value="Scripting"> <br>
Markup<input type="radio"
	name="definition" value= "Markup"> <br>
Programming<input type="radio"
	name="definition" value="Programming">
</fieldset><p><input type="submit" ></p>
</form>'
?>
</html>