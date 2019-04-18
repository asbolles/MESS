<?php

DEFINE ('DB_USER', 'MESS');
DEFINE ('DB_PASD', 'mess');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'mess_test');
$link = mysqli_connect(DB_HOST, DB_USER, DB_PASD, DB_NAME);
if (!$link) {
    die('error connecting to database');
}


$sql = "SELECT * FROM sas WHERE name = 'asbolles'";

$result = $link->query($sql) or die("error getting data");

echo "<table style='width:70%' class='Ltable'>";

$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    
    $name = $row['name'];
   
    $green = $row['greenAvail'];
   
    $yellow = $row['yellowAvail'];
   
   

mysqli_close($link);
?>