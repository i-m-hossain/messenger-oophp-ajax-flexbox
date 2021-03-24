<?php

include "classes/init.php";
$obj = new base_class();


if (isset($_POST['change_password'])) {

    //submitted post data
    $current_password = $obj->security($_POST['current_password']);
    $new_password = $obj->security($_POST['new_password']);
    $retype_password = $obj->security($_POST['retype_password']);

    $current_status = $new_status = $retype_status = 1;
    $hash_password = password_hash($new_password, PASSWORD_BCRYPT);

    //Validation
    if (empty($current_password)) {
        $current_password_error = "Current password is required";
        $current_status = "";
    }

    if (empty($new_password)) {
        $new_password_error = "New password is required";
        $new_status = "";
    } elseif (strlen($new_password) < 5) {
        $new_password_error = "Password is too short";
        $new_status = "";
    }
    if (empty($retype_password)) {
        $retype_password_error = "Retype password is required";
        $retype_status = "";
    } elseif ($new_password != $retype_password) {
        $retype_password_error = "Password  is not matched";
        $retype_status = "";
    }

    //connecting to the data base
    if ($current_status && $new_status && $retype_status) {

        //fetching user password
        $user_id = $_SESSION['user_id'];
        $query = "SELECT * FROM users WHERE id=?";
        $obj->Normal_Query($query, [$user_id]);
        $row =  $obj->single_result();
        $db_password = $row->password;

        if (!password_verify($current_password, $db_password)) {
            $current_password_error = "Please enter the correct password";
        } else {

            //updating users password
            $query = "UPDATE users SET password = ? WHERE id = ?";
            $obj->Normal_Query($query, [$hash_password, $user_id]);

            //creating session for flash message
            $obj->create_session('password_updated', "Your password is succesfully updated");
            header("location:index.php");
        }
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
    <?php include "components/css.php" ?>
</head>

<body>
    <nav id="nav">

    </nav>
    <div class="chat-container ">

        <?php include "components/sidebar.php" ?>
        <!---close sidebar -->
        <section id="right-area">
            <form class="form-section" method="POST">
                <div class="group">
                    <h2 class="form-heading ">Change Password</h2>
                </div>
                <div class="group">
                    <input class="control" type="password" name="current_password" value="<?php if (isset($current_password)) : echo $_POST['current_password'];
                                                                                            endif; ?>" placeholder="Current password">
                    <div class="error">
                        <?php if (isset($current_password_error)) : ?>
                            <?php echo $current_password_error ?>
                        <?php endif ?>
                    </div>
                </div>
                <div class="group">
                    <input class="control" type="password" name="new_password" value="<?php if (isset($new_password)) : echo $_POST['new_password'];
                                                                                        endif; ?>" placeholder="Create new password">
                    <div class="error">
                        <?php if (isset($new_password_error)) : ?>
                            <?php echo $new_password_error ?>
                        <?php endif ?>
                    </div>
                </div>
                <div class="group">
                    <input class="control" type="password" name="retype_password" value="<?php if (isset($retype_password)) : echo $_POST['retype_password'];
                                                                                            endif; ?>" placeholder="Confirm new password">
                    <div class="error">
                        <?php if (isset($retype_password_error)) : ?>
                            <?php echo $retype_password_error ?>
                        <?php endif ?>
                    </div>
                </div>
                <div>
                    <input type="submit" class="btn signup-btn" name="change_password" value="Change Password">
                </div>
            </form>
        </section>


    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/remove.js"> </script>
</body>

</html>