<?php
include('connect.php');
session_start();

$user_check = $_SESSION['login_user'];

$ses_sql = mysqli_query($link,"SELECT username FROM users WHERE username = '$user_check' ");
//$query = "select username from admin where username = '$user_check' ";
//$ses_sql = $link->query($query) or die('main error');
$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

$login_session = $row['username'];

if(!isset($_SESSION['login_user'])){
   // header("location:MESS_login.php");
    die();
}
