<?php

include ("connect.php");


$sql = "SELECT * FROM sas WHERE name = 'asbolles'";

$result = $link->query($sql) or die("error getting data");
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    
   
mysqli_close($link);
?>