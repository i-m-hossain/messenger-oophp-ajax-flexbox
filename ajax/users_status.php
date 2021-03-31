<?php

include "../init.php";
$obj = new base_class();

$session_user_id = $_SESSION['user_id'];
$query = "SELECT * FROM users_activities";
if($obj->Normal_Query($query)){

    $rows = $obj->fetch_all();

    foreach($rows as $row):
        
        $user_id        =   $row->user_id;
        $login_time     =   $row->login_time;
        $current_time   =   time();
        $time_diff      =   $current_time-$login_time;
        $status         =   0;

        if($session_user_id == $user_id){
            if($time_diff >1800){

                $query = "UPDATE users SET status = ? WHERE id = ?";
                $obj->Normal_Query($query, [$status, $user_id]);
                unset($_SESSION['user_id']);
                echo json_encode(["status" => "href"]);
            }
        }else{
            if($time_diff>1800){
                $status_again = 1;
                $query = "UPDATE users SET status = ? WHERE id = ? AND status = ?"; 
                $obj->Normal_Query($query, [$status, $user_id, $status_again ]);

            }
            
        }

    endforeach;

}