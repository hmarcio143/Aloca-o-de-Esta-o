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
        <nav class="nav-gerenciar">
            <a href="<?= $BASE_URL?>janeiro.php">Janeiro</a>
            <a href="<?= $BASE_URL?>fevereiro.php">Fevereiro</a>
            <a href="<?= $BASE_URL?>marco.php">Março</a>
            <a href="<?= $BASE_URL?>abril.php">Abril</a>
            <a href="<?= $BASE_URL?>maio.php">Maio</a>
            <a href="<?= $BASE_URL?>junho.php">Junho</a>
            <a href="<?= $BASE_URL?>julho.php">Julho</a>
            <a href="<?= $BASE_URL?>agosto.php">Agosto</a>
            <a href="<?= $BASE_URL?>setembro.php">Setembro</a>
            <a href="<?= $BASE_URL?>outubro.php">Outubro</a>
            <a href="<?= $BASE_URL?>novembro.php">Novembro</a>
            <a href="<?= $BASE_URL?>dezembro.php">Dezembro</a>
        </nav>
            

    </main>

    <?php else:?>
        <?php $message->setMessage("Você não tem permissão para acessar essa pagina!!","erro" ,"painel.php");?>
        

<?php require_once("templetes/footer.php") ?>
<?php endif; ?>