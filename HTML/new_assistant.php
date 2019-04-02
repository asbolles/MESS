<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="CSS/EditListOfStudents.css" />
</head>
<body>

</body>
</html>
<?php

$name = filter_input(INPUT_POST, 'name');
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');

include("connect.php");

$sql = "INSERT INTO users (name, username, password) 
VALUES ('$name','$username','$password');";

if ($link->query($sql) === TRUE){
    echo 'New assistant added successfully';
} else {
    echo 'Error: '.$sql ."<br>". $link->error;
}

echo '<script>window.location.href = "MESS_assistants.php";</script>';

$link->close();

?>