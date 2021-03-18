<?php
include "classes/init.php";
$obj = new base_class();

if (isset($_POST['signup'])) {

    $full_name      =   $_POST['full_name'];
    $email          =   $_POST['email'];
    $password       =   $_POST['password'];
    $img_name       =   $_FILES['img']['name'];
    $img_tmp        =   $_FILES['img']['tmp_name'];
    $img_path       =   "assets/uploads";
    $extensions     =   ['jpg', 'png', 'jpeg'];
    $img_ext        =   explode(".", $img_name);
    $img_extension  =   end($img_ext);

    $name_status    =   $email_status = $password_status = $photo_status = 1;

    /**=== Name validation ===**/
    if (empty($full_name)) {
        $name_error     =   "Full name is required";
        $name_status    =   "";
    }

    /**=== email validation ===**/
    if (empty($email)) {

        //if the email field is empty
        $email_error     =   "Email is required";
        $email_status    =   "";
    } else {
        //if the input email is invalid
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_error     =   "Invalid email format";
            $email_status    =   "";
        } else {

            //if the email is aleady exists in database
            $query = "SELECT email FROM users WHERE email= ?";
            $obj->Normal_Query($query, array($email));
            if ($obj->Count_Rows() != 0) {
                $email_error     =   "Email already exists!";
                $email_status    =   "";
            }
        }
    }

    /**=== Password validation ===**/
    if (empty($password)) {
        $password_error     =   "Password is required";
        $password_status    =   "";
    } elseif (strlen($password) < 5) {
        $password_error     =   "Password must be more than 5 charecters";
        $password_status    =   "";
    }

    /**=== Image validation ===**/
    if (empty($img_name)) {
        $image_error     =   "Image is required";
        $photo_status    =   "";
    } elseif (!in_array($img_extension, $extensions)) {
        $image_error     =   "Invalid image format(only jpg and png allowed)";
        $photo_status    =   "";
    }

    /**=== Submit data to the database ===**/
    if(!empty($name_status) && !empty($email_status) && !empty($password_status) && !empty($photo_status)){
        
        move_uploaded_file($img_tmp, "$img_path/$img_name");
        $status = 0;
        $hash_password = password_hash($password, PASSWORD_BCRYPT);
        $query = "INSERT  INTO users (name, email, password, image, status) VALUES (?,?,?,?,?)";
        $obj->Normal_Query($query, [$full_name, $email, $hash_password, $img_name, $status ]);

        echo "success";

    }
}

?>
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
        </div>
        <!--close accoont left-->

        <div class="account-right">
            <div class="form-area">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="group">
                        <h2 class="form-heading">CReate New Account</h2>
                    </div> <!-- close group-->
                    <div class="group">
                        <input type="text" name="full_name" class="control" value="<?php if(isset($full_name)) : echo $full_name; endif; ?>" 
                            placeholder="Enter your full name">
                        <div class="error name-error">
                            <?php if (isset($name_error)) : ?>

                                <?php echo $name_error; ?>

                            <?php endif; ?>
                        </div>
                    </div> <!-- close group-->
                    <div class="group">
                        <input type="email" name="email" class="control" value="<?php if(isset($email)) : echo $email; endif; ?>" 
                            placeholder="Enter your email">
                        <div class="error email-error">
                            <?php if (isset($email_error)) : ?>

                                <?php echo $email_error; ?>

                            <?php endif; ?>
                        </div>
                    </div> <!-- close group-->
                    <div class="group">
                        <input type="password" name="password" class="control" value="<?php if(isset($password)) : echo $password; endif; ?>" 
                            placeholder="Enter password">
                        <div class="error password-error">
                            <?php if (isset($password_error)) : ?>

                                <?php echo $password_error; ?>

                            <?php endif; ?>
                        </div>
                    </div> <!-- close group-->
                    <div class="group">
                        <label for="file"  id="file-label"> <i class="fas fa-cloud-upload-alt upload-icon"></i> Choose image </label>
                        <input type="file" name="img" class="file" id="file" >
                        <div class="error image-error">
                            <?php if (isset($image_error)) : ?>

                                <?php echo $image_error; ?>

                            <?php endif; ?>
                        </div>
                    </div> <!-- close group-->
                    <div class="group">
                        <input type="submit" name="signup" class="btn signup-btn" value="Sign up">
                    </div> <!-- close group-->
                    <div class="group">
                        <a href="login.php" class="link">Already registered? </a>
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