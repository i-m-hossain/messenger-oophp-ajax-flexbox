<?php
include "classes/init.php";
include "security.php";
$obj = new base_class();

if (isset($_POST['change_img'])) {

    /* When uploading an image there will be two steps
        1. saving the image in the file directory i.e. $img_tmp. For this--
            1.Chacking image extension
            2.move_uploaded_file to the desired directory
        2. saving the oiginal name of that image in the database. Now for this--
            1. using mySQL query  
            
    */    

    $img_name       =   $_FILES['change_image']['name'];
    $img_tmp        =   $_FILES['change_image']['tmp_name'];
    $img_path       =   "assets/uploads";
    $extensions     =   ['jpg', 'png', 'jpeg'];
    $img_ext        =   explode(".", $img_name);
    $img_extension  =   end($img_ext);
    //validation
    if (empty($img_name)) {
        $image_error = "Please choose the image";
       
    }elseif(!in_array($img_extension, $extensions)){
        $image_error = "Please choose the valid extension. Eg: jpg,png";
    }else{

        move_uploaded_file($img_tmp, "$img_path/$img_name");

        $query = "UPDATE users SET image=? WHERE id=?";
        $obj->Normal_Query($query, [$img_name, $_SESSION['user_id']]);

        $obj->create_session('user_image', $img_name);//updating the session as the profile is loaded from session 
        $obj->create_session("image_updated", "Your photo is successfully updated");
        header("location:index.php");

    }
        
}

?>


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
        <?php include "components/sidebar.php" ?>
        <!---close sidebar -->
        <section id="right-area">
            <form class="form-section" enctype="multipart/form-data" method="POST">
                <div class="group">
                    <h2 class="form-heading ">Change Photo</h2>
                </div>
                <div class="group">
                    <label for="change-image" id="change-image-label"></label>
                    <input type="file" name="change_image" id="change-image" class="change-img">
                    <div class="error name-error">
                        <?php if (isset($image_error)) : ?>

                            <?php echo $image_error; ?>

                        <?php endif; ?>
                    </div>
                </div>

                <div>
                    <input type="submit" name="change_img" class="btn signup-btn" value="Save changes">
                </div>
            </form>
        </section>
    </div>

    <?php include "components/js.php" ?>
</body>

</html>