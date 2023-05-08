<?php
require_once("globals.php");
require_once("./bd.php");
require_once("models/Message.php");
require_once("models/User.php"); 
require_once("dao/UserDao.php");
require_once("templetes/header.php");


$idUser = $_GET["id"];

$userDao = new UserDao($conn, $BASE_URL);
$userData = $userDao->verifyToken(true);

$message = new Message($BASE_URL);
$user = new User();


$userAll = [];
// $queryuser = "SELECT CONCAT(name,' ',lastname) from usuario";
$queryuser = "SELECT * from usuario WHERE id='$idUser'";
$usuarios = $conn->prepare($queryuser);
$usuarios->execute();
$userAll = $usuarios->fetch();

print_r($userAll['id']);

?>


<main class="main-container">
        <h1>Editar usuario</h1>
        <div class="form">
            <form method="post" action="login_process.php">
                <input type="hidden" name="type" value="update">
                <input type="hidden" name="id" value="<?=$userAll['id']?>">
                
                <input type="text" name="name" value="<?= $userAll['name']?>">
                <input type="text" name="lastname" value="<?= $userAll['lastname']?>">
                <input type="email" name="email"  value="<?= $userAll['email']?>">
                <input type="text" name="password"  value="<?= $userAll['password']?>" >
                <input type="text" name="confirmPassword"  value="<?= $userAll['password']?>" >
                <label>Perfil do usuario:</label>
                <select name="profile">
                    <option value="2">Padrão - usuario</opition>
                    <option value="1">Adiministrador</opition>
                </select>
                <input type="submit" value="Editar usuario">
                
            </form>

            <div class="div-userDelete">
                <a class="btn-userDelete" href="<?=$BASE_URL?>confirmDelete.php?id=<?=$userAll['id']?>">Deletar usuario</a>
            </div>

          
           
        </div>
    </main>