<?php
session_start();

$username = $_POST['username'];
$password = $_POST['passwd'];

$xml = simplexml_load_file("users.xml");

if($xml->knimi == $username){
    if($xml->salasana == $password){
        $_SESSION['username'] = $username;
        $_SESSION['logged_in']  = true;
        header('location:index.php');
    }else{
        header('location:loginform.php?invalidpassword');
    }
}else{
    header('location:loginform.php?invalidusername');
}