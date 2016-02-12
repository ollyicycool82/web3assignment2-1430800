<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style1.css">
<header>
  <h1 align="center">Payment Successful!</h1>
	<title>Payment </title>    
  </header>


<?php # DISPLAY COMPLETE LOGGED IN PAGE.


# Redirect if not logged in.
if ( !isset( $_SESSION[ 'CustomerID' ] ) ) { require ( 'login_tools.php' ) ; load() ; }

# Create navigation links.
echo '<p><a href="shop.php">Shop</a> | <a href="goodbye.php">Logout</a></p>';

# Display footer section.
//include ( 'includes/footer.html' ) ;
?>
</body>

</html>