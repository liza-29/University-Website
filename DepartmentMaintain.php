<?php
include 'include/mysql.php';
if (isset($_POST['add_department'])) {
    $name = $_POST['name'];
    $faculty_id = $_POST['faculty_id'];

    $sql = "INSERT INTO department (department_name,faculty_id) values ('$name',$faculty_id)";
    $connection->query($sql);
    header('location:department.php');
}

if (isset($_GET['delete'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM department WHERE id=$id";
    $connection->query($sql);
    header('location:department.php');
}
