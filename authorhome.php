<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style1.css">
<header>
  <h1 align="center">Welcome Author To The Bookstop</h1>
    
  </header>
</head>
<title>The Bookstop Author Home</title>
<?php # DISPLAY COMPLETE LOGGED IN PAGE.

# Access session.
session_start() ; 

# Redirect if not logged in.
if ( !isset( $_SESSION[ 'AuthorID' ] ) ) { require ( 'authorlogin_tools.php' ) ; load() ; }

# Set page title and display header section.
$page_title = 'Author Home' ;
//include ( 'includes/header.html' ) ;

# Display body section.
echo "<h1>HOME</h1><p>You are now logged in, {$_SESSION['FirstName']} {$_SESSION['LastName']} </p>";

# Create navigation links.
echo '<p><a href="authorshop.php">Shop</a> | <a href="authoraddbook.php">Add Book</a> | <a href="authordeletebook.php">Delete Book</a> | <a href="updateprice.php">Update Book Price</a> | <a href="authorgoodbye.php">Logout</a></p>';

# Display footer section.
//include ( 'includes/footer.html' ) ;
?>
</html>