<?php
    require "../init.php";

    $obj = new base_class();

    if(isset($_POST['send_message'])){

        $message = $obj->security($_POST['send_message']);
        $user_id = $_SESSION['user_id'];
        $msg_type = "text";

        $query = "INSERT  INTO messages (message, msg_type, user_id) VALUES (?,?,?)";
        
        if($obj->Normal_Query($query, [$message, $msg_type, $user_id])){

            echo json_encode(['status' => 'success']);
        }
    }
