<?php
include 'include/mysql.php';
if (isset($_POST['add_faculty'])) {
    $name = $_POST['name'];

    $sql = "INSERT INTO faculty (faculty_name) values ('$name')";
    $connection->query($sql);
    header('location:faculty.php');
}

if (isset($_GET['delete'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM faculty WHERE id=$id";
    $connection->query($sql);
    header('location:faculty.php');
}
