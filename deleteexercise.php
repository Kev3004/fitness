<?php
include 'connection.php';
$userid=$_GET['exerciseid'];
$stmt=$conn->prepare("DELETE FROM exercise WHERE exerciseid = ?");
$stmt->bind_param("i",$userid);

if($stmt->execute()){
    header("Location: exerciselist.php");
}
else{
    echo "Error";
}
$stmt->close();
$conn->close();
