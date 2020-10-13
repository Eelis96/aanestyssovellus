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
            <a class="btn btn-outline-info" href="index.php">Etusivu</a>
        </li>
        <li class="nav-item">
            <?php if(!isset($_SESSION['logged_in']))
                {
                    echo '<a class="btn btn-outline-info" href="loginform.php">Kirjaudu Sisään</a>';
                }
                else
                {
                    echo '<a class="btn btn-outline-info" href="logout.php">Kirjaudu Ulos</a>';
                }?>
        </li>
        </ul>
    </div>
    </nav>

    <div class="jumbotron">
        <h1>Äänestyksen Luominen</h1>
    </div>

            <form action="new-poll.php" method="POST">
        <div class="container">
                <h2>Uusi Äänestys</h2>
                <label for="Aihe">Aihe</label>
                <input type="text" name="Aihe"><br>
                <label for="pituus">Pituus (min)</label>
                <input type="number" name="pituus" min="10" max="60"><br>
                <label for="vaihtoehto1">Vaihtoehto 1</label><br>
                <input type="text" name="vaihtoehto1" ><br>
                <label for="vaihtoehto2">Vaihtoehto 2</label><br>
                <input type="text" name="vaihtoehto2" ><br>
                <div id="lisaa-vaihtoehtoja" style="display:none">
                    <label for="vaihtoehto3">Vaihtoehto 3</label><br>
                    <input type="text" name="vaihtoehto3" ><br>
                    <label for="vaihtoehto4">Vaihtoehto 4</label><br>
                    <input type="text" name="vaihtoehto4" ><br><br>
                </div>
                <input type="submit" name="submit" value="Luo Uusi Äänestys"><br><br>
            </form>
            
            <button id="lisaa-vaihtoehtoja-nappi" class="btn btn-outline-primary" onclick="lisaaKenttia()">Lisää Vaihtoehtoja</button><br>
        </div>



<script>

    function lisaaKenttia(){
        var x = document.getElementById("lisaa-vaihtoehtoja");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
    
</script>

</body>
</html>