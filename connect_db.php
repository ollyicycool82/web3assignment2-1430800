<?php
# Connect on 'localhost' for user 'olly'
# With password 'nirvana' to database 'site_db'
$dbc = mysqli_connect("mysql.ccacolchester.com", "olivera0800", "1430800", "olivera0800");
#OR die
#( mysqli_connect_error() );
#set encoding to match PHP script encodingmysqli_set_charset($dbc , 'utf8');
?>