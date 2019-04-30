<!DOCTYPE html>
<html>
<head>

</head>
<body>

</body>
</html>

<?php

$year = filter_input(INPUT_POST, "year");
$working = filter_input(INPUT_POST, "working");
$instruct = filter_input(INPUT_POST, "instruct");
$course = filter_input(INPUT_POST, "course");
$times = filter_input(INPUT_POST, "time");

include ("session.php");

$sql = "INSERT INTO finalized (year, SAList, courseinfo, instructors, times) 
VALUES ('$year','$working','$course','$instruct','$times')";

echo ($sql);

//if ($link->query($sql) === TRUE){
    //echo 'New assistant added successfully';
    //} else {
    //    echo 'Error: '.$sql ."<br>". $link->error;
//}

//echo '<script>window.location.href = "MESS_assistants.php";</script>';

//$link->close();

?>