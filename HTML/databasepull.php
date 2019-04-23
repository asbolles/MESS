<?php


DEFINE ('DB_USER', 'MESS');
DEFINE ('DB_PASD', 'mess');
DEFINE ('DB_HOST', 'csums.dhcp.bsu.edu');
DEFINE ('DB_NAME', 'mess');
$link = mysqli_connect(DB_HOST, DB_USER, DB_PASD, DB_NAME);
if (!$link) {
    die('error connecting to database');
}
$sql = "SELECT ID FROM courses;";
$result = $link->query($sql) or die("error getting data");
echo "<br>Select Course ID to remove: <select id = cid name ='cid'>";
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    echo "<option value='" . $row[ID] ."'>" . $row[ID] ."</option>";
}
echo "</select>";
mysqli_close($link);



?>