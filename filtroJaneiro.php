<?php
require_once("templetes/header.php") ;
require_once("janeiro.php");
require_once("models/data.php");
$data = new Data();

///Gerar csv






if($_GET){

    $name = strval($_GET['usuario']);

    $singleUser = [];
    $query = "SELECT id,dia,mes,name FROM janeiro WHERE name = '$name' ORDER BY dia ";
    $smtp = $conn->prepare($query);
    $smtp->execute();
    $singleUser = $smtp->fetchAll();

    $QtdLocacao = [];
    $qtd = "SELECT COUNT(name) FROM janeiro WHERE name='$name'";
    $smtp = $conn->prepare($qtd);
    $smtp->execute();
    $QtdLocacao = $smtp->fetch();
    $qtdResult = intval($QtdLocacao["COUNT(name)"]);


}else{

    echo "Nenhuma busca realizada";
}
?>

<meta>
    <link rel="stylesheet" href="<?=$BASE_URL?>css/styles.css">
</meta>

<?php  if($_GET): ?>

<?php echo "<div class='table-filtro'>" ?>
<table>
<thead>
    <tr class="head-table">
        <th>Dia</th>
        <th>Mes</th>
        <th>Usuario</th>
        <th>Ações</th>
     </tr>
</thead>
<tbody>
    
<!-- Resultado do SELECT -->
<?php foreach($singleUser as $single):?>
    <tr class="celula">
        <td><?=$single["dia"]?></td>
        <td><?=$single["mes"]?></td>
        <td><?=$single["name"]?></td>
        <td>
            <form method="get" action="deleteAlocacaoJaneiro.php">
                <input type="hidden" name="type" value="delete">
                <input type="hidden" name="id" value="<?= $single["id"]?>">
                <input class="btn-alocar" type="submit" value="Retirar Alocação">
            </form>
        </td>
        
        
    </tr>
<?php endforeach;?>        
</tbody>
</table>
<h3>Quantidade de alocaçoes no mês:</h3>
<p><?= $qtdResult?></p>
<?php echo "</div>" ?>
<?php endif?>


