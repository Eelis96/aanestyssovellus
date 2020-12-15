<?php

if(!isset($_GET['id'])){
    header('Location: ../index.php');
}


$poll_id = $_GET['id'];

include_once 'pdo_connect.php';

try{
    $stmt = $conn->prepare("DELETE FROM option WHERE poll_id = :pollid;");
    $stmt->bindParam(':pollid', $poll_id);

    if($stmt->execute() == false){
        $data = array(
            'error' => 'Error'
        );
    }else{
        $data = array(
            'success' => 'Success'
        );
    }

    $stmt = $conn->prepare("DELETE FROM poll WHERE id = :pollid;");
    $stmt->bindParam(':pollid', $poll_id);

    if($stmt->execute() == false){
        $data = array(
            'error' => 'Error'
        );
    }else{
        $data = array(
            'success' => 'Success'
        );
    }

} catch (PDOException $e)   {
    $data = array(
        'error' => 'Error'
    );
}
header("Content-type: application/json;charset=utf-8");
echo json_encode($data);

