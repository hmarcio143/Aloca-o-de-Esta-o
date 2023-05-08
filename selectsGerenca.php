<?php
 require_once("templetes/header.php"); 


 $userData = $userDao->verifyToken(true);

 $AllUsers = [];
 $query = "SELECT name,lastname FROM usuario";
 $smtp = $conn->prepare($query);
 $smtp->execute();
 $AllUsers = $smtp->fetchAll();




 ?>