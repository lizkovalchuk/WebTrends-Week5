<?php

$hostname = '';
$dbname = 'lee-class';
$username = '' ;
$password = '';

try{
    $conn = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//    $results = $conn->query("SELECT * FROM week5")->fetchAll();
//    var_dump($result);

    $content = $conn->query("SELECT * FROM week5")->fetchAll(PDO::FETCH_ASSOC);
  //  var_dump($content);
    echo json_encode($content);
}
catch(PDOException $e){
    die(print_r($e));
}