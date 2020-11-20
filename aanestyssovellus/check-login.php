<?php
session_start();

    $username = trim($_POST['username']);

    $servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $db = "pollappusersdb";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$db", $db_username, $db_password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

        $stmt = $conn->prepare("SELECT `passwd` FROM `users` WHERE `username` = :username;");
        $stmt->bindParam(':username', $username);    
        $stmt->execute();
        
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $rows = $stmt->fetchAll();

        if (count($rows)){
            $passwd = $rows[0]['passwd'];
            if ( password_verify($_POST['passwd'], $passwd) ) {
                header('location:index.php');
                $_SESSION['username'] = $username;
                $_SESSION['logged_in']  = true;
            } else {
                header('location: loginform.php?invalidpassword');
            }
        }