<?php
$connect = mysqli_connect('localhost','root','','BeautySalonDB');
if(!$connect) die("The database ins`t available.");

session_start();