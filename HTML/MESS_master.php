<!DOCTYPE html>
<html lang="em">
<head>
    <meta charset="utf-8">
    <title>Master Schedule - MESS</title>
    <link rel="stylesheet" href="CSS/Master.css" />
    <script type="text/javascript" src="../Data/data.js"></script>
    <script type="text/javascript" src="../Data/Master_Functions.js"></script>
</head>
<div class="sidebar">
    <img src="Images/MESS Logo.jpg"/>
    <a href="MESS_finalized.html">Semester Schedule</a><br>
    <a href="MESS_master.html">Master Schedule</a><br>
    <a href="MESS_assistants.html">Student Assistants</a><br>
    <a href="MESS_courses.html">Start New Semester</a>        
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
<div id="tableLocation">

</div>

<p></p>
<table>
    <td>
        <tr>
            View: <button onclick="createMon('M')">Mon</button> | <button onclick="createTues('T')">Tues</button> | <button onclick="createMon('W')">Weds</button> | <button onclick="createTues('R')">Thurs</button> | <button onclick="createMon('W')">Fri</button> | <button onclick="createFull()">Full</button>
        </tr>
    </td><tr><button onclick="changePage()">Edit Availibility</button><button onclick="window.location.href='MESS_proposed.html'">Request Proposed Schedule</button></tr>
</table>
<table id="course" class="last">
    <tr class="head"> Course Schedule</tr>
    <tr class="th">
        <td>#</td>
        <td>Course</td>
        <td>Section</td>
        <td>Teacher</td>
        <td>Start</td>
        <td>End</td>
        <td>Days</td>
    </tr>
        
    </tr>
    <script>
        for(i=0;i<5;i++){
            document.write("<tr><td>Math</td><td>101</td><td>1</td><td>Dinkleburg</td><td>9:00am</td><td>10:15pm</td><td>TR</td></tr>")
            }
    </script>
</table><!--end of full table-->
<div>
    <image>
        <img src="Images/Copyright.jpg" alt="Copyright" class="footer" width:100%>
    </image>
</div>
</body>
</html>