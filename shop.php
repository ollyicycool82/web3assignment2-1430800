<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style1.css">
<style type="text/css">
#shoptable {
	position: absolute;
	width: 200px;
	height: 115px;
	z-index: 1;
	left: 365px;
	top: 203px;
}
</style>
<header>
  <h1 align="center">&nbsp;</h1>
  <h1 align="center">Bookstop Shop</h1>
    
</header>
</head>
<body>
<div align="center">
<?php # DISPLAY COMPLETE PRODUCTS PAGE.

# Access session.
session_start() ;

# Redirect if not logged in
if ( !isset( $_SESSION[ 'CustomerID' ] ) ) { require ( 'login_tools.php' ) ; load() ; }

# Set page title and display header section.
$page_title = 'Shop' ;
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
	  echo '<tr><td><strong>' . $row['item_name'] .'</strong><br><span style="font-size:smaller">'. $row['item_desc'] . '</span><br><img src='. $row['item_img'].'><br>$' . $row['item_price'] . '<br><a href="added.php?id='.$row['item_id'].'">Add To Cart<br></a></td></tr>';
	  $counter++;}
  }
  echo '</table>';
  
  # Close database connection.
  mysqli_close( $dbc ) ; 
}
# Or display message.
else { echo '<p>There are currently no items in this shop.</p>' ; }

# Create navigation links.
echo '<p><a href="cart.php">View Cart</a> | <a href="forum.php">Forum</a> | <a href="home.php">Home</a> | <a href="goodbye.php">Logout</a></p>' ;

# Display footer section.
#include ( 'includes/footer.html' ) ;

?>

</body>

</html>
  
