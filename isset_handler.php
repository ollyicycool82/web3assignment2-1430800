<! DOCTYPE HTML>
<html lang= "en">
<head>
<meta charset= "UTF-8">
</head>
<body>
<?php

if (isset( $_POST['definition']))
	{
		$definition = $_POST['definition'];
	}
	else
	{
		$definition = NULL;
	}
if 	($definition != NULL)
{
if ($definition !='Scripting')
{echo "$definition is Incorrect";}
else
{ echo "$definition is Correct";}
}
{echo 'You must select one answer';}

?>
</html>