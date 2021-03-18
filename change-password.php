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
    <div class="chat-container ">
        <section id="sidebar">
            <ul class="left-ul">
                <li><a href="#"><span class="profile-img-span"><img class="profile-img" src="assets/img/pro-pic-2.jpg" alt="profile picture"></span></a></li>
                <li><a href="#">John Smith <span class="cool-hover"></span> </a></li>
                <li><a href="/oophp/messenger/change-name.php">Change Name <span class="cool-hover"></span> </a></li>
                <li><a href="#">Change Password <span class="cool-hover"></span> </a></li>
                <li><a href="#">100 User <span class="cool-hover"></span> </a></li>

            </ul>
        </section>
        <!---close sidebar -->

        <section class="right area">
            <div class="form-section">
                <div class="group">
                    <h2 class="form-heading ">Change Password</h2>
                </div>
                <div class="group">
                    <input class="control" type="password" name="old-password" placeholder="Add current password">
                </div>
                <div class="group">
                    <input class="control" type="password" name="new-password" placeholder="Create new password">
                </div>
                <div class="group">
                    <input class="control" type="password" name="retype_new-password" placeholder="Retype new password">
                </div>
                <div>
                    <input type="submit" class="btn signup-btn" value="Change Password">
                </div>
            </div>
        </section>


    </div>

</body>

</html>