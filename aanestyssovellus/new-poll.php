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
        
    }





    
}else{
    header('location:poll-create.php');
}