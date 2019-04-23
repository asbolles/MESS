<?php


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