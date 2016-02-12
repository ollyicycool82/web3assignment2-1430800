<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style1.css">
<header>
  <h1 align="center">Welcome To The Bookstop</h1>
    
  </header>
<title>User Logged In</title>
<script type="text/javascript" src="jquery-1.6.3.min.js"></script>
<style>
#show-case
{
    box-shadow:1px 1px 5px 2px #0d456d;
    border-raduius:10px;
    height:200px;
    margin:10px auto;
    width:200px;
}
img
{
       position:absolute;
       width:200px;
       height:200px;
}
</style>
</head>
<body>
<div id="show-case">
    <img class="img" src="img/cow.png">
    <img class="img" src="img/dog.jpg">
    <img class="img" src="img/faceless.jpg">
    <img class="img" src="img/giggs.jpg">
    <img class="img" src="img/goat.jpg">
    <img class="img" src="img/ofmiceandmen.jpg">
</div>
<script>
$(document).ready(function()
{
    $('.img:gt(0)').hide();
    setInterval(function() {
        $(".img:first-child").fadeOut(3000).next(".img").fadeIn(3000).end().appendTo("#show-case")
}, 4000);
       
});
</script>


<?php # DISPLAY COMPLETE LOGGED IN PAGE.

# Access session.
session_start() ; 



# Redirect if not logged in.
if ( !isset( $_SESSION[ 'CustomerID' ] ) ) { require ( 'login_tools.php' ) ; load() ; }

# Set page title and display header section.
$page_title = 'Home' ;
//include ( 'includes/header.html' ) ;

# Display body section.
echo  "<h1>HOME</h1><p>You are now logged in, {$_SESSION['FirstName']} {$_SESSION['LastName']} </p>";

# Create navigation links.
echo '<p><a href="shop.php">Shop</a> | <a href="goodbye.php">Logout</a></p>';

# Display footer section.
//include ( 'includes/footer.html' ) ;
?>

</body>

</html>