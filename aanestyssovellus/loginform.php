<?php
session_start();
if (isset($_SESSION['logged_in'])) {
    header('Location: ./');
    exit;
}
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
            <a class="btn btn-secondary" href="index.php">Etusivu</a>
      </li>
      <li class="nav-item">
            <a class="btn btn-secondary" href="poll-create.php">Luo Äänestys</a>
      </li>
    </ul>
  </div>
</nav>

<div class="jumbotron">
        <h1>Kirjautuminen</h1>
    </div>

    <?php
            if(isset($_GET['invalidpassword'])){
                echo'<div class="alert alert-dismissible alert-danger">
                <strong>Väärä Salasana!</strong></div>';
            }
        
            if(isset($_GET['invalidusername'])){
                echo'<div class="alert alert-dismissible alert-danger">
                <strong>Väärä Käyttäjänimi!</strong></div>';
            }
    ?>

    <div class="container">
        <form action="check-login.php" method="post">
            <div class="form-group">
                <label for="code">Käyttäjänimi</label>
                <input class="form-control" type="text" name="username">
                
                <label for="code">Salasana</label>
                <input class="form-control" type="password" name="passwd">
            </div>
            <input class="btn btn-outline-primary" type="submit" value="Kirjaudu Sisään">
        </form>
    </div>

</body>
</html>