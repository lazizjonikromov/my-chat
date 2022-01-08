<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Password</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="css/signin.css">
</head>
<body>
    <div class="signin-form">
        <form action="" method="post">
            <div class="form-header">
                <h2>Create New Password</h2>
                <p>MyChat</p>
            </div>
            <div class="form-group">
                <label for="">Enter Password</label>
                <input type="password" name="pass1" class="form-control" placeholder="Password" required>
            </div>
            <div class="form-group">
                <label for="">Confirm Password</label>
                <input type="password" name="pass2" class="form-control" placeholder="Confirm Password" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block btn-lg" name="change">Change</button>
            </div>
        </form>
    </div>

    <?php 
        session_start();
        include("include/connection.php");

        if(isset($_POST['change'])){
            $user = $_SESSION['user_email'];
            $pass1 = $_POST['pass1'];
            $pass2 = $_POST['pass2'];

            if($pass1 != $pass2){
                echo "
                    <div class='alert alert-danger'>
                        <strong>Your New password didn't match with confirm password</strong>
                    </div>
                ";
            }

            if($pass1 < 9 and $pass2 < 9){
                echo "
                    <div class='alert alert-danger'>
                        <strong>Use 9 or more than 9 characters</strong>
                    </div>
                ";
            }

            if($pass1 == $pass2){
                $update_pass = mysqli_query($con , "update users set user_pass='$pass1' 
                where user_email = '$user' ");
                session_destroy();
                echo "<script>alert('Go ahead and signin')</script>";
                echo "<script>window.open('signin.php', '_self')</script>";
            }


        }
    ?>
</body>
</html>