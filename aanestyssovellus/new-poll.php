<?php

if(isset($_POST['submit'])){
    $poll_topic = $_POST['Aihe'];
    $poll_option1 = $_POST['vaihtoehto1'];
    $poll_option2 = $_POST['vaihtoehto2'];
    $poll_option3 = $_POST['vaihtoehto3'];
    $poll_option4 = $_POST['vaihtoehto4'];

    if(empty($poll_topic) || empty($poll_option1) || empty($poll_option2)){
        echo '<div class="alert alert-dismissible alert-danger">
            <strong>Täytä kaikki tyhjät kentät!</strong>
            </div>';
    }else{
        if(empty($poll_option3) || empty($poll_option4)){
            echo '<div class="alert alert-dismissible alert-danger">
            <strong>Täytä kaikki tyhjät kentät!</strong>
            </div>';
        }else if(!empty($poll_option3) && !empty($poll_option4)){
            header('location:index.php');
        }

    }
}else{
    header('location:poll-create.php');
}