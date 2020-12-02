<?php
if(!isset($_POST['username']) || !isset($_POST['password'])){
    $data = array(
      'error' => 'POST-dataa ei saatavilla'  
    );

    die();
}

$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

include_once 'pdo_connect.php';

try{
    $stmt = $conn->prepare("INSERT INTO user (username, pwd) VALUES (:username, :pwd)");
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':pwd', $password);
    if($stmt->execute() == false){
        echo 'tallennus epäonnistui';
    }else {
        $data = array(
            'success' => 'Uusi Käyttäjä On Tallennettu'
        );
    }
} catch (PDOException $e)   {
    if(strpos($e->getMessage(), '1062 Duplicate entry')){
        $data = array(
            'error' => 'Käyttäjä on jo olemassa!'
        );
    }else{
        $data = array(
            'error' => 'Tapahtui virhe tallennuksessa'
        );
    }

}
header("Content-type: application/json;charset=utf-8");
echo json_encode($data);