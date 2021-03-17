<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messenger</title>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;900&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <nav id="nav">

    </nav>
    <div class="chat-container">
        <section id="sidebar">
            <ul class="left-ul">
                <li><a href="#"><span class="profile-img-span"><img class="profile-img" src="assets/img/pro-pic-2.jpg" alt="profile picture"></span></a></li>
                <li><a href="#">John Smith <span class="cool-hover"></span> </a></li>
                <li><a href="#">Change Name <span class="cool-hover"></span> </a></li>
                <li><a href="#">Change Password <span class="cool-hover"></span> </a></li>
                <li><a href="#">100 User <span class="cool-hover"></span> </a></li>

            </ul>
        </section>
        <section id="right-area">
            <div class="messages">
                <div class="left-message common-margin">
                    <div class="sender-img-block">
                        <img class="sender-img" src="assets/img/pro-pic-1.jpg" alt="sender-img">
                        <span class="online-icon"></span>
                    </div>
                    <div class="left-msg-area">
                        <div class="sender-name-date">
                            <span class="sender-name">
                                Alisa
                            </span> <!-- close user name-->
                            <span class="date-time">
                                1 minute ago
                            </span>
                            <!--close date time -->
                        </div> <!-- close user-name-date -->
                        <div class="left-msg">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro architecto nisi laudantium? Ea blanditiis soluta sed et aperiam.</p>
                        </div> <!-- colse left-msg -->
                    </div> <!-- close left msg area -->
                </div> <!-- left message-->

                <div class="left-message common-margin">
                    <div class="sender-img-block">
                        <img class="sender-img" src="assets/img/pro-pic-1.jpg" alt="sender-img">
                        <span class="offline-icon"></span>
                    </div>
                    <div class="left-msg-area">
                        <div class="sender-name-date">
                            <span class="sender-name">
                                Alisa
                            </span> <!-- close user name-->
                            <span class="date-time">
                                1 minute ago
                            </span>
                            <!--close date time -->
                        </div> <!-- close user-name-date -->
                        <div class="left-msg">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro architecto nisi laudantium? Ea blanditiis soluta sed et aperiam.</p>
                        </div> <!-- close left-msg -->
                    </div><!-- close left message arrea -->

                </div> <!-- close left message-->


                <div class="right-messages common-margin">
                    <div class="right-msg-area">
                        <span class="date-time right-time">
                            1 minute ago
                        </span>
                        <!--close date time -->
                        <div class="right-msg">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro architecto nisi laudantium? Ea blanditiis soluta sed et aperiam.</p>
                        </div> <!-- close right-msg -->
                    </div><!-- close right-message-area -->
                </div>
                <!--close right messages-->

                <div class="right-messages common-margin">
                    <div class="right-msg-area">
                        <span class="date-time right-time">
                            1 minute ago
                        </span>
                        <!--close date time -->
                        <div class="right-msg">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro architecto nisi laudantium? Ea blanditiis soluta sed et aperiam.</p>
                        </div> <!-- close right-msg -->
                    </div><!-- close right-message-area -->
                </div>
                <!--close right messages-->
                <div class="right-messages common-margin">
                    <div class="right-msg-area">
                        <span class="date-time right-time">
                            1 minute ago
                        </span>
                        <!--close date time -->
                        <div class="right-msg">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro architecto nisi laudantium? Ea blanditiis soluta sed et aperiam.</p>
                        </div> <!-- close right-msg -->
                    </div><!-- close right-message-area -->
                </div>
                <!--close right messages-->

                <div class="right-messages common-margin">
                    <div class="right-msg-area">
                        <span class="date-time right-time">
                            1 minute ago
                        </span>
                        <!--close date time -->
                        <div class="right-msg">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro architecto nisi laudantium? Ea blanditiis soluta sed et aperiam.</p>
                        </div> <!-- close right-msg -->
                    </div><!-- close right-message-area -->
                </div>
                <!--close right messages-->

            </div> <!--end messages--->
            
            <div class="chat-form">
                <div class="chat-container">
                    <div class="form-input">
                        <textarea class="text-area-control" rows="" cols="" placeholder=" Type your message"></textarea>
                    </div> <!--close form-input-->
                    <div class="form-input">
                        <label for="upload-files" id="upload-label"><i class="fas fa-paperclip fa-uploads"></i><i class="fas fa-file-image fa-uploads"></i></label>
                        <input type="file" id="upload-files" class="files-upload">
                    </div> <!-- close form-input-->
                </div> <!--end chat-container-->
            </div> <!--end chat-form-->
            
        </section><!--close right-area-->

    </div><!--close chat area -->

</body>
</html>