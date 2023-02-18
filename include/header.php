<?php
session_start();

if (!isset($_SESSION['name'])) {
    header('location: signin.php');
}
$url = $_SERVER['PHP_SELF'];
$url = explode('/', $url);
$url = array_reverse($url);
$url = $url[0];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="css/buttons.dataTables.min.css">


    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/dashboard.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <style>
        .btn {
            margin-bottom: 5px;

        }
    </style>

    <title>Admin Panel</title>
</head>

<body>


    <section id="dashboard" class="d-flex align-items-stretch flex-row">
        <div id="sidebar">
            <div class="logo">
                <a href="dashboard.php"><img src="img/logo.png" alt="" /></a>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="dashboard.php" <?php if ($url == 'dashboard.php') : ?>class="active" <?php endif ?>>Dashboard</a></li>
                    <li><a href="faculty.php" <?php if ($url == 'faculty.php') : ?>class="active" <?php endif ?>>Faculty</a></li>
                    <li><a href="department.php" <?php if ($url == 'department.php') : ?>class="active" <?php endif ?>>Department</a></li>
                    <li><a href="program.php" <?php if ($url == 'program.php') : ?>class="active" <?php endif ?>>Program</a></li>
                    <li><a href="semister.php" <?php if ($url == 'semister.php') : ?>class="active" <?php endif ?>>Semister</a></li>
                    <li><a href="all_student.php" <?php if ($url == 'all_student.php') : ?>class="active" <?php endif ?>>Student</a></li>
                    <li><a href="admin.php" <?php if ($url == 'admin.php') : ?>class="active" <?php endif ?>>Admin</a></li>

                </ul>
            </div>
        </div>
        <div id="right-section">
            <div id="top-nav">
                <div class="d-flex justify-content-between">
                    <div class="text-light lead">
                        DEVELOPED BY: LIZA AKTER <span class="mx-3">|</span> ID: 201-011-004
                    </div>

                    <div class="user-panel text-end">
                        <b class="me-3 text-light"> <?= $_SESSION['name'] ?></b>
                        <a href="index.php" class="btn btn-warning">View Website</a>
                        <a href="changepass.php" class="btn btn-primary">Change Password</a>
                        <a href="logout.php" class="btn btn-danger">Logout</a>
                    </div>
                </div>
            </div>
            <div class="content p-3">