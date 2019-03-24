<?php

include('connect.php');

$username = $_POST['username'];
$password = $_POST['password'];
$sqlinsert = "INSERT INTO accounts (username, password) VALUES ('$username', '$password')";

if(!mysqli_query(#dbcon, $sqlinsert)) {
    die('error inserting new record');
}

$newrecord = "New record added to the database";
?>

<html>
<head>
<title>Insert Data into DB</title>
</head>
<body>
    <h1>Insert Data into DB</h1>

    <form method="post" action="Insert-data.php">
    <fieldset>
        <legend>New People</legend>
        <label>Username: <input type="text" name="username" /></label>
        <label>Password: <input type="text" name="password" /></label>
    </fieldset>
    <br />
    <input type="submit" value="add new person" />  
    </form>
<?php
    echo "$newrecord"
?>

</body>
</html>
