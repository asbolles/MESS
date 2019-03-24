<?php
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');

DEFINE ('DB_USER', 'MESS');
DEFINE ('DB_PASD', 'mess');
DEFINE ('DB_HOST', 'csums.dhcp.bsu.edu');
DEFINE ('DB_NAME', 'mess_test');

$link = mysqli_connect(DB_HOST, DB_USER, DB_PASD, DB_NAME);

if (!$link) {
    die('error connecting to database');
}

echo 'you have connected seccessfully';


$sql = "INSERT INTO accounts (username, password) 
VALUES ('$username', '$password');";

if ($link->query($sql) === TRUE){
    echo 'New record is inserted successfully';
}else{
    echo "Error: ".$sql ."<br>". $link->error;
}


$link->close();
?>