<?php
session_start();
# Check form submitted.

	//$item_name= $_SESSION['item_name'];
	  $new_price= $_POST['new_price'];
	  $item_name= $_POST['item_id'];
  # Connect to the database.
 ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style1.css">
<?php
 # if ( empty( $errors ) ) 
  #{
	require ('connect_db.php');
    //$q = "UPDATE shop SET item_price= $new_price WHERE item_name= $item_name ";
    $q = "UPDATE shop SET item_price= $new_price WHERE item_id= $item_name ";
	$r = @mysqli_query ( $dbc, $q ) ;
    if ($r)
    { echo '<h1>Price Updated!</h1><p>Your new added book is now registered.</p><p><a href="updateprice.php">Delete or update more books</a></p>'; }
  
    # Close database connection.
    mysqli_close($dbc); 

    # Display footer section and quit script:
    //include ('footer.html'); 
   // exit();
  #}
  # Or report errors.
  /*else 
  {
    echo '<h1>Error!</h1><p id="err_msg">The following error(s) occurred:<br>' ;
    foreach ( $errors as $msg )
    { echo " - $msg<br>" ; }
    echo 'Please try again.</p>';
    # Close database connection.
    mysqli_close( $dbc );
  }*/
?>  
