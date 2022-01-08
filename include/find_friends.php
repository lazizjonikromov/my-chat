<?php
session_start();
include("find_friends_function.php");
if (!isset($_SESSION['user_email'])) {
    header("Location: signin.php");
} else {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Search For Friends</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/find_people.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    </head>

    <body>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <a href="" class="navbar-brand">
                <?php
                    $user = $_SESSION['user_email'];
                    $get_user = "select * from users where user_email='$user' ";
                    $run_user = mysqli_query($con, $get_user);
                    $row = mysqli_fetch_array($run_user);

                    $user_name = $row['user_name'];
                    echo "<a class='navbar-brand' href='../home.php?user_name=$user_name'>MyChat</a>";
                ?>
            </a>
            <ul class="navbar-nav">
                <li><a href="../account_settings.php" style="color: white;text-decoration: none;font-size: 20px;">Settings</a></li>
            </ul>
        </nav>
        <br>
        <div class="row">
            <div class="col-sm-4">

            </div>
            <div class="col-sm-4">
                <form action="" class="search_form">
                    <input type="text" name="search_query" placeholder="Search Friends" autocomplete="off" required>
                    <button class="btn" type="submit" name="search_btn">Search</button>
                </form>
            </div>
            <div class="col-sm-4">

            </div>
        </div>
        <br><br>
        <?php search_user(); ?>
    </body>

    </html>
<?php } ?>