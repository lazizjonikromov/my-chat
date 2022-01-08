<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to your account</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="css/signin.css">
</head>
<body>
    <div class="signin-form">
        <form action="signin_user.php" method="post">
            <div class="form-header">
                <h2>Sign In</h2>
                <p>Login to MyChat</p>
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control" placeholder="someone@site.com" required>
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="pass" class="form-control" placeholder="Password" required>
            </div>
            <div class="small">
                Forgot password? <a href="forgot_pass.php">Click Here</a>
            </div> <br>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_in">Sign in</button>
            </div>
        </form>
        <div class="text-center small" style="color: #67428B;">
            Don`t have an account? 
            <a href="signup.php">Create One</a>
        </div>
    </div>
</body>
</html>