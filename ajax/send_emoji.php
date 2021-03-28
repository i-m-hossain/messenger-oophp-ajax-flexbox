<?php

include "../init.php";
$obj = new base_class();

if(isset($_POST['send_emoji'])){
    
    $message    = $_POST['send_emoji'];
    $msg_type   = "emoji";
    $user_id    = $_SESSION['user_id'];

    $query = "INSERT  INTO messages (message, msg_type, user_id) VALUES (?,?,?)";

    if ($obj->Normal_Query($query, [$message, $msg_type, $user_id])) {

        echo json_encode(['status' => 'success']);
    }


}