<?php
include ("connect.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $myusername = mysqli_real_escape_string($link,$_POST['username']);
    $mypassword = mysqli_real_escape_string($link,$_POST['password']);

    $sql = "SELECT id FROM users WHERE username = '$myusername' and password = '$mypassword'";
    $result = mysqli_query($link,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $active = $row['active'];

    $count = mysqli_num_rows($result);

    if($count == 1) {

        $_SESSION['login_user'] = $myusername;

        header("Location: MESS_availability.php");
    }else {
        $error = "Your Login Name or Password is invalid";
    }
}
?>

<!DOCTYPE html>
<html lang="em">
<head>
    <meta charset="utf-8">
    <title>Math Emporium Student Scheduler</title>
    <link rel="stylesheet" href="CSS/Login Page.css" />
</head>
<body>
<header>
    <figure>
        <img src="Images/MESS Login Logo.jpg" class="logo" alt="Mess Logo"/>
    </figure>
    <form action="MESS_login.php" method="post">
        <div class="details">
            <label>Username:</label>
            <input type="text" name="username" class="textbox" placeholder="Enter Username"/><br><br>
            <label>Password:</label>
            <input type="password" name="password" id="myInput" class="textbox" size="20" placeholder="Enter Password"/><br>
            <input type="checkbox" class ="passbutton" onclick="myFunction()">
            <label class="passlabel">show password</label><br>
            <input type="submit" value="login">
        </div>
    </form>
</header>
<script>
  function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
</script>      
</body>
  <div>
    <image>
      <img src="Images/Copyright.jpg" class="footer" alt="Copyright" size="20">
    </image>
  </div>
</html>