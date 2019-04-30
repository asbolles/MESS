
<!DOCTYPE html>
<html lang="em">
<head>
    <meta charset="utf-8">
    <title>Finalized Schedule - MESS</title>
    <link rel="stylesheet" href="CSS/Finalized.css">
    <script src="../Data/finalized.js"></script>
</head>
<?php
        include "session.php";
        $sql = "SELECT * FROM finalized";
        $result = $link->query($sql) or die('error connecting');
       
       
       $yearArray =array();
       $SAlistArray=array();
       $courseInfoArray=array();
       $instructorsArray=array();
       $timesArray=array();
      
       
       
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            
            while($row = $result->fetch_assoc()){
                $yearArray[] = $row['year'];
                $SAlistArray[] = $row['SAList'];
                $courseInfoArray[] = $row['courseInfo'];
                $instructorsArray[] = $row['instructors'];
                $timesArray[] =$row['times'];
            }
        }
        else{
        echo "0 results";
       
    }
        mysqli_close($link);
        ?>
        <script>
var yearArray = <?php echo '["' . implode('", "', $yearArray) . '"]' ?>;
var SAlistArray = <?php echo '["' . implode('", "', $SAlistArray) . '"]' ?>;
var courseInfoArray = <?php echo '["' . implode('", "', $courseInfoArray) . '"]' ?>;
var instructorsArray = <?php echo '["' . implode('", "', $instructorsArray) . '"]' ?>;
var timesArray = <?php echo '["' . implode('", "', $timesArray) . '"]' ?>;
var Semesterlist=[];
for(i =0; i<yearArray.length;i++){
    var semester= [yearArray[i],SAlistArray[i],courseInfoArray[i],instructorsArray[i],timesArray[i]];
    Semesterlist.push(semester);
}

</script>

<body>
    <script>
       
        
        function findsemester(){
            
            var mainsemester=Semesterlist[0];
            var e = document.getElementById("terms");
            var string = e.options[e.selectedIndex].text;
            Semesterlist.forEach(function(semester){
                if(semester[0]==string){
                   mainsemester=semester;
                }
            });
            CreateTable(mainsemester);
        }
</script>


    
    <div class="sidebar">
        <img src="Images/MESS Logo.jpg"/>
        <a href="MESS_finalized.html">Semester Schedule</a><br>
        <a href="MESS_master.php">Master Schedule</a><br>
        <a href="MESS_assistants.php">Student Assistants</a><br>
        <a href="MESS_courses.php">Courses</a>        
        <a href="logout.php">Logout</a>
    </div>
    <h1 class="header">Finalized Schedule</h1>
    <h2>Term: Fall 2019</h2>
    <script>
    document.write(' <select name="terms" id="terms">');
        Semesterlist.forEach(function(semester){
            document.write('<option value="'+semester[0]+'">'+semester[0]+'</option>');
        });
        //CreateTable(eval(document.getElementById(terms).value))
    </script>
   
        
    </select>
    <button onclick="findsemester()">Show Semester</button>
    <br>
    <div id="tableLocation">

    </div>        
                

        <!-- <div class="footer">
            <img src="Images/Copyright.jpg" class="footer" alt="Copyright"; width:100%;/>
        </div> -->
        <div>
            <image>
                <img src="Images/Copyright.jpg" alt="Copyright" class="footer" width:100%>
            </image>
        </div>
</body>
   
</html>