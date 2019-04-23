<!DOCTYPE html>
<html>
<head>

</head>
<body>

</body>
</html>

<?php

    
    $courseID = filter_input(INPUT_POST,'cid');
    
    include ("connect.php");

    $sql = "DELETE FROM courses WHERE ID = '$courseID'";
   echo $sql;
    if ($link->query($sql) === TRUE){
        echo 'course removed successfully';
    } else {
        echo 'Error: '.$sql ."<br>". $link->error;
    }

    echo '<script>window.location.href = "MESS_courses.php";</script>';

    $link->close();
    
?>