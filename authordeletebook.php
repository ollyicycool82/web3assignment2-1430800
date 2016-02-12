<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style1.css">
<header>
  <h1 align="center">Welcome To The Bookstop</h1>
    
  </header>
</head>
<title>Author Delete Book</title>
<?php # DISPLAY COMPLETE AUTHOR ADDING A BOOK.
session_start();
# Set page title and display header section.
$page_title = 'Author Delete Book' ;

//include ( 'header.html' ) ;
  require ('connect_db.php');
  $AuthorID= $_SESSION['AuthorID'];
   $q="SELECT * FROM shop WHERE AuthorID= $AuthorID ";
$result= mysqli_query($dbc,$q);

while($row= mysqli_fetch_array($result, MYSQLI_ASSOC ))
{
	#echo '<table><tr>';
	echo  $row['item_name']. '<br><br><a href="deletedbook.php?id='.$row['item_id'].'">DELETE BOOK<br><br></a>';
	echo  $row['item_price']."<br>";
	#echo '</table></tr>';
}


?>


<?php 

# Display footer section.
//include ( 'footer.html' ) ; 

?>
</html>