<?php
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Account</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="css/signup.css">
</head>
<body>
    <div class="signup-form">
        <form action="signup_user.php" method="post">
            <div class="form-header">
                <h2>Sign Up</h2>
                <p>Fill out this form and start chatting with your friends.</p>
            </div>

            <div class="form-group">
                <label for="">Username</label>
                <input type="text" name="user_name" class="form-control" placeholder="Example : John" required>
            </div>

            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="user_pass" class="form-control" placeholder="Password" required>
            </div>

            <div class="form-group">
                <label for="">Email Address</label>
                <input type="email" name="user_email" class="form-control" placeholder="someone@site.com" required>
            </div>

            <div class="form-group">
                <label for="">Country</label>
                <select name="user_country" class="form-control" required>
                    <option disabled>Select a Country</option>
                    <option>Uzbekistan</option>
                    <option>United States of America</option>
                    <option>Russian</option>
                    <option>China</option>
                    <option>United Kingdom</option>
                </select>
            </div>

            <div class="form-group">
                <label for="">Gender</label>
                <select name="user_gender" class="form-control" required>
                    <option disabled>Select you Gender</option>
                    <option>Male</option>
                    <option>Female</option>
                    <option>Others</option>
                </select>
            </div>

            <div class="form-group">
                <label class="checkbox-inline"><input type="checkbox" required>I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a> </label>
            </div>

            <div class="form-group" name="signup">
                <button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_up">Sign up</button>
            </div>
        </form>
        <div class="text-center small" style="color: #67428B;">
            Already have an account? 
            <a href="signin.php">Signin here</a>
        </div>
    </div>
</body>
</html>