<?php
DEFINE ('DB_USER', 'MESS');
DEFINE ('DB_PASD', 'mess');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'mess_test');
$link = mysqli_connect(DB_HOST, DB_USER, DB_PASD, DB_NAME);
if (!$link) {
    die('error connecting to database');
}
?>