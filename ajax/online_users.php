<?php

include "../init.php";
$obj = new base_class();
$status = 1;

$query = "SELECT id FROM users WHERE status = ?";
if($obj->Normal_Query($query, [$status])){
    $online_users = $obj->Count_Rows();

    echo json_encode(["users" => $online_users]);
};