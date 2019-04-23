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
    <a href="MESS_finalized.php">Semester Schedule</a><br>
    <a href="MESS_master.php">Master Schedule</a><br>
    <a href="MESS_assistants.php">Student Assistants</a><br>
    <a href="MESS_courses.php">Start New Semester</a>
    <a href="logout.php">Logout</a>
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
DEFINE ('DB_NAME', 'mess');
$link = mysqli_connect(DB_HOST, DB_USER, DB_PASD, DB_NAME);
if (!$link) {
    die('error connecting to database');
}
echo 'connection established <br>';

$sql = "SELECT username, password, fname, vetStatus FROM users";



$result = $link->query($sql) or die("error getting Login info");

echo "<table style='width:95%' class='Ltable'>";
echo "<tr><th>Assistant Name</th><th>Assistant Status</th><th>Username</th><th>Password</th>";


while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    echo "<tr><td>";
    echo $row['fname'];
    echo "</td><td>";
    echo $row['vetStatus'];
    echo "</td><td>";
    echo $row['username'];
    echo "</td><td>";
    echo $row['password'];
    echo "</td></tr>";
    };
echo "</table>";

mysqli_close($link);
?>
<table class = "input">
    <tr >
        <td class="newassistant">
            <form method="post" action="new_assistant.php">
                <h3>Add New Assistant</h3>
                <p>To add a new assistant to the list, you need to create a username and password for the assistant to login with.</p>
                New Assistant Name: <input type="text" name="fname"><br>
                Create Username: <input type="text" name="username"><br>
                Create Password: <input type="text" name="password"><br>
                <br>Veteren Status: <select name = "Status"> 
                    <option value = "rookie">Rookie</option>
                    <option value = "veteran">Veteran</option>
                </select>
                <input type="submit" value="Add Assistant">
            </form>
        </td>
            
        <td class="editassistant">
            <form method="post" action = "edit_assistant.php" >
                <h3>Edit Assistant</h3>
                <p>To edit an existing assistant's veteran status or password, select their name in the drodown box. Select their new veteran status and new password the Click Submit Changes to update their info. </p>
                
                <?php
                
                $link = mysqli_connect(DB_HOST, DB_USER, DB_PASD, DB_NAME);
                if (!$link) {
                    die('error connecting to database');
                }
                $sql = "SELECT fname FROM users;";
                $result = $link->query($sql) or die("error getting data");
                echo "Select Assistant: <select name='fname'>";
                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    echo "<option value='" . $row['fname'] ."'>" . $row['fname'] ."</option>";
                }
                echo "</select>";
                mysqli_close($link);
                ?>

                <br>Veteren Status: <select name="Status"> 
                    <option value = "rookie">Rookie</option>
                    <option value = "veteran">Veteran</option>
                </select>
                <br>Change Password: <input type="text" name="password">
                <input type="submit" value="Submit Changes">
            </form>
        </td>
        <td class = "removeassistant">
            <form method = "post" action = 'remove_assistant.php'>
            <h3>Remove Assistant</h3>
                <p>To remove an existing assistant, select their name from the dropdown box and click remove. Removing an assistant will delete all of their data from MESS. </p>
                <?php
                
                $link = mysqli_connect(DB_HOST, DB_USER, DB_PASD, DB_NAME);
                if (!$link) {
                    die('error connecting to database');
                }
                $sql = "SELECT fname FROM users;";
                $result = $link->query($sql) or die("error getting data");
                echo "<select name='fname'>";
                
                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    echo "<option value='" . $row['fname'] ."'>" . $row['fname'] ."</option>";
                }
                echo "</select>";
                mysqli_close($link);
                ?>
                <br><input type="submit" value = "Remove Assistant">

            </form>
    </tr> 
</table>
<div class="footer">
    <img src="Images/Copyright.jpg" class="footer" alt="Copyright"; width='100%';/>
</div>
<script>
    function okToDelete() {
    var txt;
    if (confirm("Are you sure you would like to remove this assistant?")) {
        <?php
            if ($SERVER["REQUEST_METHOD"] === "POST") {

                if (isset($_POST['delete'])) {
                    
                }
            }
        ?>
    } else {
        txt = "";
    }
    document.getElementById("demo").innerHTML = txt;
    }
</script>


</body>

</html>