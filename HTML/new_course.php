<!DOCTYPE html>
<html>
<head>

</head>
<body>

</body>
</html>

<?php

    

    $course = filter_input(INPUT_POST,"Course");
    $section = filter_input(INPUT_POST,"Section");
    $instructor = filter_input(INPUT_POST,"Instructor");
    $days = filter_input(INPUT_POST,"Days");
    $start = filter_input(INPUT_POST,"Start");
    $end = filter_input(INPUT_POST,"End");
    $sa = filter_input(INPUT_POST,"SA");
    
    include ("connect.php");

$sql = "INSERT INTO Courses(Course,Section,Instructor,Days,Start,End,SAs) 
VALUES ( '$course',$section, '$instructor', '$days','$start','$end',$sa)";
   
    if ($link->query($sql) === TRUE){
        echo 'New course added successfully';
    } else {
        echo 'Error: '.$sql ."<br>". $link->error;
    }

    //echo '<script>window.location.href = "MESS_courses.php";</script>';

    $link->close();
    
?>