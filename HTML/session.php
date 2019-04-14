<?php
include('connect.php');
session_start();

$user_check = $_SESSION['login_user'];

$ses_sql = mysqli_query($link,"select username from admin where username = '$user_check' ");

$result = $link->query($query) or die('error getting name');

$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

$login_session = $row['username'];

if(!isset($_SESSION['login_user'])){
    header("location:MESS_login.php");
    die();
}
