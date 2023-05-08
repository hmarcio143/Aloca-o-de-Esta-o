<?php

require_once("models/data.php");
require_once("models/Message.php");
require_once("dao/dataDao.php");
require_once("dao/userDao.php");
require_once("globals.php");
require_once("bd.php");



 
$data = new data();
$message = new Message($BASE_URL);
$userDao = new UserDao($conn, $BASE_URL);
$dataDao = new dataDao($conn, $BASE_URL);
$type = filter_input(INPUT_GET,"type");
$userData = $userDao->verifyToken(true);



if($type === "delete"){

    $id = filter_input(INPUT_GET,"id");

     $query = "DELETE FROM julho WHERE id='$id'";
     $smtp = $conn->prepare($query);
     $smtp->execute();
     $message->setMessage("Alocação retirada com sucesso", "sucess", "painel.php");
}

?>