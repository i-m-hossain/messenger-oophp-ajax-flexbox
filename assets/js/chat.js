
$(document).ready(function () {
    
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
                            console.log('msg sent');
                            console.log(response);
                        } 
                        
                    }
                });
                
                
            }
        }
    });
    // $("#upload-files").change(function (e) {
        
    //     var file_name = $("#upload-files").val();
    //     if(file_name.length != ""){
    //         $.ajax({
    //             type    : 'POST',
    //             url     : 'ajax/send_files.php',
    //             data    : new FormData($(".chat-form")[0]),
    //             contentType: false,
    //             procesData: false,
    //             success : function(response){
    //                 if (response.status == "success") {

    //                     $(".chatform").trigger("reset"); //after sending message filed should be empty
    //                     console.log('msg sent');
    //                     console.log(response);
    //                 } 
                    
    //             }
    //         });
            
            
    //     }
                
    // });

})