<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="CSS/EditListOfStudents.css" />
</head>
<body>

<?php
$id = filter_input(INPUT_POST, 'id');
$firstname = filter_input(INPUT_POST, 'firstname');
$lastname = filter_input(INPUT_POST, 'lastname');
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');

include("connect.php");

$id=$_POST['$td'];
$sql = "DELETE FROM users WHERE id VALUES ('$id');";

if ($link->query($sql) === TRUE){
    echo "Assistant Removed";
} else {
    echo 'Error: '.$sql ."<br>". $link->error;
}

$link->close();
?>
