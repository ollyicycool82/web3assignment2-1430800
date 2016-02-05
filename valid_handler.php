<! DOCTYPE HTML>
<html lang= "en">
<head>
<meta charset= "UTF-8">
</head>
<body>
<?php
if ( !empty($_POST['quantity']))
{
	$quantity = $_POST['quantity'];
	#below ensures numeric values only.
if (!is_numeric($quantity))
	{ $quantity = NULL;echo 'Quantity must be numeric<br>';}
	}
else
	{$quantity = NULL;echo'You must enter a quantity<br>';}
if ( !empty ( $_POST['email']))
{
	$email = $_POST['email'];
	#ensures email address is correct format.
	$pattern = '/\b[\w.-]+\.[A-Za-z]{2,6}\b/';
}
if ( !preg_match( $pattern, $email))
{ $email = NULL;echo'Email address is incorrect format';}
if (($quantity != NULL) &&($email != NULL))
{echo "Email:$email<br>Quantity:$quantity";}


?>
</html>