<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style1.css">
<header>
  <h1 align="center">Welcome To The Bookstop</h1>
    
  </header>
</head>
<title>Deleted Book</title>
<?php
session_start();
# Check form submitted.
if ( isset($_GET['id']) )
{
	$id= $_GET['id'];
	  echo $id;
  # Connect to the database.
 

  if ( empty( $errors ) ) 
  {
	require ('connect_db.php');
    $q = "DELETE  FROM shop WHERE item_id= $id ";
    $r = @mysqli_query ( $dbc, $q ) ;
    if ($r)
    { echo '<h1>Book successfully Deleted!</h1><p>Your new added book is now registered.</p><p><a href="authorhome.php">Delete another book</a></p>'; }
  
    # Close database connection.
    mysqli_close($dbc); 

    # Display footer section and quit script:
    //include ('footer.html'); 
    exit();
  }
  # Or report errors.
  else 
  {
    echo '<h1>Error!</h1><p id="err_msg">The following error(s) occurred:<br>' ;
    foreach ( $errors as $msg )
    { echo " - $msg<br>" ; }
    echo 'Please try again.</p>';
    # Close database connection.
    mysqli_close( $dbc );
  }
}  
?>
</html>