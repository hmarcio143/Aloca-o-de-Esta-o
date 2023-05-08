<?php
require_once("globals.php");
require_once("./bd.php");
require_once("models/Message.php");
require_once("models/User.php"); 
require_once("dao/UserDao.php");

$userDao = new UserDao($conn, $BASE_URL);
$userData = $userDao->verifyToken(true);

$message = new Message($BASE_URL);
$user = new User();

    $flassMensage = $message->getMessage();


    if(!empty($flassMensage["msg"])){

        $message->clearMesager();
    }

    if($user->getProfile($userData) == 1){

        $perfil = "Administrador";
    }else{
        $perfil = "Usuario Padrão";
    }

?>


<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=$BASE_URL?>css/styles.css">

    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>Página inicial</title>
</head>
<body>
<nav class="nav-header">
    <h4><?= $user->getFullName($userData)?> | <?= $perfil?></h4>

   


    <?php if($user->getProfile($userData) == 1):?>
                <a href="<?=$BASE_URL?>painel.php">Inicio</a>
                <a href="<?=$BASE_URL?>registro.php">Cadastrar usuario</a>
                <a href="<?=$BASE_URL?>editarProfile.php">Editar usuario</a>
                <a href="<?=$BASE_URL?>alocar.php">Solicitar Alocação</a>
                <a href="<?=$BASE_URL?>alocarUsuario.php">Alocar usuarios</a>
                <a href="<?=$BASE_URL?>gerenciar.php">Gerenciar</a>
                <a href="<?=$BASE_URL?>logof.php">Sair da conta</a>
                <?php else: ?>
                    <a href="<?=$BASE_URL?>painel.php">Inicio</a>
                    <a href="<?=$BASE_URL?>alocar.php">Solicitar Alocação</a>
                    <a href="<?=$BASE_URL?>logof.php">Sair da conta</a>
                        
    <?php endif?>

</nav>

<?php if(!empty($flassMensage["msg"])):?>

<div class="msg-container">
    <p class="msg-<?= $flassMensage["type"] ?>"><?= $flassMensage["msg"] ?></p>
</div>
<?php endif ?>



                
    