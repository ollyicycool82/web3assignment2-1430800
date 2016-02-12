<?php session_start(); ?>
<?php 
# PROCESS LOGIN ATTEMPT.      
# Check form submitted. 
if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' ) {   
# Open database connection.   
require ( 'connect_db.php' ) ;    
# Get connection, load, and validate functions.   
require ( 'login_tools.php' ) ;    
# Check login.   
list ( $check, $data ) = validate ( $dbc, $_POST[ 'email' ], $_POST[ 'pass' ] ) ;    
//if login as guest link to shop page so guest user can browse
# On success set session data and display logged in page.   
if ( $check )     {     
# Access session.      
$_SESSION[ 'CustomerID' ] = $data[ 'CustomerID' ] ;     
$_SESSION[ 'FirstName' ] = $data[ 'FirstName' ] ;     
$_SESSION[ 'LastName' ] = $data[ 'LastName' ] ;    
echo ' <script type="text/javascript">
           window.location = "home.php"
      </script>'; } 
#include ( 'home.php' ) ;   }   
# Or on failure set errors.   
else { $errors = $data; }        
# Close database connection.   
mysqli_close( $dbc ) ;  }  
# Continue to display login page on failure. 
include ( 'login.php' ) ;  
?>