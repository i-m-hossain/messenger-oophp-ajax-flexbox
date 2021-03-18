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


        </section><!--close right-area-->
    </div><!--close chat-container -->
    <?php include "components/js.php"?>


</body>

</html>