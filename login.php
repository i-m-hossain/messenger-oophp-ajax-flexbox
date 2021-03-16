<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up/Login</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;900&family=Roboto:wght@100&display=swap" rel="stylesheet">
</head>

<body>

    <div class="signup-container">
        <div class="account-left">
            <div class="account-text">
                <h1>Let's Chat</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis harum, ullam cum minima eaque, nihil aliquid, aspernatur consequatur beatae neque dolores laudantium consequuntur mollitia!</p>
            </div> <!-- close account-text -->
        </div>
        <!--close accoont left-->

        <div class="account-right">
            <div class="form-area">
                <form action="" method="POST">
                    <div class="group">
                        <h2 class="form-heading">User Login</h2>
                    </div> <!-- close group-->
                    <div class="group">
                        <input type="email" name="email" class="control" placeholder="Enter your email">
                    </div> <!-- close group-->
                    <div class="group">
                        <input type="password" name="password" class="control" placeholder="Enter password">
                    </div> <!-- close group-->
                    <div class="group">
                        <input type="submit" name="login" class="btn signup-btn" value="User Login">
                    </div> <!-- close group-->
                    <div class="group">
                        <a href="signup.php" class="link">Not registered? Sign up here! </a>
                    </div>

                </form>
                <!--close form-->
            </div>
            <!--close form area -->
        </div>
        <!--close accoont right-->
    </div> <!-- signup-container close -->


    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/file_lable.js"></script>
</body>

</html>