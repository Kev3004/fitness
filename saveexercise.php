<?php
include 'connection.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
$type=$_POST['type'];
$name=$_POST['exercise'];
$reps= $_POST['reps'];
$set=$_POST['set'];
$id=$_POST['exid'];
$stmt= $conn->prepare("INSERT into exercise (exercisetype,exercisename,exercisereps,exerciseset,exid) VALUES (?,?,?,?,?)");
$stmt->bind_param("ssiii",$type,$name,$reps,$set,$id);

$stmt->execute();
$stmt->close();
$conn->close();
}