	<?php # DISPLAY COMPLETE LOGIN PAGE.

# Set page title and display header section.
//$page_title = 'Login' ;
//include ( 'header.html' ) ;

# Display any error messages if present.
if ( isset( $errors ) && !empty( $errors ) )
{
 echo '<p id="err_msg">Oops! There was a problem:<br>' ;
 foreach ( $errors as $msg ) { echo " - $msg<br>" ; }
 echo 'Please try again or <a href="register.php">Register</a></p>' ;
}
?>

<!-- Display body section. -->
<h1>Login</h1>
<form action="login_action.php" method="post">
<p>Email Address: <input type="text" name="email"> </p>
<p>Password: <input type="password" name="pass"></p>
<p><input type="submit" value="Login" ></p>
<p><a href="guestshop.php">Login as Guest</a></p>
<p><a href="authorlogin1.php">Login as Author</a></p>
<p><a href="register1.php">Register</a></p>

</form>

<?php 

# Display footer section.
//include ( 'footer.html' ) ; 

?>

	
	

   
