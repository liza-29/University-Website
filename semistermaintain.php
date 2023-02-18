<?php
include 'include/mysql.php';
if (isset($_POST['add_semister'])) {
    $semister_name = $_POST['semister_name'];
    $semister_code = $_POST['semister_code'];
    $status = $_POST['status'];
    $sql = "INSERT INTO semister (`semister_name`,`status`, semister_code) values ('$semister_name','$status', '$semister_code')";
    $connection->query($sql);
    header('location:semister.php');
}

if (isset($_GET['delete'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM semister WHERE id=$id";
    $connection->query($sql);
    header('location:semister.php');
}

if (isset($_GET['status'])) {
    $status = $_GET['status'];
    $id = $_GET['id'];
    $sql = "update semister set status='$status' where id=$id";
    $connection->query($sql);
    header('location:semister.php');
}
