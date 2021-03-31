
$(document).ready(function () {

    $(".messages").animate({ scrollTop: $(".messages")[0].scrollHeight }, 2000);

    //text message
    
    $(".chat-form").keypress(function(e) {
        if (e.keyCode == 13) {

            var send_message = $("#send_message").val();
            if (send_message.length > 0) {
                $.ajax({
                    type    : 'POST',
                    url     : 'ajax/send_message.php',
                    data    : {send_message: send_message},
                    dataType: 'JSON',
                    success : function(response){
                        if (response.status == "success") {

                            $(".chat-form").trigger("reset"); //after sending message filed should be empty
                            show_messages();
                            $(".messages").animate({ scrollTop: $(".messages")[0].scrollHeight }, 2000);
                        } 
                        
                    }
                });
                
                
            }
        }
    });

    // upload image & files
    $("#upload-files").change(function () {

        var file_name = $("#upload-files").val();
        
        if (file_name.length != "") {
            
            $.ajax({
                type    : 'POST',
                url: 'ajax/send_files.php',
                
                data    :  new FormData($(".chat-form")[0]), //  0 index means to select  all input fields 
                contentType: false, // tell jQuery not to set contentType
                processData: false, // tell jQuery not to process the data
                dataType: 'JSON',
                success : function(response){
                        if (response.status == "error") { //after sending message filed should be empty
                            $(".files-error").addClass("show-file-error");
                            $(".files-error").html("<span class='files-cross-icon'>&#x2715</span>" + "Please Choose Valid Image");
                            setTimeout(function () {
                                $(".files-error").removeClass("show-file-error");
                            }, 5000)
                        }else if(response.status == "success"){
                            show_messages();
                            $(".messages").animate({ scrollTop: $(".messages")[0].scrollHeight }, 2000);
                        }
                        
                    }
            });
            
            
        }
                
    });
    //send emojis
    $(".emoji-same").click(function () {
        var emoji = $(this).attr("src");
        $.ajax({
            type: 'POST',
            url: 'ajax/send_emoji.php',
            data: { 'send_emoji': emoji },
            dataType: 'JSON',
            success: function (response) {
                if (response.status =="success") {
                    show_messages();
                    $(".messages").animate({ scrollTop: $(".messages")[0].scrollHeight }, 2000);
                }
            }
        })
    })

    setInterval(function () {
        show_messages();
        users_status();
        online_users();
    }, 3000);
})

//Display online users

function online_users(){
    $.ajax({
        type: 'GET',
        url: 'ajax/online_users.php',
        dataType: 'JSON',
        success: function(response){
            $(".online_users").html(response['users']);
        }
    })
}


//check users login time
function users_status() {
    $.ajax({
        type: 'GET',
        url: 'ajax/users_status.php',
        dataType: 'JSON',
        success: function (response) {
            if(response['status'] == "href"){
               window.location = "login.php";
            }
        }
    })    
}




//show messages
function show_messages() {

    var msg = true;
    $.ajax({
        type: 'GET',
        url: 'ajax/show_messages.php',
        data: { 'message': msg }, 
        success: function (response) {
            $(".messages").html(response)
        }

    })
}
show_messages();