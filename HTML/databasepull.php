<?php


DEFINE ('DB_USER', 'MESS');
DEFINE ('DB_PASD', 'mess');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'mess_test');
$link = mysqli_connect(DB_HOST, DB_USER, DB_PASD, DB_NAME);
if (!$link) {
    die('error connecting to database');
}
echo 'connection established <br>';

$sql2 = "SELECT fname FROM users;";

$result2 = $link->query($sql2) or die("error getting data");
echo "<select name='name'>";

while ($row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC)){
    echo "<option value='" . $row['fname'] ."'>" . $row['fname'] ."</option>";
   
}
 echo "</select>";
mysqli_close($link);



?>