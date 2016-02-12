<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style1.css">
<header>
  <h1 align="center">Welcome To The Bookstop</h1>
    
  </header>
</head>
<title>Author Update Book Price</title>
<?php # DISPLAY COMPLETE AUTHOR UPDATING A BOOK PRICE.
# Set page title and display header section.
$page_title = 'Author Update Price' ;

//include ( 'header.html' ) ;
  require ('connect_db.php');
  $AuthorID= $_SESSION['AuthorID'];
   $q="SELECT * FROM shop WHERE AuthorID= $AuthorID ";
$result= mysqli_query($dbc,$q);

while($row= mysqli_fetch_array($result, MYSQLI_ASSOC ))
{
	$_SESSION['item_name']= $row['item_name'];
	#echo '<table><tr>';
	echo  $row['item_name']. '<br><a href="deletedbook.php?id='.$row['item_id'].'">DELETE BOOK</a>';
	echo '<br>current price: '.$row['item_price'].'<br>';
	?>
	<form action="updatedprice.php" method= "POST">
	<p> New Price<input type= "text" name="new_price"/></p>
	<input type="hidden" name="item_id" value="<?php echo $row['item_id']; ?>">
	<input type="submit" name="Update Price"/>
	</form>
	<br>
	<?php
	
	#echo '</table></tr>';
}







# Display footer section.
//include ( 'footer.html' ) ; 

?>
</html>