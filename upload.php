<?php
session_start();
include("include/connection.php");
include("include/header.php");

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
    <title>Change Profile Picture</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<style>
    .card{
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    max-width: 400px;
    margin: auto;
    text-align: center;
    font-family: arial;
    }
    .card img{
        height: 250px;
    }
    .title{
        color: grey;
        font-size: 18px;
    }
    #button_profile{
        border: none;
        outline: 0;
        color: white;
        background-color: #3d85ca;
        border-radius: 4px;
        cursor: pointer;
        position: absolute;
        padding: 10px 20px 10px 10px;
        left: 200px;
        bottom: 0;
        width: 200px;
    }
    #update_profile{
        position: absolute;
        cursor: pointer;
        display: flex;
        flex-direction: column;
        padding: 10px;
        width: 50%;
        border-radius: 4px;
        color: white;
        background-color: #86bb71;
    }
    label{
        padding: 7px;
        display: table;
        color: #fff;
    }
    input[type="file"]{
        display: none;
    }
</style>
<body>
    <?php

        $user = $_SESSION['user_email'];
        $get_user = "select * from users where user_email='$user' ";
        $run_user = mysqli_query($con, $get_user);
        $row = mysqli_fetch_array($run_user);

        $user_name = $row['user_name'];
        $user_profile = $row['user_profile'];

        echo "
            
            <div class='card'>
                <img src='$user_profile'>
                <h1>$user_name</h1>
                <form method='post' enctype='multipart/form-data'>
                    <label id='update_profile'>
                        <i class='fa fa-circle-o' aria-hidden='true'></i>
                        Select Profile
                        <input type='file' name='u_image' size='60'> <br>
                        <button id='button_profile' name='update'>&nbsp&nbsp&nbsp<i class='fa fa-heart' aria-hidden='true'></i>Update Profile</button>   
                    </label>
                </form>
            </div>  <br><br>

        ";

        if(isset($_POST['update'])){
            $u_image = $_FILES['u_image']['name'];
            $image_tmp = $_FILES['u_image']['tmp_name'];
            $random_number = rand(1,100);
            if($u_image == ''){
                echo "<script>alert('Please Select Profile')</script>";
                echo "<script>window.open('upload.php', '_self')</script>";
                exit();
            }
            else{
                move_uploaded_file($image_tmp, "images/$u_image.$random_number");
                $update = "update users set user_profile='images/$u_image.$random_number' where user_email='$user' ";
                $run = mysqli_query($con, $update);

                if($run){
                    echo "<script>alert('Your Profile Updated!')</script>";
                    echo "<script>window.open('upload.php', '_self')</script>";
                }
                
            }
        }

    ?>        
</body>
</html>
<?php } ?>