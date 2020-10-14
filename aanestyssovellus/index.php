<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
            <a class="btn btn-warning" href="poll-create.php">Luo Äänestys</a>
      </li>
      <li class="nav-item">
            <?php if(!isset($_SESSION['logged_in']))
                {
                    echo '<a class="btn btn-warning" href="loginform.php">Kirjaudu Sisään</a>';
                }
                else
                {
                    echo '<a class="btn btn-danger" href="logout.php">Kirjaudu Ulos</a>';
                }?>
      </li>
    </ul>
  </div>
</nav>

    <div class="jumbotron">
        <h1>Äänestyssovellus</h1>
    </div>






</body>
</html>