<!DOCTYPE html>
<html lang="em">
<head>
    <meta charset="utf-8">
    <title>Finalized Schedule - MESS</title>
    <link rel="stylesheet" href="CSS/Finalized.css">
</head>


<body>

<?php
DEFINE ('DB_USER', 'MESS');
DEFINE ('DB_PASD', 'mess');
DEFINE ('DB_HOST', 'csums.dhcp.bsu.edu');
DEFINE ('DB_NAME', 'mess');
$link = mysqli_connect(DB_HOST, DB_USER, DB_PASD, DB_NAME);
if (!$link) {
    die('error connecting to database');
}
echo 'connection established <br>';
?>

    <div class="sidebar">
        <img src="Images/MESS Logo.jpg"/>
        <a href="MESS_finalized.html">Semester Schedule</a><br>
        <a href="MESS_master.php">Master Schedule</a><br>
        <a href="MESS_assistants.php">Student Assistants</a><br>
        <a href="MESS_courses.php">Start New Semester</a>        
        <a href="logout.php">Logout</a>
    </div>
    <h1 class="header">Finalized Schedule</h1>
    <h2>Term: Fall 2019</h2>
   
    <table style="width:90%" class="chart">
        <tr>
            <th colspan="3" class='shrink'>Course Info</th>
            <th colspan="3" class='shrink'>Class Duration</th> 
            <script>
                var titles =["Anna","Austin","Evan","Sam","Maria","Queen",]
                var Anna=[2,1,1,2,0,1,0,2,2,2];
                var Austin=[0,1,1,2,0,1,0,2,2,2];
                var Evan=[0,1,1,2,0,1,0,2,2,2];
                var Sam=[0,1,1,2,0,1,0,2,2,2];
                var Maria=[0,1,1,2,0,1,0,2,2,2];
                var Queen=[0,1,1,2,0,1,0,2,2,2];
                var SAs =[Anna,Austin,Evan,Sam,Maria,Queen];
                var Sect=["1","1","1","1","1","1","1","1","1","1"];
                var Instuctor=["Stark", "jones","gonsolez","Christine","Ross","Stark", "jones","gonsolez","Christine","Ross"]
                var Start=["8:00","8:00","8:00","8:00","8:00","8:00","8:00","8:00","8:00","8:00"];
                var end=["8:50","8:50","8:50","8:50","8:50","8:50","8:50","8:50","8:50","8:50"];
                var days=["MWF","MWF","MWF","MWF","MWF","MWF","MWF","MWF","TR","TR"];
                var numbers=[1,3,3,2,1,3,2,1,2,1];
                var subs=[1,3,3,2,1,3,2,1,2,1];
                document.write(" <th colspan="+(titles.length+2)+" class='shrink'>Student Assistants</th> </tr>")
                document.write("<tr><td class='shrink'>Course</td><td class='shrink'>Section</td><td class='shrink'>Instructor</td><td class='shrink'>Start Time</td><td class='shrink'>End time</td><td class='shrink'>Days</td>");
                titles.forEach(function(title){
                    document.write("<th>"+title+"</th>")
                })
                document.write("<th class='shrink'>#</th><th class='shrink'>Subs</th>")
                document.write("<tr>");
                    var RowCounter=0;
                    var hold=0;
                    for(i=0;i<Anna.length;i++){
                        if(days[RowCounter]=="TR"&& hold==0){
                            SAs.forEach(function(sa){
                                document.write("<td class='inbetween'>between</td>");
                            })
                            document.write("<td class='inbetween' colspan='6'></td>");
                            document.write("<td class='inbetween' colspan='2'></td></tr><tr>");
                            hold=1;
                        }
                        
                        document.write("<td class='shrink'>math</td><td class='shrink'>"+Sect[i]+"</td><td class='shrink'>"+Instuctor[i]+"</td><td class='shrink'>"+Start[i]+"</td><td class='shrink'>"+end[i]+"</td><td class='shrink'>"+days[i]+"</td>")  

                            CreateChart(RowCounter);
                        RowCounter++; 
                    }
                    document.write("<td class='inbetween3' colspan='5'>between</td>")
                    document.write(" <tr><td colspan='5' rowspan='3' class='inbetween2'></td><td>Hours requested</td><td>1-3</td><td>1-3</td><td>1-3</td><td>1-3</td><td>1-3</td><td>1-3</td></tr><tr><td>Hours filled</td><td>3</td><td>3</td><td>3</td><td>3</td><td>3</td><td>3</td></tr>")
                
                document.write("</tr>");
                function CreateChart(RowCounter){
                    SAs.forEach(function(sa){
                        if (sa[RowCounter]==0){
                        document.write("<td class='box red'>Red</td>")
                    }
                    if (sa[RowCounter]==1){
                        document.write("<td class='box yellow'>Yellow</td>")
                    }
                    if (sa[RowCounter]==2){
                        document.write("<td class='box green'>Green</td>")
                    }
                    })
                    document.write("<td>"+numbers[RowCounter]+"</td><td>"+subs[RowCounter]+"</td>");
                    document.write("</tr><tr>");
                    
                }
                </script>
        </table>
        
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