<?php

    include "init.php";
    if (!isset($_SESSION['user_id'])) {

        header("location:login.php");
    }




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messenger</title>
    <?php include "components/css.php" ?>
</head>

<body>
    <!-- Flash message after changing password-->
    <?php if (isset($_SESSION['password_updated'])) : ?>
        <div class="flash success-flash">
            <span class="remove">&times</span>
            <div class="flash-heading">
                <h3><span class="checked">&#10004</span> Success!</h3>
            </div>
            <div class="flash-body">
                <p><?php echo $_SESSION['password_updated'] ?></p>
            </div>
        </div>
        <!--close flash-->
    <?php endif; ?>
    <?php unset($_SESSION['password_updated']) ?>

    <!-- Flash message after changing name-->
    <?php if (isset($_SESSION['name_updated'])) : ?>
        <div class="flash success-flash">
            <span class="remove">&times</span>
            <div class="flash-heading">
                <h3><span class="checked">&#10004</span> Success!</h3>
            </div>
            <div class="flash-body">
                <p><?php echo $_SESSION['name_updated'] ?></p>
            </div>
        </div>
        <!--close flash-->
    <?php endif; ?>
    <?php unset($_SESSION['name_updated']) ?>

    <!-- Flash message after updating photo-->
    <?php if (isset($_SESSION['image_updated'])) : ?>
        <div class="flash success-flash">
            <span class="remove">&times</span>
            <div class="flash-heading">
                <h3><span class="checked">&#10004</span> Success!</h3>
            </div>
            <div class="flash-body">
                <p><?php echo $_SESSION['image_updated'] ?></p>
            </div>
        </div>
        <!--close flash-->
    <?php endif; ?>
    <?php unset($_SESSION['image_updated']) ?>




    <!-- <div class="flash error-flash">
        <span class="remove">&times</span>
        <div class="flash-heading">
            <h3><span class="cross">&#x2715</span> Error!</h3>
        </div>
        <div class="flash-body">
            <p>First you need to login</p>
        </div>
    </div>  -->


    <?php include "components/nav.php" ?>

    <div class="chat-container">

        <?php include("components/sidebar.php") ?>

        <section id="right-area">
            <?php include "components/messages.php" ?>

            <?php include "components/chat-form.php" ?>

            <?php include "components/emoji.php" ?>

        </section>
        <!--close right-area-->
    </div>
    <!--close chat-container -->
    <?php include "components/js.php" ?>


</body>

</html>