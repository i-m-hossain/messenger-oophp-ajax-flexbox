<?php

include "../init.php";
$obj = new base_class();

if(isset($_GET['message'])){
   
    $user_id = $_SESSION['user_id'];
    $query   = "SELECT clean_message_id FROM clean WHERE clean_user_id = ?";
    if($obj->Normal_Query($query, [$user_id])){ //fetching the corresponding clean_message_id of currently logged in user
        
        $row            = $obj->single_result();
        $last_msg_id    = $row->clean_message_id; //fetched from clean table

        

        //fetching the latest msg_id from messages table
        $query          = "SELECT msg_id FROM messages ORDER BY msg_id DESC LIMIT 1";
        $obj->Normal_Query($query);
        $row            =$obj->single_result();
        $msg_table_last_id   =  $row->msg_id; // fetched from messages table

       

        //fetching data between clean tables last_msg_id and message tables $msg_table_last_id by inner joining messages and users
        $query = "SELECT * FROM messages INNER JOIN users ON messages.user_id = users.id 
                    WHERE messages.msg_id BETWEEN $last_msg_id  AND  $msg_table_last_id 
                    ORDER BY messages.msg_id ASC";
        
        $obj->Normal_Query($query);
        if($obj->Count_Rows() == 0){
            echo "lets start conversaton to your friends";
        }else{
            $rows = $obj->fetch_all();
            foreach ($rows as $row) :
                 $full_name = ucwords($row->name);
                 $user_image = $row->image;
                 $user_status= $row->status;
                 $message = $row->message;
                 $msg_type= $row->msg_type;
                 $db_user_id = $row->user_id;
                 $msg_time =$row->msg_time;

                 if($db_user_id == $user_id){
                     //right user messages
                     if($msg_type == "text"){
                         echo '<div class="right-messages common-margin">
                                    <div class="right-msg-area">
                                        <span class="date-time right-time">
                                            1 minute ago
                                        </span>
                                        <!--close date time -->
                                        <div class="right-msg">
                                            <p> '.$message.'</p>
                                        </div> 
                                    </div>
                                </div><!--close right messages-->';

                     }else if ($msg_type =="jpg" || $msg_type == "JPEG"  || $msg_type == "JPG"){
                        echo '<div class="right-messages common-margin">
                                    <div class="right-msg-area">
                                        <span class="date-time right-time right-msg-time">
                                            1 minute ago
                                        </span>
                                        <!--close date time -->
                                        <div class="right-files">
                                            <img src="assets/chat-uploads/'.$message.'" 
                                                class="common-images">
                                        </div>
                                    </div>
                                </div><!--close right messages-->';
                     }else if($msg_type == "png" || $msg_type == "PNG"){
                        echo '<div class="right-messages common-margin">
                                    <div class="right-msg-area">
                                        <span class="date-time right-time right-msg-time">
                                            1 minute ago
                                        </span>
                                        <!--close date time -->
                                        <div class="right-files">
                                            <img src="assets/chat-uploads/' . $message . '" 
                                                class="common-images">
                                        </div> 
                                    </div>
                                </div><!--close right messages-->';

                     }else if($msg_type == "pdf" || $msg_type == "PDF"){
                        echo '<div class="right-messages common-margin">
                                    <div class="right-msg-area">
                                        <span class="date-time right-time right-msg-time">
                                            1 minute ago
                                        </span>
                                        <!--close date time -->
                                        <div class="right-files ">
                                           <a href="assets/chat-uploads/'.$message. '" class="all-files">
                                                <i class="far fa-file-pdf pdf files-common"></i>'.$message.'
                                            </a>
                                        </div> 
                                    </div>
                                </div><!--close right messages-->';

                     }else if($msg_type == "zip"){
                        echo '<div class="right-messages common-margin">
                                    <div class="right-msg-area">
                                        <span class="date-time right-time right-msg-time">
                                            1 minute ago
                                        </span>
                                        <!--close date time -->
                                        <div class="right-files ">
                                           <a href="assets/chat-uploads/' . $message . '" class="all-files">
                                                <i class="fas fa-arrow-circle-down files-common"></i>' . $message . '
                                            </a>
                                        </div> 
                                    </div>
                                </div><!--close right messages-->';

                     }else if($msg_type == "emoji"){
                        echo '<div class="right-messages common-margin">
                                    <div class="right-msg-area">
                                        <span class="date-time right-time right-msg-time">
                                            1 minute ago
                                        </span>
                                        <!--close date time -->
                                        <div class="right-files ">
                                           <img src="'.$message. '" class="animated-emoji">
                                                
                                        </div> 
                                    </div>
                                </div><!--close right messages-->';

                     } else if ($msg_type == "xlsx") {

                        echo '<div class="right-messages common-margin">
                                    <div class="right-msg-area">
                                        <span class="date-time right-time right-msg-time">
                                            1 minute ago
                                        </span>
                                        <!--close date time -->
                                        <div class="right-files ">
                                           <a href="assets/chat-uploads/' . $message . '" class="all-files">
                                                <i class="far fa-file-excel  files-common"></i>' . $message . '
                                            </a>
                                        </div> 
                                    </div>
                                </div><!--close right messages-->';
                        
                    }else if($msg_type == "docx"){
                        echo '<div class="right-messages common-margin">
                                    <div class="right-msg-area">
                                        <span class="date-time right-time right-msg-time">
                                            1 minute ago
                                        </span>
                                        <!--close date time -->
                                        <div class="right-files ">
                                           <a href="assets/chat-uploads/' . $message . '" class="all-files">
                                                <i class="far fa-file-word word files-common"></i>' . $message . '
                                            </a>
                                        </div> 
                                    </div>
                                </div><!--close right messages-->';

                    }
                    
                 }else{
                     //left user's message

                 }
            endforeach;
        }

       
    }
}

?>