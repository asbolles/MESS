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

include ("session.php");


$sql = "UPDATE sas SET greenAvail='$green',yellowAvail='$yellow',minHr=$min, maxHr=$max,
 WHERE fname='$user_check'";


if ($link->query($sql) === TRUE){
  echo 'Assistant Availability submitted successfully';
} else {
    echo 'Error: '.$sql ."<br>". $link->error;
}

?>