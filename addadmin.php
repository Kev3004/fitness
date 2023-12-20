<?php
include 'connection.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $adminname = $_POST['name'];
    $adminemail = $_POST['email'];
    $adminpassword = $_POST['password'];
    $weight = $_POST['weight'];
    $height = $_POST['height'];
    $heightinm = $height / 100;
    $bmi = $weight / ($heightinm * $heightinm);
    $stmt = $conn->prepare("INSERT into admin (adminname,adminemail,adminpassword,weight,height,bmi) Values (?,?,?,?,?,?)");
    $stmt->bind_param("sssssi", $adminname, $adminemail, $adminpassword, $weight, $height, $bmi);

    if ($stmt->execute()) {
        header("location: login.php");
    } else {
        echo "Error";
    }
    $stmt->close();
    $conn->close();
}
?>