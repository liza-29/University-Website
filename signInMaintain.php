<?php
session_start();
include 'include/mysql.php';

if (isset($_POST['signin'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "select *from admin where email='$email' and password='$password'";
    $admin = $connection->query($sql);
    $user = mysqli_fetch_array($admin);
    if (mysqli_num_rows($admin) == 1) {
        $_SESSION['id'] = $user['id'];
        $_SESSION['name'] = $user['name'];
        $_SESSION['password'] = $user['password'];
        header('location: dashboard.php');
    } else {
        header('location: signin.php?error=Username or password invalid');
    }
}
