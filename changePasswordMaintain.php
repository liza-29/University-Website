<?php
session_start();
include './include/mysql.php';

if (isset($_POST['change_password'])) {
    $old_password = $_POST['old_password'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    if ($old_password != $_SESSION['password']) {
        header('location: changepass.php?olderror=Old Password does not match.');
    } elseif ($new_password != $confirm_password) {
        header('location: changepass.php?newerror=New Password does not match');
    }

    $sql = "update admin set password='$new_password' where id=" . $_SESSION['id'];
    $connection->query($sql);
    header('location: logout.php');
}
