<?php
DEFINE ('DB_USER', 'MESS');
DEFINE ('DB_PASD', 'mess');
DEFINE ('DB_HOST', 'csums.dhcp.bsu.edu');
DEFINE ('DB_NAME', 'mess_test');
//CREATE CONNECTION//
$link = mysqli_connect(DB_HOST, DB_USER, DB_PASD, DB_NAME);
//CHECK CONNECTION//
if (!$link) {
    die('error connecting to database');
}

echo 'you have connected seccessfully';

?>