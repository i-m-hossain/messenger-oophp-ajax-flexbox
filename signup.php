<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up/Login</title>
    <?php include("components/css.php") ?>
</head>

<body>

    <div class="signup-container">
        <div class="account-left">
            <div class="account-text">
                <h1>Let's Chat</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis harum, ullam cum minima eaque, nihil aliquid, aspernatur consequatur beatae neque dolores laudantium consequuntur mollitia!</p>
            </div> <!-- close account-text -->
        </div><!--close accoont left-->
        
        <div class="account-right">
            <?php include "components/signup.php" ?>
        </div><!--close accoont right-->
    </div> <!-- signup-container close -->


    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/file_lable.js"></script>
</body>

</html>