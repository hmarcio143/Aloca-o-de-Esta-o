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



<div class="title-painel">
<h2>Qual usuario deseja alocar?</h2>
<form method="post" action="alocacao_process.php">
    <input type="hidden" name="type" value="alocarUsuarioAdm">

    <select name="dia">
                <?php for($i = 1; $i <= 31; $i++ ):?>
                            <option value="<?=$i?>"><?=$i?></option>
                <?php endfor ?>
    </select>
   <select name="mes">
                 <option value="Janeiro">Janeiro</option>
                 <option value="Fevereiro">Fevereiro</option>
                 <option value="Março">Março</option>
                 <option value="Abril">Abril</option>
                 <option value="Maio">Maio</option>
                 <option value="Junho">Junho</option>
                 <option value="Julho">Julho</option>
                 <option value="Agosto">Agosto</option>
                 <option value="Setembro">Setembro</option>
                 <option value="Outubro">Outubro</option>
                 <option value="Novembro">Novembro</option>
                 <option value="Dezembro">Dezembro</option>
   </select>

   <select name="ano">
                <option value="2023">2023</option>
                </select>

                <select name="usuario" value="<?=$userName["name"]?> <?=$userName["lastname"]?>">
                    <?php  foreach($AllUsers as $userName): ?>
                        <option value="<?=$userName["name"]?> <?=$userName["lastname"]?>"><?=$userName["name"]?> <?=$userName["lastname"]?></option>
                    <?php endforeach;?>
                </select>


   <input type="submit" value="Alocar usuario"></input>
</form>
</div>
</main>
<?php endif?>