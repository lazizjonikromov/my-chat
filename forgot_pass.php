<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
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
                <h2>Fotgot Password</h2>
                <p>MyChat</p>
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control" placeholder="someone@site.com" required>
            </div>
            <div class="form-group">
                <label for="">Bestfriend Name</label>
                <input type="text" name="bf" class="form-control" placeholder="Someone..." required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block btn-lg" name="submit">Submit</button>
            </div>
        </form>
        <div class="text-center small" style="color: #67428B;">
            Back to Signin? 
            <a href="signin.php">Click here</a>
        </div>
    </div>
    <?php 
    
        session_start();
        include("include/connection.php");
        if(isset($_POST['submit'])){
            $email = htmlentities(mysqli_real_escape_string($con, $_POST['email']));
            $recovery_account = htmlentities(mysqli_real_escape_string($con, $_POST['bf']));

            $sql = "select * from users where user_email='$email' and forgotten_answer = '$recovery_account'";
            $query = mysqli_query($con, $sql);
            $check_user = mysqli_num_rows($query);

            if($check_user == 1){
                $_SESSION['user_email'] = $email;
                echo "<script>window.open('create_password.php', '_self')</script>";
            }
            else{
                echo "<script>alert('Your email or bestfriend name is incorrect.')</script>";
                echo "<script>window.open('forgot_pass.php', '_self')</script>";
            }

        }
    
    ?>
</body>
</html>