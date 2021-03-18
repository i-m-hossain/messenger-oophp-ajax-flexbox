<?php
include "classes/init.php";

$obj = new base_class();
if (isset($_POST['login'])) {

    $email     =   $obj->security($_POST['email']);
    $password  =   $obj->security($_POST['password']);
    $email_status = $password_status = 1;

    //validation
    if (empty($email)) {
        $email_error  = "Email is required";
        $email_status = "";
    }
    if (empty($password)) {
        $password_error = "password is required";
        $password_status = "";
    }

    //Fetching user data
    if(!empty($email_status) && !empty($password_status)){

        //fetching user having the input email
        $query = "SELECT * FROM users WHERE email= ?";
        $obj->Normal_Query($query, array($email));

        //if it does not exist
        if($obj->Count_Rows() == 0){
            $email_error = "Please enter correct email";
        }else{
            //if it exists
            $row            =   $obj->single_result(); //retrieves only single result and returns objects
            $user_id        =   $row->id;
            $user_email     =   $row->email;
            $user_password  =   $row->password;
            $user_name      =   $row->name;

            //if input password does not match
            if(!password_verify($password, $user_password)){
                $password_error = "Please Enter correct Password";
            }else{
                //if input password matches with the registerd email, creating sessions
                $obj->create_session("user_name", $user_name);
                $obj->create_session('user_id', $user_id);
                
                header("location:index.php"); //redirecting to home page

            }
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
    <title>Sign up/Login</title>
    <?php include "components/css.php" ?>
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

                <!-- Flash message after registration-->
                <?php if (isset($_SESSION['account_success'])) : ?>
                    <div class="alert alert-success">
                        <?php echo $_SESSION['account_success']; ?>
                    </div>
                    <!--close alert-->
                <?php endif; ?>
                <?php unset($_SESSION['account_success']) ?>

                <!--Login Form -->
                <form action="" method="POST">
                    <div class="group">
                        <h2 class="form-heading">User Login</h2>
                    </div> <!-- close group-->
                    <div class="group">
                        <input type="email" name="email" value="<?php if(isset($email)) : echo $email; endif; ?>" class="control" placeholder="Enter your email">
                        <div class="error email-error">
                            <?php if (isset($email_error)) : ?>

                                <?php echo $email_error; ?>

                            <?php endif; ?>
                        </div>
                    </div> <!-- close group-->
                    <div class="group">
                        <input type="password" name="password" value="<?php if(isset($password)) : echo $password; endif; ?>" class="control" placeholder="Enter password">
                        <div class="error password-error">
                            <?php if (isset($password_error)) : ?>

                                <?php echo $password_error; ?>

                            <?php endif; ?>
                        </div>
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