<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style1.css">
<header>
  <h1 align="center">Welcome To The Bookstop</h1>
    
  </header>
</head>
<title>The Bookstop login</title>
<?php # DISPLAY COMPLETE PRODUCTS PAGE.
session_start();
$page_title = 'AuthorShop' ;
//include ( 'includes/header.html' ) ;

# Open database connection.
require ( 'connect_db.php' ) ;

# Retrieve items from 'shop' database table.
$q = "SELECT * FROM shop" ;
$r = mysqli_query( $dbc, $q ) ;
if ( mysqli_num_rows( $r ) > 0 )
{
  # Display body section.
  echo '<table>';
  $counter=0;
  while ( $row = mysqli_fetch_array( $r, MYSQLI_ASSOC ))
  {
	  if($counter=5){
	  echo '<tr><td><strong>' . $row['item_name'] .'</strong><br><span style="font-size:smaller">'. $row['item_desc'] . '</span><br><img src='. $row['item_img'].'><br>$' . $row['item_price'] . '<br><a href="login.php?id='.$row['item_id'].'">Add to cart</a></td> </tr>';
	  $counter++;}
  }
  echo '</table>';
  
  # Close database connection.
  mysqli_close( $dbc ) ; 
}
# Or display message.
else { echo '<p>There are currently no items in this shop.</p>' ; }

# Create navigation links.
echo '<p><a href="cart.php">View Cart</a> <p><a href="cart.php">View Cart</a>| <a href="forum.php">Forum</a> | <a href="home.php">Home</a> | <a href="goodbye.php">Logout</a></p>' ;

# Display footer section.
#include ( 'includes/footer.html' ) ;

?>
</html>