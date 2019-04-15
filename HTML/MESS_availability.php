<!DOCTYPE html>
<html lang="em">
<head>
    <meta charset="utf-8">
    <title>Availability Sheet - MESS</title>
    <meta name= "viewport" content="width=device-width">
    <link rel="stylesheet" href="CSS/SA_AvailSheet.css"/>
    <script src="../JavaScript/Availibility_functions.js"></script>
    <script src="../Data/data.js"></script>
</head>
<body>
    <div class="sidebar">
        <img class="logo" src="images/MESS Logo.jpg">
        <a href="MESS_availability.php">My Availability</a><br>
        <a href="MESS_personal.html">My Schedule</a><br>
        <a href="logout.php">Logout</a>
    </div>
    
    <h1>Assistant Availability</h1>
    <h2> Term: [Insert Term]</h2>
    <h2> Hello
        <?php
        include "session.php";
        $query = "SELECT fname FROM users WHERE username = '$user_check'";
        $result = $link->query($query) or die('error getting name');
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        echo $user_check;
        mysqli_close($link);
        ?>
    !</h2>

    <div class = "intro">
        <p>---INSTRUCTIONS----</p>
        <p>Click on the shift that you can work on the day week to cycle through the options of availability.</p>
        <p>When done filling out the tables and satisfied, click Submit.</p>
        <p>UNIVERSITY POLICY: Student Employees cannot work over 20 hours a week.</p>
        <p>Note: Student Assistants are mostly needed on M - W - F</p>
        <p>Please select what your Assistant Status is for this semester.<br>
        Rookie - Newly hired assistant<br>
        Veteran - Returning assistant from previous semtester
    </div>
    <table class = 'class'>
        <tr>
            <td>
                <table  class="hours">
                    <tr>
                        <td> </td>
                        <td class="size"> Minimum</td>
                        <td> </td>
                        <td class="size"> Maximum</td>
                    </tr>
                    <tr>
                        <td class="question">Hours willing to work:</td>
                        <td><input type="number" id="min" min="0" max="20" value="0" step="1" onkeydown="return false" /></td>
                        <td class="to">to</td>
                        <td><input type="number" id="max" min="0" max="20" value="0" step="1" onkeydown="return false" /></td>
                        <td>  
                    </tr>
                </table>
            </td>
            <td>
                <div class="status"> 
                    Please indicate your Assistant Status
                    <select name="status" id="vet1"> 
                        <option value = "rookie">Rookie</option>
                        <option value = "veteran">Veteran</option>
                    </select>
                </div>
            </td>
            <td>
                <table class="legend">
                    <tr>
                        <td class="preferred">Preferred</td>
                        <td class="dash"> - </td>
                        <td class="text"> Shift that you prefer to work</td>
                    </tr>
                    <tr>
                        <td class="available">Available</td>
                        <td class="dash"> - </td>
                        <td class="text"> Shift that you could work</td>
                    </tr>
                    <tr>
                        <td class="busy">Busy</td>
                        <td class="dash"> - </td>
                        <td class="text"> Shift tha you cannot work</td>
                    </tr>
                </table>
            </td>
            <td><button class = "button " action = "onbuttonpress">Submit Semester Availability</td>
        </tr>
    </table>
        
        
    <table class = "chart">
        <tr>
            <td>
                <table class="MWFtable">
                    <tr>
                        <td class = "test">Times</td>
                        <td class = "test">Monday(M)</td>
                        <td class = "test">Wednesday(W)</td>
                        <td class = "test">Friday(F)</td>
                    </tr>
                    <tr>
                        <td class = "test">8:00-8:50</td>
                        <td class="box red" id="M0800">red</td>
                        <td class="box red" id="W0800">red</td>
                        <td class="box red" id="F0800">red</td>
                    </tr>
                    <tr>
                        <td class = "test">9:00-9:50</td>
                        <td class="box red" id="M0900">red</td>
                        <td class="box red" id="W0900">red</td>
                        <td class="box red" id="F0900">red</td>
                    </tr>
                    <tr>
                        <td class = "test"> 10:00-10:50</td>
                        <td class="box red" id="M1000">red</td>
                        <td class="box red" id="W1000">red</td>
                        <td class="box red" id="F1000">red</td>
                    </tr>
                    <tr>
                        <td class = "test">11:00-11:50</td>
                        <td class="box red" id="M1100">red</td>
                        <td class="box red" id="W1100">red</td>
                        <td class="box red" id="F1100">red</td>
                    </tr>
                    <tr>
                        <td class = "test">12:00-12:50</td>
                        <td class="box red" id="M1200">red</td>
                        <td class="box red" id="W1200">red</td>
                        <td class="box red" id="F1200">red</td>
                    </tr>
                    <tr>
                        <td class = "test">1:00-1:50</td>
                        <td class="box red" id="M0100">red</td>
                        <td class="box red" id="W0100">red</td>
                        <td class="box red" id="F0100">red</td>
                    </tr>
                    <tr>
                        <td class = "test">2:00-2:50</td>
                        <td class="box red" id="M0200">red</td>
                        <td class="box red" id="W0200">red</td>
                        <td class="box red" id="F0200">red</td>
                    </tr>
                    <tr>
                        <td class = "test">3:00-3:50</td>
                        <td class="box red" id="M0300">red</td>
                        <td class="box red" id="W0300">red</td>
                        <td class="box red" id="F0300">red</td>
                    </tr>
                    <tr>
                        <td class = "test">4:00-4:50</td>
                        <td class="box red" id="M0400">red</td>
                        <td class="box red" id="W0400">red</td>
                        <td class="box red" id="F0400">red</td>
                    </tr>
                    <tr>
                        <td class = "test">5:00-6:15</td>
                        <td class="box red" id="M0500">red</td>
                        <td class="box red" id="W0500">red</td>
                        <td class="box red" id="F0500">red</td>
                    </tr>
                </table>
            <td>
            <td>
                <table class="TRtable">
                    <tr>
                        <td class = "test">Times</td>
                        <td class = "test">Tuesday(T)</td>
                        <td class = "test">Thursday(R)</td>
                    </tr>
                    <tr>
                        <td class = "test">8:00-9:15</td>
                        <td class="box red" id="M0500">red</td>
                        <td class="box red" id="W0500">red</td>
                    </tr>
                    <tr>
                        <td class = "test">9:30-10:45</td>
                        <td class="box red" id="M0500">red</td>
                        <td class="box red" id="W0500">red</td>
                    </tr>
                    <tr>
                        <td class = "test">11:00-12:15</td>
                        <td class="box red" id="M0500">red</td>
                        <td class="box red" id="W0500">red</td>
                    </tr>
                    <tr>
                        <td class = "test">12:30-1:45</td>
                        <td class="box red" id="M0500">red</td>
                        <td class="box red" id="W0500">red</td>
                    </tr>
                    <tr>
                        <td class = "test">2:00-3:15</td>
                        <td class="box red" id="M0500">red</td>
                        <td class="box red" id="W0500">red</td>
                    </tr>
                    <tr>
                        <td class = "test">3:30-4:45</td>
                        <td class="box red" id="M0500">red</td>
                        <td class="box red" id="W0500">red</td>
                    </tr>
                    <tr>
                        <td class = "test"> 5:00-6:15</td>
                        <td class="box red" id="M0500">red</td>
                        <td class="box red" id="W0500">red</td>
                    </tr>
                </table>  
            </td>
        </tr>
    </table>

    

    <div hidden id="JSgreen" name="PHPgreen" class="JS"></div>
    <div hidden id="JSyellow" name="PHPyellow" class="JS" ></div>
</body>
<script>
    changePage();
</script>
</form>
<div>
    <image>
        <img src="Images/Copyright.jpg" alt="Copyright" class="footer" width:100%>
    </image>
</div>
</html>