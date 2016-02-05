<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style1.css">
<header>
  <h1 align="center">Welcome To The Bookstop</h1>
    
  </header>
</head>
<title>Author Add Book</title>
<?php # DISPLAY COMPLETE AUTHOR ADDING A BOOK.
session_start() ;
# Set page title and display header section.
$page_title = 'Author Add Book' ;
//include ( 'header.html' ) ;

# Check form submitted.
if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' )
{
  # Connect to the database.
  require ('connect_db.php'); 
  
  # Initialize an error array.
  $errors = array();

  # Check for a first name.
 /* if ( empty( $_POST[ 'Item_ID' ] ) )
  { $errors[] = 'Enter your item ID.' ; }
  else
  { $fn = mysqli_real_escape_string( $dbc, trim( $_POST[ 'FirstName' ] ) ) ; }
*/
  # Check for a last name.
  if (empty( $_POST[ 'item_name' ] ) )
  { $errors[] = 'Enter a name.' ; }
  else
  { $item_name = mysqli_real_escape_string( $dbc, trim( $_POST[ 'item_name' ] ) ) ; }

  # Check for an email address:
  if ( empty( $_POST[ 'item_desc' ] ) )
  { $errors[] = 'Enter a description.'; }
  else
  { $item_desc = mysqli_real_escape_string( $dbc, trim( $_POST[ 'item_desc' ] ) ) ; }
 if ( empty( $_POST[ 'item_price' ] ) )
  { $errors[] = 'Enter a price.'; }
  else
  { $item_price = mysqli_real_escape_string( $dbc, trim( $_POST[ 'item_price' ] ) ) ; }

  
  if ( empty( $errors ) ) 
  {
	  $AuthorID= $_SESSION['AuthorID'];
	echo $AuthorID;
    $q = "INSERT INTO shop (item_name, item_desc, item_price, AuthorID) VALUES ('$item_name', '$item_desc', '$item_price','$AuthorID' )";
    $r = @mysqli_query ( $dbc, $q ) ;
    if ($r)
    { echo '<h1>Book successfully Registered!</h1><p>Your new added book is now registered.</p><p><a href="authoraddbook.php">Add another book</a></p>'; }
  
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

<!-- Display body section with sticky form. -->
<h1>Add Book</h1>
<br><br><br><br><br><br>
<form action="authoraddbook.php" method="post">
<p>Item Name: <input type="text" name="item_name" size="20"
 value="<?php if (isset($_POST['item_name']))
	 echo $_POST['item_name']; ?>"></p>
<p>Item Description: <input type="text" name="item_desc" size="200"
 value="<?php if (isset($_POST['item_desc']))
	 echo $_POST['item_desc']; ?>"> 
 
 <!--Item image: <input type="text" name="item_img" size="20"
 value="<?php if (isset($_POST['item_img']))
	 echo $_POST['item_img']; ?>"> 
--> 

<p>Item Price: <input type="text" name="item_price" size="20"
 value="<?php if (isset($_POST['item_price']))
	 echo $_POST['item_price']; ?>"> 
<p><input type="submit" value="Register Book"></p>

</form>

<?php 

# Display footer section.
//include ( 'footer.html' ) ; 

?>
</html>