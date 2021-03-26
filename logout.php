<?php

include "init.php";
$obj = new base_class();

//updating user status to 0 when user logout  

$status = 0;
$user_id = $_SESSION['user_id'];
$query = "UPDATE users SET status=? WHERE id=?";
$obj->Normal_Query($query, [$status, $user_id]);


session_destroy();
header("location:login.php");