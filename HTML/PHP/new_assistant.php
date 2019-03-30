<?php

$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
$firstname = filter_input(INPUT_POST, 'fname');
$lastname = filter_input(INPUT_POST, 'lname');

include("connect.php")

$sql = "INSERT INTO users (fname, lname, username, password) 
VALUES ('$firstname', '$lastname', '$username', '$password');";

if ($link->query($sql) === TRUE){
	echo 'New assistant added successfully';
} else {
	echo 'Error: '.$sql ."<br>". $link->error;
}

$link->close();

?>