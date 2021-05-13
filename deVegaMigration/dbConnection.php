<?php
// Turn off all error reporting
error_reporting(0);
ini_set("display_errors", 0);

# DB Conn Settings
$servername = "localhost";

#Online
$username = "c10devegadev";
$password = "";
$database = "";

#Localhost
#$username = "root";
#$password = "";
#$database	= "devega";

global $dbConn;
// Create connection
$dbConn = new mysqli($servername, $username, $password);

// Check connection
if ($dbConn->connect_error) {
    die("Connection failed: " . $dbConn->connect_error);
}
$dbConn->select_db($database) or die($dbConn->error);

//$dbConn->close();
