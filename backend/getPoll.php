<?php

if(!isset($_GET['id'])){
    header('Location: ../index.php');
}

$pollid = $_GET['id'];

include_once 'pdo_connect.php';

try{

    $stmt = $conn->prepare("SELECT id, topic, start, end, user_id FROM poll WHERE id = :pollid");

    $stmt->bindParam(':pollid', $pollid);

    if($stmt->execute() == false){
        $data = array(
            'error' => 'Error'
        );
    }else{
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        $data = $result;
    }
} catch (PDOException $e)   {
    $data = array(
        'error' => 'Error'
    );
}

try{

    $stmt = $conn->prepare("SELECT id, name, votes FROM option WHERE poll_id = :pollid");
    $stmt->bindParam(':pollid', $pollid);

    if($stmt->execute() == false){
        $data = array(
            'error' => 'Error'
        );
    }else{
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $options = $result;
        $data['options'] = $options;
    }
} catch (PDOException $e)   {
    $data = array(
        'error' => 'Error'
    );
}

header("Content-type: application/json;charset=utf-8");
echo json_encode($data);