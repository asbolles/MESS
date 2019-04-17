<!DOCTYPE html>
<html>
<head>

</head>
<body>

</body>
</html>

<?php
$green = filter_input(INPUT_POST, "PHPgreen");
$yellow = filter_input(INPUT_POST, "PHPyellow");
$min = filter_input(INPUT_POST, "Min");
$max = filter_input(INPUT_POST, "Max");
$status = filter_input(INPUT_POST, "Status");

include ("connect.php");
include ("session.php");


$sql = "INSERT INTO sas(name, greenAvail, yellowAvail, minHr,maxHr,vetStatus)
 VALUES ('$user_check','$green','$yellow',$min,$max,'$status')";


if ($link->query($sql) === TRUE){
  echo 'Assistant Availability submitted added successfully';
} else {
    echo 'Error: '.$sql ."<br>". $link->error;
}

?>