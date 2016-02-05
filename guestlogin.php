<?php # PROCESS GUEST LOGIN ATTEMPT.

# Check form submitted.
if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' )
{
  # Open database connection.
  require ( 'connect_db.php' ) ;

  # Get connection, load, and validate functions.
  require ( 'guestlogin_tools.php' ) ;

  # Check login.
  list ( $check, $data ) = validate ( $dbc, $_POST[ 'email' ], $_POST[ 'pass' ] ) ;

  # On success set session data and display logged in page.
  if ( $check )  
  {
    # Access session.
    session_start();
    $_SESSION[ 'AuthorID' ] = $data[ 'AuthorID' ] ;
    $_SESSION[ 'FirstName' ] = $data[ 'FirstName' ] ;
    $_SESSION[ 'LastName' ] = $data[ 'LastName' ] ;
    load ( 'authorhome.php' ) ;
  }
  # Or on failure set errors.
  else { $errors = $data; } 
  

  # Close database connection.
  mysqli_close( $dbc ) ; 
}

# Continue to display login page on failure.
include ( 'Guestlogin.php' ) ;

?>