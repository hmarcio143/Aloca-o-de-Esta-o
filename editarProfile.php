<?php
require_once("globals.php");
require_once("./bd.php");
require_once("models/Message.php");
require_once("models/User.php"); 
require_once("dao/UserDao.php");
require_once("templetes/header.php");

$userDao = new UserDao($conn, $BASE_URL);
$userData = $userDao->verifyToken(true);

$message = new Message($BASE_URL);
$user = new User();

$userAll = [];
// $queryuser = "SELECT CONCAT(name,' ',lastname) from usuario";
$queryuser = "SELECT * from usuario";
$usuarios = $conn->prepare($queryuser);
$usuarios->execute();
$userAll = $usuarios->fetchAll();

$userAllId = [];
$queryuser = "SELECT * from usuario";
$usuarios = $conn->prepare($queryuser);
$usuarios->execute();
$userAllId = $usuarios->fetchAll();

// print_r($userAll[0]["name"]." ". $userAll[0]["lastname"]);




?>

<meta>
    <link rel="stylesheet" href="<?=$BASE_URL?>css/styles.css">
</meta>


<?php echo "<div class='table-filtro'>" ?>

<table>
<thead>
    <tr class="head-table">
        
        <th>usuario</th>
        <th>Perfil</th>
        <td>Ação</td>
     </tr>
</thead>
<tbody>


    
<?php foreach($userAll as $single):?>
    <tr class="celula">
            <td class="name-celular"><?=$single["name"]." ". $single["lastname"]?></td>  
            
            <?php if($single["profile"] == 1): ?>
            <td>Administrador</td>  
            <?php else: ?>
                <td>Usuario Padrão</td> 
            <?php endif;?>
             
        <td>
        <a class="btn-user" href="<?=$BASE_URL?>editUser.php?id=<?=$single['id']?>">Editar</a>
        </td>
        
        
    </tr>
<?php endforeach;?>        
</tbody>
</table>



