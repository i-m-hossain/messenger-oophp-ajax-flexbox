<?php
include "classes/init.php";

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
    <nav id="nav">
        <span class="bars">
            <i class="fa fa-bars custom-bars" aria-hidden="false"></i>
        </span>
    </nav>
    <div class="chat-container">

        <?php include("components/sidebar.php") ?>

        <section id="right-area">
            <?php include "components/messages.php" ?>

            <?php include "components/chat-form.php" ?>
            <div class="emoji">
                <img src="assets/emoji/001-happy-18.svg" alt="" class="emoji-same">
                <img src="assets/emoji/002-cool-5.svg" alt="" class="emoji-same">
                <img src="assets/emoji/004-surprised-9.svg" alt="" class="emoji-same">
                <img src="assets/emoji/005-shocked-4.svg" alt="" class="emoji-same">
                <img src="assets/emoji/007-nervous-2.svg" alt="" class="emoji-same">
                <img src="assets/emoji/009-angry-6.svg" alt="" class="emoji-same">
                <img src="assets/emoji/010-drool.svg" alt="" class="emoji-same">
                <img src="assets/emoji/011-tired-2.svg" alt="" class="emoji-same">
                <img src="assets/emoji/012-tongue-7.svg" alt="" class="emoji-same">
                <img src="assets/emoji/015-smile-1.svg" alt="" class="emoji-same">
                <img src="assets/emoji/016-sleeping-1.svg" alt="" class="emoji-same">
                <img src="assets/emoji/021-wink-1.svg" alt="" class="emoji-same">
                <img src="assets/emoji/022-laughing-2.svg" alt="" class="emoji-same">
                <img src="assets/emoji/024-sweat-1.svg" alt="" class="emoji-same">
                <img src="assets/emoji/031-crying-7.svg" alt="" class="emoji-same">
                <img src="assets/emoji/032-bored.svg" alt="" class="emoji-same">
                <img src="assets/emoji/034-angry-5.svg" alt="" class="emoji-same">
                <img src="assets/emoji/039-cyclops-1.svg" alt="" class="emoji-same">
                <img src="assets/emoji/042-book.svg" alt="" class="emoji-same">
                <img src="assets/emoji/044-dead-1.svg" alt="" class="emoji-same">

            </div><!--close emoji-->
        </section><!--close right-area-->
    </div>
    <!--close chat-container -->
    <?php include "components/js.php" ?>


</body>

</html>