<?php
        include "session.php";
        $sql = "SELECT * FROM sas";
        $result = $link->query($sql) or die('error connecting');
       
       
        $sql2 = "SELECT * FROM courses";
        $result2 = $link->query($sql2) or die('error connecting');
       //first sql
       $nameArray =array();
       $greenArray=array();
       $yellowArray=array();
       $minhourArray=array();
       $maxhourArray=array();
       $workingArray=array();

       //start of second sql
       $courseArray=array();
       $sectionArray=array();
       $instructorArray=array();
       $daysArray=array();
       $startArray=array();
       $endArray=array();
       $sasArray=array();
       
        
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        
        while($row = $result->fetch_assoc()){
            $nameArray[] = $row['username'];
            $greenArray[] = $row['greenAvail'];
            $yellowArray[] = $row['yellowAvail'];
            $minhourArray[] = $row['minHr'];
            $maxhourArray[] =$row['maxHr'];
            
            $workingArray[]=$row["workingHours"];
        }
    }
    else{
    echo "0 results";
    }
    if (mysqli_num_rows($result2) > 0) {
        // output data of each row
        
        while($row = $result2->fetch_assoc()){
            $courseArray[] = $row['Course'];
            $sectionArray[] = $row['Section'];
            $instructorArray[] = $row['Instructor'];
            $daysArray[] = $row['Days'];
            $startArray[] = $row['Start'];
            $endArray[] =$row['End'];
            $sasArray[]=$row["SAs"];
        }
    }
    else{
    echo "0 results";
   
}
        mysqli_close($link);
        ?>



        