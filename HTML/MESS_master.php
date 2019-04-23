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

<p></p>
<table>
    <td>
        <tr>
            View: <button onclick="createMon('M')">Mon</button> | <button onclick="createTues('T')">Tues</button> | <button onclick="createMon('W')">Weds</button> | <button onclick="createTues('R')">Thurs</button> | <button onclick="createMon('W')">Fri</button> | <button onclick="createFull()">Full</button>
        </tr>
    </td><tr><button onclick="changePage()">Edit Availibility</button><button onclick="window.location.href='MESS_proposed.html'">Request Proposed Schedule</button></tr>
</table>

<?php
    DEFINE ('DB_USER', 'MESS');
    DEFINE ('DB_PASD', 'mess');
    DEFINE ('DB_HOST', 'csums.dhcp.bsu.edu');
    DEFINE ('DB_NAME', 'mess');
    $link = mysqli_connect(DB_HOST, DB_USER, DB_PASD, DB_NAME);
    if (!$link) {
        die('error connecting to database');
    }


    $sql = "SELECT * FROM Courses";

    $result = $link->query($sql) or die("error getting course data");


    echo "<table style='width:70%'>";
    echo "<tr>
    <th>Course</th>
    <th>Section</th>
    <th>Instructor</th>
    <th>Days</th>
    <th>Start Time</th>
    <th>End Time</th>
    <th>#SAs</th>";

    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
        echo "<tr><td>";
        echo $row['Course'];
        echo "</td><td>";
        echo $row['Section'];
        echo "</td><td>";
        echo $row['Instructor'];
        echo "</td><td>";
        echo $row['Days'];
        echo "</td><td>";
        echo $row['Start'];
        echo "</td><td>";
            echo $row['End'];
        echo "</td><td>";
        echo $row['SAs'];
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