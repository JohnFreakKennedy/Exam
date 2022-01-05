<?php
require_once 'DBConnection.php';
$UserID = (int) $_SESSION["UserID"];
$MasterID = (int) $_POST['MasterID'];
$ServiceID = (int) $_POST['ServiceID'];
$BookDate =  $_POST['BookDate'];
echo $UserID;
mysqli_query($connect,"INSERT INTO `orders`(`UserID`, `MasterID`,`ServiceID`,`BookDate`) VALUES  ('$UserID','$MasterID','$ServiceID','$BookDate')");
header('Location: main.php ');
?>
