<?php include 'addadmin.php'; ?>

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
</style>

<body>
    <div class="wrapper shadow">
        <div class="right">
            <form method="post">
                <h1>Register</h1>
                <div class="mt-3">
                    <input type="text" name="name" placeholder="Name" class="inputinfo" required>
                </div>
                <div class="mt-3">
                    <input type="number" name="weight" placeholder="Weight in kg" class="inputinfo" required>
                </div>
                <div class="mt-3">
                    <input type="number" name="height" placeholder="Height in cm" class="inputinfo" required>
                </div>
                <div class="mt-3">
                    <input type="email" name="email" placeholder="Email" class="inputinfo" required>
                </div>
                <div class="mt-3">
                    <input type="password" name="password" placeholder="Password" class="inputinfo" required>
                </div>
                <button type="submit" class="button mt-5">Register</button>
            </form>
        </div>
        <div class="left">
            <div class="wrap">
                <h2>BHealthy</h2>
                <p>BHealthy is a website which helps you track your calories and make your own workout structure as per
                    your need .</p>
                <p>Already have an account ?</p>
                <a href="login.php" class="button2 mt-3">Login</a>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>

</html>