<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login System</title>
  <!-- bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- custom styles -->
  <link rel="stylesheet" href="style.css">

</head>
<body>
<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#" >
      Login It In
    </a>
    <ul class="navbar-nav mr-auto">
      <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Portfolio</a></li>
      <li class="nav-item"><a class="nav-link" href="#">About me</a></li>
      <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
    </ul>
    <div>
      <form class="form-inline my-2 my-lg-0" action="includes/login.inc.php" method="post">
        <input class="form-control" name="mailuid" type="text" placeholder="Username/Email..." require>
        <input class="form-control" type="password" name="pwd" placeholder="Password">
        <button class="btn btn-outline-success" type="submit" name="login-submit">Login</button>
      </form>
      <a href="signup.php" class="nav-link">Signup</a>
      <form class="form-inline my-2 my-lg-0" action="includes/logout.inc.php" method="post">
        <button class="btn btn-outline-danger" type="submit" name="logout-submit">Logout</button>
      </form>
    </div>
  </nav>
</header>