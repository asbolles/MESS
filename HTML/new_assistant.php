<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="CSS/EditListOfStudents.css" />
</head>
<body>

</body>
</html>
<?php

$name = filter_input(INPUT_POST, 'fname');
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
$status = filter_input(INPUT_POST, 'Status');

include("connect.php");

$sql = "INSERT INTO users (fname, username, password, vetStatus) 
VALUES ('$name','$username','$password','$status');";

$sql2 = "INSERT INTO sas (username) VALUES ('$username');";

if ($link->query($sql) === TRUE){
    if($link->query($sql2) === TRUE){
        echo 'New assistant added successfully';
    }else{
        echo 'Error: '.$sql2 ."<br>". $link->error;
    }
} else {
    echo 'Error: '.$sql ."<br>". $link->error;
}

echo '<script>window.location.href = "MESS_assistants.php";</script>';

$link->close();

?>