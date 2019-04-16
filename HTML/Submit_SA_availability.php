<!DOCTYPE html>
<html>
<head>

</head>
<body>

</body>
</html>

<?php
echo "DEALTH";
$green = filter_input(INPUT_POST, "PHPgreen");
$yellow = filter_input(INPUT_POST, "PHPyellow");
$min = filter_input(INPUT_POST, "Min");
$max = filter_input(INPUT_POST, "Max");
$status = filter_input(INPUT_POST, "Status");

include ("connnect.php");

$sql = "INSERT INTO sas(greenAvail, yellowAvail, minHr,maxHr,vetStatus)
 VALUES ('$green','$yellow',$min,$max,'$status')";

echo $sql;
//if ($link->query($sql) === TRUE){
 //   echo 'Assistant Availability submitted added successfully';
//} else {
//    echo 'Error: '.$sql ."<br>". $link->error;
//}

?>