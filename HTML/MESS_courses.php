<!DOCTYPE html>
<html lang="em">
<head>
    <meta charset="utf-8">
    <title>Start New Semester - MESS</title>
    <link rel="stylesheet" href="CSS/SA_AvailSheet.css" />
    <script type="text/javascript" src="../Data/Functions.js"></script>
</head>
<body>
    <div class="sidebar">
        <img src="Images/MESS Logo.jpg"/>
        <a href="MESS_finalized.html">Semester Schedule</a><br>
        <a href="MESS_master.php">Master Schedule</a><br>
        <a href="MESS_assistants.php">Student Assistants</a><br>
        <a href="MESS_courses.html">Start New Semester</a>        
        <a href="logout.php">Logout</a>
    </div>
    <h1 class="header">Add New Semester</h1>
    <table style="width:100%">
        <tr>
            <td>Current term: [term of finalized schedule] </td>
            <td>Coordinator: [Coordinator name]</td>
        </tr>
       
        <tr>
            <table style="width:30%" class="returning">
                <tr class="returning">
                    <td class="question">What term are you planning for?</td>
                    <td colspan="2" class="answer">Fall</td>
                    <td class="box"><input type="checkbox"></td>
                    <td class="space"></td>
                    <td class="answer">Spring</td>
                    <td class="box"><input type="checkbox"></td>
                </tr>
            </table>
        </tr>
    </table>
    <table style="width:100%">
        <td>
            <form method = "post" action= "new_course.php">
                <form method = "post" action="delete_course.php">
            <table style="width:60%" >
                <tr>
                    <th>Course</th>
                    <th>Section</th>
                    <th>Instructor</th>
                    <th>Days</th>
                    <th>Start</th>
                    <th>End</th>
                    <th># SAs</th>
                </tr>
                <tr>
                    <td><select id = "course" name = "Course">
                        <option value = "MATH 108">MATH 108</option>
                        <option value = "MATH 111">MATH 111</option>
                        <option value = "MATH 112">MATH 112</option>
                        <option value = "Other">Other</option>
                      </select></td> 
                    <td><p>
                        <input name="Section" type = "number" min="1" max="30" value="1" step="1" onkeydown="return false"
                               id = "section"
                               value = "Section" />
                      </p></td>
                    <td><p>
                        <input type = "text" id = "instructor" name="Instructor" value = "Instructor" />
                      </p></td>
                    <td><select id = "days" name="Days">
                        <option value = "MWF">MWF</option>
                        <option value = "TR">TR</option>
                        <option value = "MW">MW</option>
                      </select></td>  
                    <td><select id = "start" name="Start">
                            <option value = "0800">8:00am</option>
                            <option value = "0900">9:00am</option>
                            <option value = "1000">10:00am</option>
                            <option value = "1100">11:00am</option>
                            <option value = "1200">12:00pm</option>
                            <option value = "1300">1:00pm</option>
                            <option value = "1400">2:00pm</option>
                            <option value = "1500">3:00pm</option>
                            <option value = "1600">4:00pm</option>
                            <option value = "1700">5:00pm</option>
                          </select></td>  
                    <td><select id = "start" name="End">
                            <option value = "0850">8:50am</option>
                            <option value = "0950">9:50am</option>
                            <option value = "1050">10:50am</option>
                            <option value = "1150">11:50am</option>
                            <option value = "1250">12:50pm</option>
                            <option value = "1350">1:50pm</option>
                            <option value = "1450">2:50pm</option>
                            <option value = "1550">3:50pm</option>
                            <option value = "0450">4:50pm</option>
                            <option value = "0550">5:50pm</option>
                          </select></td>  
                    <td><p>
                        <input name="SA" type = "number" min="1" max="5" value="3" step="1" 
                               id = "numsa"
                               value = "#SAs" />
                      </p></td>
                </tr>
                <tr>
                    <td>
                    <input type = "submit"value="Add Class"></form>
                    </td>
                <tr>
            </table>
            <table>
                <tr>
                    <td>
                        <form method = post action = remove_course.php>
                        <?php
                        DEFINE ('DB_USER', 'MESS');
                        DEFINE ('DB_PASD', 'mess');
                        DEFINE ('DB_HOST', 'csums.dhcp.bsu.edu');
                        DEFINE ('DB_NAME', 'mess');
                        $link = mysqli_connect(DB_HOST, DB_USER, DB_PASD, DB_NAME);
                        if (!$link) {
                            die('error connecting to database');
                        }
                        $sql = "SELECT ID FROM courses;";
                        $result = $link->query($sql) or die("error getting data");
                        echo "<br>Select Course ID to remove: <select id = cid name ='cid'>";
                        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                            echo "<option value='" . $row[ID] ."'>" . $row[ID] ."</option>";
                        }
                        echo "</select>";
                        mysqli_close($link);
                        ?>
                        <br><input type = "submit"value="Delete Class">
                        
                    <td>
                </tr>
            
            </table>
        </td>
    </table>
    <table>
        </td><tr>
        </tr></td>
    </table>


    <?php
$link = mysqli_connect(DB_HOST, DB_USER, DB_PASD, DB_NAME);
if (!$link) {
    die('error connecting to database');
}

$sql = "SELECT * FROM Courses";

$result = $link->query($sql) or die("error getting course data");


echo "<table style='width:90%'>";
echo "<tr>
<th>ID</th>
<th>Course</th>
<th>Section</th>
<th>Instructor</th>
<th>Days</th>
<th>Start Time</th>
<th>End Time</th>
<th>#SAs</th>";

while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    echo "<tr><td class = 'entry'>";
    echo $row['ID'];
    echo "</td><td class = 'entry'>";
    echo $row['Course'];
    echo "</td><td class = 'entry'>";
    echo $row['Section'];
    echo "</td><td class = 'entry'>";
    echo $row['Instructor'];
    echo "</td><td class = 'entry'>";
    echo $row['Days'];
    echo "</td><td class = 'entry'>";
    echo $row['Start'];
    echo "</td><td class = 'entry'>";
    echo $row['End'];
    echo "</td><td class = 'entry'>";
    echo $row['SAs'];
    echo "</td></tr>";
    };
echo "</table>";
mysqli_close($link);
?>

    <div>
        <image>
            <img src="Images/Copyright.jpg" alt="Copyright" class="footer" width:100%>
        </image>
    </div>
</body>
   
</html>