<?php
 require_once("templetes/header.php"); 
 require_once("models/User.php"); 
 require_once("models/data.php"); 
 require_once("dao/userDao.php"); 
 require_once("dao/dataDao.php");


?>

<?php $hoje = date('m');

switch($hoje){

    case 1:
        $mesAtual = "Janeiro";
        break;
    case 2:
        $mesAtual = "Fevereiro";
        break;
    case 3:
        $mesAtual = "Março";
        break;
    case 4:
        $mesAtual = "Abril";
        break;
    case 5:
        $mesAtual = "Maio";
        break;
    case 6:
        $mesAtual = "Junho";
        break;
    case 7:
        $mesAtual = "Julho";
        break;
    case 8:
        $mesAtual = "Agosto";
        break;
    case 9:
        $mesAtual = "Setembro";
        break;
    case 10:
        $mesAtual = "Outubro";
        break;
    case 11:
        $mesAtual = "Novembro";
        break;
    case 12:
        $mesAtual = "Dezembro";
        break;
        
}
?>


<h2>Tabelas do mês de <?= $mesAtual ?></h2>

<main class="main-tabela">
    <?php include("tabelasVazio.php")?>
</main>

