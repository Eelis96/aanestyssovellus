<?php

if(isset($_POST['submit'])){
    $poll_topic = $_POST['Aihe'];
    $poll_option1 = $_POST['vaihtoehto1'];
    $poll_option2 = $_POST['vaihtoehto2'];
    $poll_option3 = $_POST['vaihtoehto3'];
    $poll_time = $_POST['pituus'];

    if(empty($poll_topic) || empty($poll_option1) || empty($poll_option2) || empty($poll_option3) || empty($poll_time)){
        header('location:poll-create.php?empty');
    }else{

        $servername = "localhost";
        $db_username = "root";
        $db_password = "";
        $db = "pollappdb";

        try {
        $conn = new PDO("mysql:host=$servername;dbname=$db", $db_username, $db_password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
        } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        }

    }
        
   
    
}