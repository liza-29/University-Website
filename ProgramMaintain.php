<?php
include 'include/mysql.php';
if (isset($_POST['add_program'])) {
    $program_Name = $_POST['program_Name'];
    $program_code = $_POST['program_code'];
    $department_id = $_POST['department_id'];

    $sql = "INSERT INTO program (program_Name,program_code,department_id) values ('$program_Name','$program_code',$department_id)";
    $connection->query($sql);
    header('location:program.php');
}

if (isset($_GET['delete'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM program WHERE id=$id";
    $connection->query($sql);
    header('location:program.php');
}
