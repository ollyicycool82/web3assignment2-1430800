<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style1.css">
<header>
  <h1 align="center">Welcome Author To The Bookstop</h1>
    
  </header>
</head>
<title>The Bookstop login</title>
<?php # DISPLAY COMPLETE LOGIN PAGE.

# Set page title and display header section.
//$page_title = 'AuthorLogin' ;
//include ( 'header.html' ) ;

# Display any error messages if present.
if ( isset( $errors ) && !empty( $errors ) )
{
 echo '<p id="err_msg">Oops! There was a problem:<br>' ;
 foreach ( $errors as $msg ) { echo " - $msg<br>" ; }
 echo 'Please try again or <a href="authorregister.php">Register</a></p>' ;
}
?>

<!-- Display body section. -->
<h1>Author Login</h1>
<form action="authorlogin_action.php" method="post">
<p>Email Address: <input type="text" name="email"> </p>
<p>Password: <input type="password" name="pass"></p>
<p><input type="submit" value="Login" ></p>
</form>

<?php 

# Display footer section.
//include ( 'footer.html' ) ; 

?>
</html>