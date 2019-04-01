<!DOCTYPE html>
<html lang="em">
<head>
    <meta charset="utf-8">
    <title>Student Assistant List - MESS</title>
    <link rel="stylesheet" href="CSS/EditListOfStudents.css" />
</head>
<body>
<div class="sidebar">
    <img src="Images/MESS Logo.jpg"/>
    <a href="MESS_finalized.html">Semester Schedule</a><br>
    <a href="MESS_master.html">Master Schedule</a><br>
    <a href="MESS_assistants.html">Student Assistants</a><br>
    <a href="MESS_courses.html">Start New Semester</a>
    <a href="MESS_login.html">Logout</a>
</div>
<h1 class="header">Edit Student Assistants</h1>
<table style="width:97%">
    <tr>
        <th><h2 class="topL">Term: Fall 2019</h2></th>
        <th><h2 class="topR">Cordinator Name: Holly Dicken</h2></th>
    </tr>
</table>



<?php

DEFINE ('DB_USER', 'MESS');
DEFINE ('DB_PASD', 'mess');
DEFINE ('DB_HOST', 'csums.dhcp.bsu.edu');
DEFINE ('DB_NAME', 'mess_test');
$link = mysqli_connect(DB_HOST, DB_USER, DB_PASD, DB_NAME);
if (!$link) {
    die('error connecting to database');
}
echo 'connection established <br>';

$sql = "SELECT * FROM users";

$result = $link->query($sql) or die("error getting data");

echo "<table style='width:95%' class='Ltable'>";
echo "<tr><th>Student Name</th><th>Username</th><th>Password</th>";


while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    echo "<tr><td>";
    echo $row['name'];
    echo "</td><td>";
    echo $row['username'];
    echo "</td><td>";
    echo $row['password'];
    echo "</td>";
    echo "<td><button onclick='okToDelete()'>Remove</button></td></tr>";};
echo "</table>";


mysqli_close($link);
?>
<div class="newassistant">
    <form method="post" action="new_assistant.php">
        <h3>Add New Assistant</h3>
        <p>To add a new assistant to the list, you need to create a username and password for the assistant to login with.</p>
        New Assistant Name: <input type="text" name="name">
        <br>
        Create Username: <input type="text" name="username"><br>
        Create Password: <input type="password" name="password"><br>
        <input type="submit" value="Add Assistant">
    </form>
</div>
<div class="footer">
    <img src="Images/Copyright.jpg" class="footer" alt="Copyright"; width='100%';/>
</div>
<script>
    function okToDelete() {
    var txt;
    if (confirm("Are you sure you would like to remove this assistant?")) {



    } else {
        txt = "You pressed Cancel!";
    }
    document.getElementById("demo").innerHTML = txt;
    }
</script>


</body>

</html>