<?php
include 'connection.php';
$userid=$_GET['id'];
$stmt=$conn->prepare("DELETE FROM calories WHERE id = ?");
$stmt->bind_param("i",$userid);

if($stmt->execute()){
    header("Location: Add.php");
}
else{
    echo "Error";
}
$stmt->close();
$conn->close();
