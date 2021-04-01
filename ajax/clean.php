<?php
include "../init.php";

$user_id = $_SESSION['user_id'];
$obj = new base_class();

if(isset($_POST['clean'])){

    $query = "SELECT msg_id FROM messages ORDER BY msg_id DESC LIMIT 1";
    if($obj->Normal_Query($query)){
        $last_row = $obj->single_result();
        $last_msg_id = $last_row->msg_id +1;

        $query = "UPDATE clean SET clean_message_id= ? WHERE clean_user_id = ?";
        if($obj->Normal_Query($query, [$last_msg_id, $user_id ])){
            echo json_encode(["status" => "clean"]);
        }
    }
}    
