<?php
function OpenCon()
{
$dbhost = "localhost";
$dbuser = "root";
$db = "example";

$conn = new mysqli($dbhost, $dbuser, $dbname) or die("Connect failed: %s\n". $conn -> error);
return $conn;
}
function CloseCon($conn)
{
$conn -> close();
}
?>