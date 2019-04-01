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
    <div class="details">
        <label>Username:</label>
        <input type="text" name="username" class="textbox" placeholder="Enter Username"/><br><br>
    </div>
    <div class="details">
        <label>Password:</label>
        <input type="password" id="myInput" class="textbox" size="20" placeholder="Enter Password"/><br>
        <input type="checkbox" class ="passbutton" onclick="myFunction()">
        <label class="passlabel">show password</label><br>
        <button>Login</button>
    </div>
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