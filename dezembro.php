<?php

require_once("templetes/header.php") ;
require_once("templetes/header.php"); 
require_once("models/User.php"); 
require_once("dao/userDao.php"); 
require_once("selectsGerenca.php");

 $user = new User();
 $message = new Message($BASE_URL);
 $userDao = new UserDao($conn, $BASE_URL);
 $userData = $userDao->verifyToken(true);
?>

<?php if($user->getProfile($userData) == 1):?>

    <main class="main-container">
    <div class="btn-csv"><a href="csvDezembro.php">Gerar CSV do mês de Dezembro</a></div>
            <h2>Pesquisar por usuario:</h2>
            <form method="get" action="filtroDezembro.php">
                <select name="usuario" value="<?=$userName["name"]?> <?=$userName["lastname"]?>">
                    <?php  foreach($AllUsers as $userName): ?>
                        <option value="<?=$userName["name"]?> <?=$userName["lastname"]?>"><?=$userName["name"]?> <?=$userName["lastname"]?></option>
                    <?php endforeach;?>
                </select>
                <input type="submit" value="Buscar">
            </form>
            

    </main>

    <?php else:?>
        <?php $message->setMessage("Você não tem permissão para acessar essa pagina!!","erro" ,"painel.php");?>
        

<?php require_once("templetes/footer.php") ?>
<?php endif; ?>