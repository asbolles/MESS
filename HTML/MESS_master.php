<!DOCTYPE html>
<html lang="em">
<head>
    <meta charset="utf-8">
    <title>Master Schedule - MESS</title>
    <link rel="stylesheet" href="CSS/Master.css" />
    <script type="text/javascript" src="../Data/data.js"></script>
    <script type="text/javascript" src="../Data/Master_Functions.js"></script>
</head>
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
        
        while($row2 = $result2->fetch_assoc()){
            $courseArray[] = $row2['Course'];
            $sectionArray[] = $row2['Section'];
            $instructorArray[] = $row2['Instructor'];
            $daysArray[] = $row2['Days'];
            $startArray[] = $row2['Start'];
            $endArray[] =$row2['End'];
            $sasArray[]=$row2["SAs"];
        }
    }
    else{
    echo "0 results";
   
}
        mysqli_close($link);
        ?>
<script>
var nameArray = <?php echo '["' . implode('", "', $nameArray) . '"]' ?>;
var greenArray = <?php echo '["' . implode('", "', $greenArray) . '"]' ?>;
var yellowArray = <?php echo '["' . implode('", "', $yellowArray) . '"]' ?>;
var minhourArray = <?php echo '["' . implode('", "', $minhourArray) . '"]' ?>;
var maxhourArray = <?php echo '["' . implode('", "', $maxhourArray) . '"]' ?>;
var workingArray = <?php echo '["' . implode('", "', $workingArray) . '"]' ?>;
var workingArrays =[];
workingArray.forEach(function(working){
    workingArrays.push(working.split(','));
});
for(i =0; i<nameArray.length;i++){
    listofSa[i]=new SA (nameArray[i],greenArray[i],yellowArray[i],minhourArray[i],maxhourArray[i],workingArrays[i]);
}

var courseArray = <?php echo '["' . implode('", "', $courseArray) . '"]' ?>;
var sectionArray = <?php echo '["' . implode('", "', $sectionArray) . '"]' ?>;
var instructorArray = <?php echo '["' . implode('", "', $instructorArray) . '"]' ?>;
var daysArray = <?php echo '["' . implode('", "', $daysArray) . '"]' ?>;
var startArray = <?php echo '["' . implode('", "', $startArray) . '"]' ?>;
var endArray = <?php echo '["' . implode('", "', $endArray) . '"]' ?>;
var sasArray = <?php echo '["' . implode('", "', $sasArray) . '"]' ?>;
var sasArrays =[];
sasArray.forEach(function(sas){
    sasArrays.push(parseInt(sas));
});

listOfHours.length=0;
for(i=0;i<courseArray.length;i++){
    if (daysArray[i]="MWF"){
        listOfHours[i]= new hour('M'+startArray[i],[],sasArrays[i],0);
        listOfHours[i]= new hour('W'+startArray[i],[],sasArrays[i],0);
        listOfHours[i]= new hour('F'+startArray[i],[],sasArrays[i],0);
    }
    else if (daysArray[i]="TR"){
        listOfHours[i]= new hour('T'+startArray[i],[],sasArrays[i],0);
        listOfHours[i]= new hour('R'+startArray[i],[],sasArrays[i],0);
    }
}
</script>
<div class="sidebar">
    <img src="Images/MESS Logo.jpg"/>
    <a href="MESS_finalized.php">Semester Schedule</a><br>
    <a href="MESS_master.php">Master Schedule</a><br>
    <a href="MESS_assistants.php">Student Assistants</a><br>
    <a href="MESS_courses.php">Start New Semester</a>        
    <a href="logout.php">Logout</a>
</div>
<body>
<table>
    <tr>
        <td>
            <h1>Master Schedule</h1>
        </td>
    </tr>
    <tr>
        <td>Term: Spring 2020 </td>
        <td id="coord" class="cord">Logged in as: Coordinator</td>
    </tr>
</table>

</div>

<div  id='tableLocation'><!-- dont get rid of this div. its where the table outputs too-->
</div>

<p></p>
<table>
    <td>
        <tr>
            View: <button onclick="createMon('M')">Mon</button> | <button onclick="createTues('T')">Tues</button> | <button onclick="createMon('W')">Weds</button> | <button onclick="createTues('R')">Thurs</button> | <button onclick="createMon('W')">Fri</button> | <button onclick="createFull()">Full</button>
        </tr>
    </td><tr><button onclick="changePage()">Edit Availibility</button><button onclick="window.location.href='MESS_proposed.html'">Request Proposed Schedule</button></tr>
</table>

<?php
 
 $link = mysqli_connect(DB_HOST, DB_USER, DB_PASD, DB_NAME);

    $sql3 = "SELECT * FROM Courses";

    $result3 = $link->query($sql3) or die("error getting course data");


    echo "<table style='width:70%'>";
    echo "<tr>
    <th>Course</th>
    <th>Section</th>
    <th>Instructor</th>
    <th>Days</th>
    <th>Start Time</th>
    <th>End Time</th>
    <th>#SAs</th>";

    while($row3 = mysqli_fetch_array($result3, MYSQLI_ASSOC)){
        echo "<tr><td>";
        echo $row3['Course'];
        echo "</td><td>";
        echo $row3['Section'];
        echo "</td><td>";
        echo $row3['Instructor'];
        echo "</td><td>";
        echo $row3['Days'];
        echo "</td><td>";
        echo $row3['Start'];
        echo "</td><td>";
            echo $row3['End'];
        echo "</td><td>";
        echo $row3['SAs'];
        echo "</td><td>";
        echo "</td></tr>";};
    echo "</table>";
    mysqli_close($link);
    ?>
<div class="php">
</div>
<div>
    <image>
        <img src="Images/Copyright.jpg" alt="Copyright" class="footer" width:100%>
    </image>
</div>

</body>

</html>