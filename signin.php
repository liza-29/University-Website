<?php
session_start();

if (isset($_SESSION['id'])) {
  header("location: dashboard.php");
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.104.2">
  <title>Login Panel</title>

  <link rel="stylesheet" href="css/signin.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .b-example-divider {
      height: 3rem;
      background-color: rgba(0, 0, 0, .1);
      border: solid rgba(0, 0, 0, .15);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -.125em;
      fill: currentColor;
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }
  </style>
  <link href="signin.css" rel="stylesheet">
</head>

<body class="text-center">

  <main class="form-signin w-100 m-auto">
    <form method="POST" action="signInMaintain.php">
      <a href="index.php">
        <img class="mb-4" src="./img/logo.png" alt="" height="57">
      </a>
      <h1 class="h3 mb-3 fw-normal">Sign In Panel</h1>

      <div class="form-floating">
        <input name="email" type="email" class="form-control">
        <label>Email address</label>
      </div>
      <div class="form-floating">
        <input name="password" type="password" class="form-control">
        <label>Password</label>
      </div>
      <div class="text-danger">
        <?= $_GET['error'] ?? '' ?>
      </div>
      <button class="w-100 mt-3  btn btn-lg btn-primary" name="signin" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; <?= date('Y') ?></p>
    </form>
  </main>



</body>

</html>