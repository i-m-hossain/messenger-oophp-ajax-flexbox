<?php
require "../init.php";

$obj = new base_class();

if (isset($_FILES['send_file']['name'])) {

    

    $file_name = $_FILES['send_file']['name'] ;
    $tmp_name  = $_FILES['send_file']['tmp_name'];
    $store_files = "../assets/chat-uploads/";
    $extensions = array("jpeg", "jpg", "png", "pdf", "JPG", "zip", "docx", "xlsx");
    $get_file_extension = explode(".", $file_name);
    $get_extension = end($get_file_extension);

    if(!in_array($get_extension, $extensions)){

        echo json_encode(['status' => 'error']);
    }else{

        move_uploaded_file($tmp_name, "$store_files/$file_name");

        $message  = $file_name;
        $user_id  = $_SESSION['user_id'];
        $msg_type = $get_extension;

        $query = "INSERT  INTO messages (message, msg_type, user_id) VALUES (?,?,?)";

        if ($obj->Normal_Query($query, [$message, $msg_type, $user_id])) {

            echo json_encode(['status' => 'success']);
        }

    }
}

?>
