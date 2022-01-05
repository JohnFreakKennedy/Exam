<?php
require_once 'DBConnection.php';
$user = mysqli_query($connect, "SELECT * FROM User");
$user = mysqli_fetch_all($user);

$order = mysqli_query($connect, "SELECT * FROM Orders");
$order = mysqli_fetch_all($order);

$master = mysqli_query($connect, "SELECT * FROM Master");
$master = mysqli_fetch_all($master);

$service = mysqli_query($connect, "SELECT * FROM Service");
$service = mysqli_fetch_all($service);


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Салон краси "Гарний півник"</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
<div class="button">
    <a href="logOut.php">Вийти з акаунту</a>
</div>
<table class="table">
    <tr>
        <th>OrderID</th>
        <th>UserID</th>
        <th>MasterID</th>
        <th>ServiceID</th>
        <th>BookDate</th>
    </tr>
    <?php
    foreach ($order as $key ) {
        ?>
        <tr>
            <td><?= $key[0] ?></td>
            <td><?= $key[1] ?></td>
            <td><?= $key[2] ?></td>
            <td><?= $key[3] ?></td>
            <td><?= $key[4] ?></td>
        </tr>
        <?php
    }
    ?>
</table>

<h3>Додати замовлення</h3>
<form class="" action="create.php" method="post">
    <p>ID Користувача</p>
    <input type="text" name="UserID">
    <p>ID Майстра</p>
    <input type="text" name="MasterID">
    <p>ID Послуги</p>
    <input type="text" name="ServiceID">
    <p>Час замовлення</p>
    <input type="datetime" name="BookDate">
    <button type="submit">Додати</button>
</form>
<br><br>
<table class="table">
    <tr>
        <th>ID Майстра</th>
        <th>Ім'я майстра</th>
        <th>Посада майстра</th>
    </tr>
    <?php
    foreach ($master as $key ) {
        ?>
        <tr>
            <td><?= $key[0] ?></td>
            <td><?= $key[1] ?></td>
            <td><?= $key[2] ?></td>
        </tr>
        <?php
    }
    ?>
</table>
<br><br>
<table class="table">
    <tr>
        <th>ID послуги</th>
        <th>Назва послуги</th>
        <th>Ціна послуги</th>
    </tr>
    <?php
    foreach ($service as $key ) {
        ?>
        <tr>
            <td><?= $key[0] ?></td>
            <td><?= $key[1] ?></td>
            <td><?= $key[2] ?></td>
        </tr>
        <?php
    }
    ?>
</table>

</body>
</html>



