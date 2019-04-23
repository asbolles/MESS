<!DOCTYPE html>
<html>
<head>
   
</head>
<body>

</body>
</html>
<?php

$name = filter_input(INPUT_POST, 'fname');

include("connect.php");

$sql="DELETE FROM users WHERE fname = '$name';";

$sql2="DELETE FROM sas WHERE username = '$name';";

echo $sql; 
if ($link->query($sql) === TRUE){
    if($link->query($sql2)=== TRUE){
        echo 'Assistant was removed successfully';
    }else{
        echo 'Error: '.$sql ."<br>". $link->error;
    }
}else{
   echo 'Error: '.$sql ."<br>". $link->error;
}
echo '<script>window.location.href = "MESS_assistants.php";</script>';

$link->close();
?>