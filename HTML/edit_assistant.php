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
$password = filter_input(INPUT_POST, 'password');
$status = filter_input(INPUT_POST, 'Status');

include("connect.php");

$sql = "UPDATE users SET password='$password',vetStatus='$status' WHERE fname = '$name';";


if ($link->query($sql) === TRUE){
   
   echo 'Assistant Info updated successfully';

} else {
    echo 'Error: '.$sql ."<br>". $link->error;
}

echo '<script>window.location.href = "MESS_assistants.php";</script>';

$link->close();

?>