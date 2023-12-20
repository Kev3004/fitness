<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['email'])) {
    header("Location: index.php");
}
include('connection.php');
if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $sql = "select * from admin where adminemail='$email' and adminpassword='$password'";
    $res = mysqli_query($conn, $sql);
    if (mysqli_num_rows($res) === 1) {
        $row = mysqli_fetch_assoc($res);
        if ($row['adminemail'] === $email && $row['adminpassword'] === $password) {
            $_SESSION['id'] = $row['adminid'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['bmi'] = $row['bmi'];
            header("Location: index.php");
        }
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

<style>
    * {
        margin: 0;
        padding: 0;
    }

    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: #265e96;
    }

    .wrapper {
        display: flex;
        width: 50%;
        height: 60vh;
        border-radius: 10px;
        overflow: hidden;
    }

    .left {
        flex: 1;
        background: linear-gradient(0deg, rgba(0, 0, 3, 0.3) 0%, rgba(0, 0, 0, 0.30015756302521013) 100%), url("assets/gymbg.jpg");
        background-size: 200%;
        background-position: -125px;
        background-repeat: no-repeat;
        display: flex;
        align-items: center;
    }

    .right {
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: white;
    }

    .inputinfo {
        width: 300px;
        border: none;
        height: 50px;
        border-bottom: 1px solid lightgrey;
    }

    .inputinfo:focus {
        outline: none;
    }

    h1 {
        font-size: 60px;
    }

    .wrap {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: start;
        padding: 50px;
    }

    .button {
        border: none;
        padding: 10px;
        width: 200px;
        background-color: #0039a6;
        color: white;
    }

    .wrap h2 {
        font-size: 80px;
        color: white;
    }

    .wrap p {
        color: white;
        margin-bottom: 10px;
    }

    .button2 {
        border: none;
        padding: 10px 40px;

        background-color: #0039a6;
        color: white;
        text-decoration: none;
    }

    @media only screen and (max-width: 390px) {
        .left {
            display: none;
        }

        .wrapper {
            width: 100%;
        }
    }
</style>

<body>
    <div class="wrapper shadow">
        <div class="left">
            <div class="wrap">
                <h2>BHealthy</h2>
                <p>BHealthy is a website which helps you track your calories and make your own workout structure as per
                    your need .</p>
                <p>Don't have an account ?</p>
                <a href="register.php" class="button2 mt-3">Register</a>
            </div>
        </div>
        <div class="right">
            <form action="" method="post">
                <h1>Login</h1>
                <div class="mt-3">
                    <input type="text" name="email" placeholder="Email" class="inputinfo">
                </div>
                <div class="mt-3">
                    <input type="password" name="password" placeholder="Password" class="inputinfo">
                </div>
                <input type="submit" value="Login" class="button mt-5" name="submit">
            </form>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>

</html>