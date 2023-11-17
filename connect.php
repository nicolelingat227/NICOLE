<?php
// Database connection configuration
$connection = mysqli_connect('localhost', 'root', '', 'db_softeng');
 
//checking OF DB Connection
if(mysqli_connect_errno()) {
    echo "Failed to connect to MySQL Server" .
    mysqli_connect_errno();
} else {
    echo "Marie Nicole Lingat";
}
?>