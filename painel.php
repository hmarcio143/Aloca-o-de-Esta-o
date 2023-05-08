<?php
 require_once("templetes/header.php"); 
 require_once("models/User.php"); 
 require_once("models/data.php"); 
 require_once("dao/userDao.php"); 
 require_once("dao/dataDao.php");

 $user = new User();
 $data = new data();
 $userDao = new UserDao($conn, $BASE_URL);
 $dataDao = new dataDao($conn, $BASE_URL);
 $userData = $userDao->verifyToken(true);

?>

<?php if($user->getProfile($userData) == 1):?>

   <div class="title-painel">
   <h2>Consultar tabela do mês:</h2>
   <form>
      <select name="mes">
                    <option value="janeiro">Janeiro</option>
                    <option value="fevereiro">Fevereiro</option>
                    <option value="março">Março</option>
                    <option value="abril">Abril</option>
                    <option value="maio">Maio</option>
                    <option value="junho">Junho</option>
                    <option value="julho">Julho</option>
                    <option value="agosto">Agosto</option>
                    <option value="setembro">Setembro</option>
                    <option value="outubro">Outubro</option>
                    <option value="novembro">Novembro</option>
                    <option value="dezembro">Dezembro</option>
      </select>
      <input type="submit" value="Consultar"></input>
   </form>
</div>
      <?php else: ?>
          <!-- Filtro das tabelas para usuario padrão -->

<?php          
          
$hoje = date('m');
$dia = date('d');

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

echo "<div class='consult'>";

if($mesAtual == "Janeiro" && $dia >= 30){
   echo "<h2>Consultar tabela do mês</h2>";
   echo "<form>";
   echo "<select name='mes'>";       
   echo "<option value='Janeiro'>Janeiro</option>";
   echo "<option value='Fevereiro'>Fevereiro</option>";
   echo "</select>";
   echo "</select>";
   echo "<input type='submit' value='Consultar'></input>";
   echo "</form>";
}else if($mesAtual == "Fevereiro" && $dia == 28){
   echo "<h2>Consultar tabela do mês</h2>";
   echo "<form>";
   echo "<select name='mes'>";       
   echo "<option value='Fevereiro'>Fevereiro</option>";
   echo "<option value='Março'>Março</option>";
   echo "</select>";
   echo "</select>";
   echo "<input type='submit' value='Consultar'></input>";
   echo "</form>";

}else if($mesAtual == "Março" && $dia == 30){
    echo "<h2>Consultar tabela do mês</h2>";
    echo "<form>";
    echo "<select name='mes'>";       
    echo "<option value='Março'>Março</option>";
    echo "<option value='Abril'>Abril</option>";
    echo "</select>";
    echo "</select>";
    echo "<input type='submit' value='Consultar'></input>";
    echo "</form>";
 
 }else if($mesAtual == "Abril" && $dia == 30){
    echo "<h2>Consultar tabela do mês</h2>";
    echo "<form>";
    echo "<select name='mes'>";       
    echo "<option value='Abril'>Abril</option>";
    echo "<option value='Maio'>Maio</option>";
    echo "</select>";
    echo "</select>";
    echo "<input type='submit' value='Consultar'></input>";
    echo "</form>";
 }else if($mesAtual == "Maio" && $dia == 30){
    echo "<h2>Consultar tabela do mês</h2>";
    echo "<form>";
    echo "<select name='mes'>";       
    echo "<option value='Maio'>Maio</option>";
    echo "<option value='Junho'>Junho</option>";
    echo "</select>";
    echo "</select>";
    echo "<input type='submit' value='Consultar'></input>";
    echo "</form>";
 }else if($mesAtual == "Junho" && $dia == 30){
    echo "<h2>Consultar tabela do mês</h2>";
    echo "<form>";
    echo "<select name='mes'>";       
    echo "<option value='Junho'>Junho</option>";
    echo "<option value='Julho'>julho</option>";
    echo "</select>";
    echo "</select>";
    echo "<input type='submit' value='Consultar'></input>";
    echo "</form>";
 }else if($mesAtual == "Julho" && $dia == 30){
    echo "<h2>Consultar tabela do mês</h2>";
    echo "<form>";
    echo "<select name='mes'>";  
    echo "<option value='Julho'>julho</option>";     
    echo "<option value='Agosto'>Agosto</option>";
    echo "</select>";
    echo "</select>";
    echo "<input type='submit' value='Consultar'></input>";
    echo "</form>";
 }else if($mesAtual == "Agosto" && $dia == 30){
    echo "<h2>Consultar tabela do mês</h2>";
    echo "<form>";
    echo "<select name='mes'>";      
    echo "<option value='Agosto'>Agosto</option>";
    echo "<option value='Setembro'>Setembro</option>";
    echo "</select>";
    echo "</select>";
    echo "<input type='submit' value='Consultar'></input>";
    echo "</form>";
 }else if($mesAtual == "Setembro" && $dia == 30){
    echo "<h2>Consultar tabela do mês</h2>";
    echo "<form>";
    echo "<select name='mes'>";      
    echo "<option value='Setembro'>Setembro</option>";
    echo "<option value='Outubro'>Outubro</option>";
    echo "</select>";
    echo "</select>";
    echo "<input type='submit' value='Consultar'></input>";
    echo "</form>";
 }else if($mesAtual == "Outubro" && $dia == 30){
    echo "<h2>Consultar tabela do mês</h2>";
    echo "<form>";
    echo "<select name='mes'>";      
    echo "<option value='Outubro'>Outubro</option>";
    echo "<option value='Novembro'>Novembro</option>";
    echo "</select>";
    echo "</select>";
    echo "<input type='submit' value='Consultar'></input>";
    echo "</form>";
 }else if($mesAtual == "Novembro" && $dia == 30){
    echo "<h2>Consultar tabela do mês</h2>";
    echo "<form>";
    echo "<select name='mes'>";      
    echo "<option value='Novembro'>Novembro</option>";
    echo "<option value='Dezembro'>Dezembro</option>";
    echo "</select>";
    echo "</select>";
    echo "<input type='submit' value='Consultar'></input>";
    echo "</form>";
 }else if($mesAtual == "Dezembro" && $dia == 30){
    echo "<h2>Consultar tabela do mês</h2>";
    echo "<form>";
    echo "<select name='mes'>";      
    echo "<option value='Dezembro'>Dezembro</option>";
    echo "<option value='Janeiro'>Janeiro</option>";
    echo "</select>";
    echo "</select>";
    echo "<input type='submit' value='Consultar'></input>";
    echo "</form>";
 }

 echo "</div>";

?>
          
          
    <!-- Fim do else-->
    <?php endif?>



<?php $hoje = date('d/m/Y') ?>

<div class="title-painel">
   <?php if(!empty($_GET["mes"])):?>
   <h2>Tabelas do mês de <?= $_GET["mes"]?></h2>
   <?php else: ?>
      <?php include_once("vazio.php")?>
   <?php endif ?>
</div>

<main class="main-tabela">
   <?php include("tabelas.php")?>

</main>


<!-- <?php require_once("templetes/footer.php") ?> -->