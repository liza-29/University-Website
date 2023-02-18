<?php
include './include/mysql.php';

if (isset($_POST['add_admin'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT into admin (name, email, password) values ('$name', '$email', '$password')";
    $connection->query($sql);
    header('Location: admin.php');
}

if (isset($_GET['delete'])) {
    $sql = "delete from admin where id=$_GET[id]";
    $connection->query($sql);
    header('Location: admin.php');
}
