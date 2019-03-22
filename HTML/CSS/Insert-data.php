<?php

if (isset($_POST['submitted'])) {

    include('connect-mysql.php');

    $username = $_POST['usename'];
    $password = $_POST['password'];
    $sqlinsert = "INSERT INTO accounts (username, password) VALUES ('$username', '$password')";

    if(!mysqli_query(#dbcon, $sqlinsert)) {
        die('error inserting new record');
    }

    $newrecord = "New record added to the database";
}


?>

<html>
<head>
<title>Insert Data into DB</title>
</head>
<body>
    <h1>Insert Data into DB</h1>

    <form method="post" action="insert-data.php">
    <input type="hidden" name="submitted" value = "true" />
    <fieldset>
        <legend>New People</legend>
        <input type="text" name="username" />Username</label>
        <input type="text" name="password" />Password</label>
    </fieldset>
    <br />
    <input type="submit" value="add new person" />  
    </form>
<?php
    echo "$newrecord"
?>

</body>
</html>
