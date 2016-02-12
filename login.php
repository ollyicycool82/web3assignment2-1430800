
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style1.css">
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

<title>The Bookstop login</title>

<script src="jquery-1.6.3.min.js"></script>
<script>
$(document).ready(function() {
	$('#login').submit(function() {
   var formData = $(this).serialize();
      $.post('login_action.php',formData,processData).error('ouch');
      function processData(data) {
		  console.log(data);
        if (data=='pass') {
           $('#content').html('<p>You have successfully logged in!</p>');
        } else {
           if (! $('#fail').length) {
             $('#formwrapper').prepend('<p id="fail">Incorrect login information. Please try again</p>');
           }
         }
       } // end processData
       return false;
   }); // end submit
		
}); // end ready*/
</script>
<script>
$(document).ready(function()
{
    $('.img:gt(0)').hide();
    setInterval(function() {
        $(".img:first-child").fadeOut(3000).next(".img").fadeIn(3000).end().appendTo("#show-case")
}, 4000);
       
});
</script>
<!--refreshes this part of page rather than whole page use of AJAX and JSON.-->
</head>


<header>
  <h1 align="center">Welcome To The Bookstop</h1>
    
  </header>


<body>
<div id="show-case">
    <img class="img" src="img/cow.png">
    <img class="img" src="img/dog.jpg">
    <img class="img" src="img/faceless.jpg">
    <img class="img" src="img/giggs.jpg">
    <img class="img" src="img/goat.jpg">
    <img class="img" src="img/ofmiceandmen.jpg">
</div>


<?php # DISPLAY COMPLETE LOGIN PAGE.

# Set page title and display header section.
//$page_title = 'Login' ;
//include ( 'header.html' ) ;

# Display any error messages if present.
if ( isset( $errors ) && !empty( $errors ) )
{
 echo '<p id="err_msg">Oops! There was a problem:<br>' ;
 foreach ( $errors as $msg ) { echo " - $msg<br>" ; }
 echo 'Please try again or <a href="register.php">Register</a></p>' ;
}
?>

<!-- Display body section. -->
<h1 align="center">Login</h1>
<div id="formwrapper">
				
			
<form action="login_action.php" method="post">
<p align="center">Email Address:<input type="text" name="email"> </p>
<p align="center">Password:<input type="password" name="pass"></p>
<p align="center"><input type="submit" value="Login" ></p>
<p align="center"><a href="guestshop.php">Login as Guest</a></p>
<p align="center"><a href="authorlogin.php">Login as Author</a></p>
<p align="center"><a href="register.php">Register</a></p>

</form>
</div>
<?php 

# Display footer section.
//include ( 'footer.html' ) ; 

?>

</body>

</html>