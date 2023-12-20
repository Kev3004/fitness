<?php
include 'connection.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $mealname = $_POST['mealname'];
    $calories = $_POST['calories'];
    $caloid = $_POST['caloid'];
    $today = date("jFY");
    $stmt = $conn->prepare("INSERT into calories (mealname,calories,caloid,date) VALUES (?,?,?,?)");
    $stmt->bind_param("ssis", $mealname, $calories, $caloid, $today);
    $stmt->execute();
    $stmt->close();
    $conn->close();
}