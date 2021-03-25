<?php 

    if (!isset($_SESSION['user_id'])) {

        $obj = new base_class();
        $obj->create_session("security", "Sorry, You first need to login"); //creating a session to display error flash message for unauthorized login
        header("location:login.php");
    }
?>    