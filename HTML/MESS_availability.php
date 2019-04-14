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

<div class="Instructions">
    <p>Click on the shift that you can work on the day week to cycle through
        the options of availability.
    </p>

    <p>When done filling out the tables and satisfied, click Submit.</p>

    <p>UNIVERSITY POLICY: Student Employees cannot work over 20 hours a week.</p>

    <p>Note: Student Assistants are mostly needed on M - W - F</p>
</div>
<h1>Assistant Availability</h1>
<form>
    <table style="width:100%">
        <tr>
            <table style="width:50%">
                <tr>
                    <td class="name"><h2>Student Assistant: 
                    <?php
                    include "session.php";
                    DEFINE ('DB_USER', 'MESS');
                    DEFINE ('DB_PASD', 'mess');
                    DEFINE ('DB_HOST', 'csums.dhcp.bsu.edu');
                    DEFINE ('DB_NAME', 'mess');
                    $link = mysqli_connect(DB_HOST, DB_USER, DB_PASD, DB_NAME);
                    
                    
                    $query = "SELECT fname FROM users WHERE username = '$user_check'";
                    
                    $result = $link->query($query) or die('error getting name');
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                        
                    echo $user_check;
                    
                    
                    mysqli_close($link);

                    
                    
                    ?></h2></td>

                    

                    <td class="name"><button type="button" style="width:75px; height:35px;" onclick="compileInfo(document.getElementById('min').value,document.getElementById('min').value,document.getElementById('vet1'),document.getElementById('vet2'))">Submit</button></td>
                </tr>

            </table>
        </tr>
        <tr>
            <table style="width:0%" class="hours">
                <tr>
                    <td> </td>
                    <td class="size"> Minimum</td>
                    <td> </td>
                    <td class="size"> Maximum</td>
                </tr>
                <tr class="hours">
                    <td class="question">Hours willing to Work:</td>
                    <td ><input type="number" id="min" min="0" max="20" value="0" step="1" onkeydown="return false" /></td>
                    <td class="to">to</td>
                    <td ><input type="number" id="max" min="0" max="20" value="0" step="1" onkeydown="return false" /></td>
                </tr>
            </table>
        </tr>
        <tr>
            <table style="width:30%" class="returning">
                <tr class="returning">
                    <td class="question">Are you a returning Assistant?</td>
                    <td colspan="2" class="answer">Yes</td>
                    <td class="box"><input type="checkbox" id="vet1"></td>
                    <td class="space"></td>
                    <td class="answer">No</td>
                    <td class="box"><input type="checkbox" id="vet2"></td>
                </tr>
            </table>
        </tr>
    </table>

    <table class="table MWFtable">
        <tr>
            <td>Times</td>
            <td>Monday(M)</td>
            <td>Wednesday(W)</td>
            <td>Friday(F)</td>
        </tr>
        <tr>
            <td>8:00-8:50</td>
            <td class="box red" id="M0800">red</td>
            <td class="box red" id="W0800">red</td>
            <td class="box red" id="F0800">red</td>
        </tr>
        <tr>
            <td>9:00-9:50</td>
            <td class="box red" id="M0900">red</td>
            <td class="box red" id="W0900">red</td>
            <td class="box red" id="F0900">red</td>
        </tr>
        <tr>
            <td>10:00-10:50</td>
            <td class="box red" id="M1000">red</td>
            <td class="box red" id="W1000">red</td>
            <td class="box red" id="F1000">red</td>
        </tr>
        <tr>
            <td>11:00-11:50</td>
            <td class="box red" id="M1100">red</td>
            <td class="box red" id="W1100">red</td>
            <td class="box red" id="F1100">red</td>
        </tr>
        <tr>
            <td>12:00-12:50</td>
            <td class="box red" id="M1200">red</td>
            <td class="box red" id="W1200">red</td>
            <td class="box red" id="F1200">red</td>
        </tr>
        <tr>
            <td>1:00-1:50</td>
            <td class="box red" id="M0100">red</td>
            <td class="box red" id="W0100">red</td>
            <td class="box red" id="F0100">red</td>
        </tr>
        <tr>
            <td>2:00-2:50</td>
            <td class="box red" id="M0200">red</td>
            <td class="box red" id="W0200">red</td>
            <td class="box red" id="F0200">red</td>
        </tr>
        <tr>
            <td>3:00-3:50</td>
            <td class="box red" id="M0300">red</td>
            <td class="box red" id="W0300">red</td>
            <td class="box red" id="F0300">red</td>
        </tr>
        <tr>
            <td>4:00-4:50</td>
            <td class="box red" id="M0400">red</td>
            <td class="box red" id="W0400">red</td>
            <td class="box red" id="F0400">red</td>
        </tr>
        <tr>
            <td>5:00-6:15</td>
            <td class="box red" id="M0500">red</td>
            <td class="box red" id="W0500">red</td>
            <td class="box red" id="F0500">red</td>
        </tr>

    </table>

    <table class="table TRtable">
        <tr>
            <td>Times</td>
            <td>Tuesday(T)</td>
            <td>Thursday(R)</td>
        </tr>
        <tr>
            <td>8:00-9:15</td>
            <td class="box red" id="M0500">red</td>
            <td class="box red" id="W0500">red</td>
        </tr>
        <tr>
            <td>9:30-10:45</td>
            <td class="box red" id="M0500">red</td>
            <td class="box red" id="W0500">red</td>
        </tr>
        <tr>
            <td>11:00-12:15</td>
            <td class="box red" id="M0500">red</td>
            <td class="box red" id="W0500">red</td>
        </tr>
        <tr>
            <td>12:30-1:45</td>
            <td class="box red" id="M0500">red</td>
            <td class="box red" id="W0500">red</td>
        </tr>
        <tr>
            <td>2:00-3:15</td>
            <td class="box red" id="M0500">red</td>
            <td class="box red" id="W0500">red</td>
        </tr>
        <tr>
            <td>3:30-4:45</td>
            <td class="box red" id="M0500">red</td>
            <td class="box red" id="W0500">red</td>
        </tr>
        <tr>
            <td>5:00-6:15</td>
            <td class="box red" id="M0500">red</td>
            <td class="box red" id="W0500">red</td>
        </tr>

    </table>

    <table style="width:90%" class="legend">
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
        </td>
    </table>
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