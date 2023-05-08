<?php

require_once("templetes/header.php") ;
require_once("templetes/header.php"); 
require_once("models/User.php"); 
require_once("dao/userDao.php"); 

$user = new User();
$message = new Message($BASE_URL);
$userDao = new UserDao($conn, $BASE_URL);
$userData = $userDao->verifyToken(true);


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
?>
<main class="main-container">  

    <!-- Janeiro -->
        <?php if($mesAtual == "Janeiro"):?> 
            <h2>Qual dia deseja alocar-se?</h2>
        <div>
            <p>Qua dia deseja de alocar?</p>
            
             <form method="post" action="alocacao_process.php">
                <input type="hidden" name="type" value="createAlocacao">
                <input type="hidden" name="user_id" value="<?=$user->getId($userData)?>">
                <input type="hidden" name="name" value="<?=$user->getFullName($userData)?>">
                <select name="dia">
                    <?php for($i = $dia; $i <= 31; $i++ ):?>
                            <option value="<?=$i?>"><?=$i?></option>
                    <?php endfor ?>
                </select>
                <select name="mes">       
                        <option value="Janeiro">Janeiro</option>
                </select>
                <select name="ano">
                <option value="2023">2023</option>
                </select>
                <input class="btn-alocar" type="submit" value="alocar-se">
            </form>
        </div> 
        <br><br>
            <?php if($dia >= 29): ?>
                <form method="post" action="alocacao_process.php">
                <input type="hidden" name="type" value="createAlocacao">
                    <input type="hidden" name="user_id" value="<?=$user->getId($userData)?>">
                    <input type="hidden" name="name" value="<?=$user->getFullName($userData)?>">
                    <select name="dia">
                        <?php for($i = 1; $i <= 28; $i++ ):?>
                                <option value="<?=$i?>"><?=$i?></option>
                        <?php endfor ?>
                    </select>
                    <select name="mes">       
                            <option value="Fevereiro">Fevereiro</option>
                    </select>
                    <select name="ano">
                    <option value="2023">2023</option>
                    </select>
                    <input class="btn-alocar" type="submit" value="alocar-se">
                </form>
            <?php endif;?>
        <?php endif;?>

        <!-- Fevereiro -->
        <?php if($mesAtual == "Fevereiro"):?> 
            <h2>Qual dia deseja alocar-se?</h2>
        <div>
            <p>Qua dia deseja de alocar?</p>  
             <form method="post" action="alocacao_process.php">
            <input type="hidden" name="type" value="createAlocacao">
                <input type="hidden" name="user_id" value="<?=$user->getId($userData)?>">
                <input type="hidden" name="name" value="<?=$user->getFullName($userData)?>">
                <select name="dia">
                    <?php for($i = $dia; $i <= 28; $i++ ):?>
                            <option value="<?=$i?>"><?=$i?></option>
                    <?php endfor ?>
                </select>
                <select name="mes">       
                        <option value="Fevereiro">Fevereiro</option>
                </select>
                <select name="ano">
                <option value="2023">2023</option>
                </select>
                <input class="btn-alocar" type="submit" value="alocar-se">
            </form>

            <br><br>
        <?php if($dia >= 26): ?>
            <form method="post" action="alocacao_process.php">
            <input type="hidden" name="type" value="createAlocacao">
                <input type="hidden" name="user_id" value="<?=$user->getId($userData)?>">
                <input type="hidden" name="name" value="<?=$user->getFullName($userData)?>">
                <select name="dia">
                    <?php for($i = 1; $i <= 28; $i++ ):?>
                            <option value="<?=$i?>"><?=$i?></option>
                    <?php endfor ?>
                </select>
                <select name="mes">       
                        <option value="Fevereiro">Fevereiro</option>
                </select>
                <select name="ano">
                <option value="2023">2023</option>
                </select>
                <input class="btn-alocar" type="submit" value="alocar-se">
            </form>   
        </div> 
        <?php endif;?>
        <?php endif;?>


        <!-- Março -->
        <?php if($mesAtual == "Março"):?> 
            <h2>Qual dia deseja alocar-se?</h2> 
        <div>
            <p>Qua dia deseja de alocar?</p>  
             <form method="post" action="alocacao_process.php">
            <input type="hidden" name="type" value="createAlocacao">
                <input type="hidden" name="user_id" value="<?=$user->getId($userData)?>">
                <input type="hidden" name="name" value="<?=$user->getFullName($userData)?>">
                <select name="dia">
                    <?php for($i = $dia; $i <= 31; $i++ ):?>
                            <option value="<?=$i?>"><?=$i?></option>
                    <?php endfor ?>
                </select>
                <select name="mes">       
                        <option value="Março">Março</option>
                </select>
                <select name="ano">
                <option value="2023">2023</option>
                </select>
                <input class="btn-alocar" type="submit" value="alocar-se">
            </form>
        </div> 
        <br><br>
        <?php if($dia >= 29): ?>
            <form method="post" action="alocacao_process.php">
            <input type="hidden" name="type" value="createAlocacao">
                <input type="hidden" name="user_id" value="<?=$user->getId($userData)?>">
                <input type="hidden" name="name" value="<?=$user->getFullName($userData)?>">
                <select name="dia">
                    <?php for($i = 1; $i <= 28; $i++ ):?>
                            <option value="<?=$i?>"><?=$i?></option>
                    <?php endfor ?>
                </select>
                <select name="mes">       
                        <option value="Abril">Abril</option>
                </select>
                <select name="ano">
                <option value="2023">2023</option>
                </select>
                <input class="btn-alocar" type="submit" value="alocar-se">
            </form>   
        </div> 
        <?php endif;?>
        <?php endif;?>

        <!-- Abril -->
        <?php if($mesAtual == "Abril"):?> 
            <h2>Qual dia deseja alocar-se?</h2> 
        <div>
            <p>Qua dia deseja de alocar?</p>  
             <form method="post" action="alocacao_process.php">
            <input type="hidden" name="type" value="createAlocacao">
                <input type="hidden" name="user_id" value="<?=$user->getId($userData)?>">
                <input type="hidden" name="name" value="<?=$user->getFullName($userData)?>">
                <select name="dia">
                    <?php for($i = $dia; $i <= 31; $i++ ):?>
                            <option value="<?=$i?>"><?=$i?></option>
                    <?php endfor ?>
                </select>
                <select name="mes">       
                        <option value="Abril">Abril</option>
                </select>
                <select name="ano">
                <option value="2023">2023</option>
                </select>
                <input class="btn-alocar" type="submit" value="alocar-se">
            </form>
        </div> 
        <br><br>
        <?php if($dia >= 29): ?>
            <form method="post" action="alocacao_process.php">
            <input type="hidden" name="type" value="createAlocacao">
                <input type="hidden" name="user_id" value="<?=$user->getId($userData)?>">
                <input type="hidden" name="name" value="<?=$user->getFullName($userData)?>">
                <select name="dia">
                    <?php for($i = 1; $i <= 28; $i++ ):?>
                            <option value="<?=$i?>"><?=$i?></option>
                    <?php endfor ?>
                </select>
                <select name="mes">       
                        <option value="Maio">Maio</option>
                </select>
                <select name="ano">
                <option value="2023">2023</option>
                </select>
                <input class="btn-alocar" type="submit" value="alocar-se">
            </form>   
        </div> 
        <?php endif;?>
        <?php endif;?>


        <!-- Maio -->
        <?php if($mesAtual == "Maio"):?> 
            <h2>Qual dia deseja alocar-se?</h2> 
        <div>
            <p>Qua dia deseja de alocar?</p>  
             <form method="post" action="alocacao_process.php">
            <input type="hidden" name="type" value="createAlocacao">
                <input type="hidden" name="user_id" value="<?=$user->getId($userData)?>">
                <input type="hidden" name="name" value="<?=$user->getFullName($userData)?>">
                <select name="dia">
                    <?php for($i = $dia; $i <= 31; $i++ ):?>
                            <option value="<?=$i?>"><?=$i?></option>
                    <?php endfor ?>
                </select>
                <select name="mes">       
                        <option value="Maio">Maio</option>
                </select>
                <select name="ano">
                <option value="2023">2023</option>
                </select>
                <input class="btn-alocar" type="submit" value="alocar-se">
            </form>
        </div> 
        <br><br>
        <?php if($dia >= 29): ?>
            <form method="post" action="alocacao_process.php">
            <input type="hidden" name="type" value="createAlocacao">
                <input type="hidden" name="user_id" value="<?=$user->getId($userData)?>">
                <input type="hidden" name="name" value="<?=$user->getFullName($userData)?>">
                <select name="dia">
                    <?php for($i = 1; $i <= 28; $i++ ):?>
                            <option value="<?=$i?>"><?=$i?></option>
                    <?php endfor ?>
                </select>
                <select name="mes">       
                        <option value="Junho">Junho</option>
                </select>
                <select name="ano">
                <option value="2023">2023</option>
                </select>
                <input class="btn-alocar" type="submit" value="alocar-se">
            </form>   
        </div> 
        <?php endif;?>
        <?php endif;?>

        <!-- Junho -->
        <?php if($mesAtual == "Junho"):?> 
            <h2>Qual dia deseja alocar-se?</h2> 
        <div>
            <p>Qua dia deseja de alocar?</p>  
             <form method="post" action="alocacao_process.php">
            <input type="hidden" name="type" value="createAlocacao">
                <input type="hidden" name="user_id" value="<?=$user->getId($userData)?>">
                <input type="hidden" name="name" value="<?=$user->getFullName($userData)?>">
                <select name="dia">
                    <?php for($i = $dia; $i <= 31; $i++ ):?>
                            <option value="<?=$i?>"><?=$i?></option>
                    <?php endfor ?>
                </select>
                <select name="mes">       
                        <option value="Junho">Junho</option>
                </select>
                <select name="ano">
                <option value="2023">2023</option>
                </select>
                <input class="btn-alocar" type="submit" value="alocar-se">
            </form>
        </div> 
        <br><br>
        <?php if($dia >= 29): ?>
            <form method="post" action="alocacao_process.php">
            <input type="hidden" name="type" value="createAlocacao">
                <input type="hidden" name="user_id" value="<?=$user->getId($userData)?>">
                <input type="hidden" name="name" value="<?=$user->getFullName($userData)?>">
                <select name="dia">
                    <?php for($i = 1; $i <= 28; $i++ ):?>
                            <option value="<?=$i?>"><?=$i?></option>
                    <?php endfor ?>
                </select>
                <select name="mes">       
                        <option value="Julho">Julho</option>
                </select>
                <select name="ano">
                <option value="2023">2023</option>
                </select>
                <input class="btn-alocar" type="submit" value="alocar-se">
            </form>   
        </div> 
        <?php endif;?>
        <?php endif;?>

         <!-- Julho -->
         <?php if($mesAtual == "Julho"):?> 
            <h2>Qual dia deseja alocar-se?</h2> 
        <div>
            <p>Qua dia deseja de alocar?</p>  
             <form method="post" action="alocacao_process.php">
            <input type="hidden" name="type" value="createAlocacao">
                <input type="hidden" name="user_id" value="<?=$user->getId($userData)?>">
                <input type="hidden" name="name" value="<?=$user->getFullName($userData)?>">
                <select name="dia">
                    <?php for($i = $dia; $i <= 31; $i++ ):?>
                            <option value="<?=$i?>"><?=$i?></option>
                    <?php endfor ?>
                </select>
                <select name="mes">       
                        <option value="Julho">Julho</option>
                </select>
                <select name="ano">
                <option value="2023">2023</option>
                </select>
                <input class="btn-alocar" type="submit" value="alocar-se">
            </form>
        </div> 
        <br><br>
        <?php if($dia >= 29): ?>
            <form method="post" action="alocacao_process.php">
            <input type="hidden" name="type" value="createAlocacao">
                <input type="hidden" name="user_id" value="<?=$user->getId($userData)?>">
                <input type="hidden" name="name" value="<?=$user->getFullName($userData)?>">
                <select name="dia">
                    <?php for($i = 1; $i <= 28; $i++ ):?>
                            <option value="<?=$i?>"><?=$i?></option>
                    <?php endfor ?>
                </select>
                <select name="mes">       
                        <option value="Agosto">Agosto</option>
                </select>
                <select name="ano">
                <option value="2023">2023</option>
                </select>
                <input class="btn-alocar" type="submit" value="alocar-se">
            </form>   
        </div> 
        <?php endif;?>
        <?php endif;?>

         <!-- Agosto -->
         <?php if($mesAtual == "Agosto"):?> 
            <h2>Qual dia deseja alocar-se?</h2> 
        <div>
            <p>Qua dia deseja de alocar?</p>  
             <form method="post" action="alocacao_process.php">
            <input type="hidden" name="type" value="createAlocacao">
                <input type="hidden" name="user_id" value="<?=$user->getId($userData)?>">
                <input type="hidden" name="name" value="<?=$user->getFullName($userData)?>">
                <select name="dia">
                    <?php for($i = $dia; $i <= 31; $i++ ):?>
                            <option value="<?=$i?>"><?=$i?></option>
                    <?php endfor ?>
                </select>
                <select name="mes">       
                        <option value="Agosto">Agosto</option>
                </select>
                <select name="ano">
                <option value="2023">2023</option>
                </select>
                <input class="btn-alocar" type="submit" value="alocar-se">
            </form>
        </div> 
        <br><br>
        <?php if($dia >= 29): ?>
            <form method="post" action="alocacao_process.php">
            <input type="hidden" name="type" value="createAlocacao">
                <input type="hidden" name="user_id" value="<?=$user->getId($userData)?>">
                <input type="hidden" name="name" value="<?=$user->getFullName($userData)?>">
                <select name="dia">
                    <?php for($i = 1; $i <= 28; $i++ ):?>
                            <option value="<?=$i?>"><?=$i?></option>
                    <?php endfor ?>
                </select>
                <select name="mes">       
                        <option value="Setembro">Setembro</option>
                </select>
                <select name="ano">
                <option value="2023">2023</option>
                </select>
                <input class="btn-alocar" type="submit" value="alocar-se">
            </form>   
        </div> 
        <?php endif;?>
        <?php endif;?>

        <!-- Setembro -->
        <?php if($mesAtual == "Setembro"):?> 
            <h2>Qual dia deseja alocar-se?</h2> 
        <div>
            <p>Qua dia deseja de alocar?</p>  
             <form method="post" action="alocacao_process.php">
            <input type="hidden" name="type" value="createAlocacao">
                <input type="hidden" name="user_id" value="<?=$user->getId($userData)?>">
                <input type="hidden" name="name" value="<?=$user->getFullName($userData)?>">
                <select name="dia">
                    <?php for($i = $dia; $i <= 31; $i++ ):?>
                            <option value="<?=$i?>"><?=$i?></option>
                    <?php endfor ?>
                </select>
                <select name="mes">       
                        <option value="Setembro">Setembro</option>
                </select>
                <select name="ano">
                <option value="2023">2023</option>
                </select>
                <input class="btn-alocar" type="submit" value="alocar-se">
            </form>
        </div>
        <br><br> 
        <?php if($dia >= 29): ?>
            <form method="post" action="alocacao_process.php">
            <input type="hidden" name="type" value="createAlocacao">
                <input type="hidden" name="user_id" value="<?=$user->getId($userData)?>">
                <input type="hidden" name="name" value="<?=$user->getFullName($userData)?>">
                <select name="dia">
                    <?php for($i = 1; $i <= 28; $i++ ):?>
                            <option value="<?=$i?>"><?=$i?></option>
                    <?php endfor ?>
                </select>
                <select name="mes">       
                        <option value="Outubro">Outubro</option>
                </select>
                <select name="ano">
                <option value="2023">2023</option>
                </select>
                <input class="btn-alocar" type="submit" value="alocar-se">
            </form>   
        </div> 
        <?php endif;?>
        <?php endif;?>

        <!-- Outubro -->
        <?php if($mesAtual == "Outubro"):?> 
            <h2>Qual dia deseja alocar-se?</h2> 
        <div>
            <p>Qua dia deseja de alocar?</p>  
             <form method="post" action="alocacao_process.php">
            <input type="hidden" name="type" value="createAlocacao">
                <input type="hidden" name="user_id" value="<?=$user->getId($userData)?>">
                <input type="hidden" name="name" value="<?=$user->getFullName($userData)?>">
                <select name="dia">
                    <?php for($i = $dia; $i <= 31; $i++ ):?>
                            <option value="<?=$i?>"><?=$i?></option>
                    <?php endfor ?>
                </select>
                <select name="mes">       
                        <option value="Outubro">Outubro</option>
                </select>
                <select name="ano">
                <option value="2023">2023</option>
                </select>
                <input class="btn-alocar" type="submit" value="alocar-se">
            </form>
        </div> 
        <br><br>
        <?php if($dia >= 29): ?>
            <form method="post" action="alocacao_process.php">
            <input type="hidden" name="type" value="createAlocacao">
                <input type="hidden" name="user_id" value="<?=$user->getId($userData)?>">
                <input type="hidden" name="name" value="<?=$user->getFullName($userData)?>">
                <select name="dia">
                    <?php for($i = 1; $i <= 28; $i++ ):?>
                            <option value="<?=$i?>"><?=$i?></option>
                    <?php endfor ?>
                </select>
                <select name="mes">       
                        <option value="Novembro">Novembro</option>
                </select>
                <select name="ano">
                <option value="2023">2023</option>
                </select>
                <input class="btn-alocar" type="submit" value="alocar-se">
            </form>   
        </div> 
        <?php endif;?>
        <?php endif;?>

        <!-- Novembro -->
        <?php if($mesAtual == "Novembro"):?> 
            <h2>Qual dia deseja alocar-se?</h2> 
        <div>
            <p>Qua dia deseja de alocar?</p>  
             <form method="post" action="alocacao_process.php">
            <input type="hidden" name="type" value="createAlocacao">
                <input type="hidden" name="user_id" value="<?=$user->getId($userData)?>">
                <input type="hidden" name="name" value="<?=$user->getFullName($userData)?>">
                <select name="dia">
                    <?php for($i = $dia; $i <= 31; $i++ ):?>
                            <option value="<?=$i?>"><?=$i?></option>
                    <?php endfor ?>
                </select>
                <select name="mes">       
                        <option value="Novembro">Novembro</option>
                </select>
                <select name="ano">
                <option value="2023">2023</option>
                </select>
                <input class="btn-alocar" type="submit" value="alocar-se">
            </form>
        </div> 
        <br><br>
        <?php if($dia >= 29): ?>
            <form method="post" action="alocacao_process.php">
            <input type="hidden" name="type" value="createAlocacao">
                <input type="hidden" name="user_id" value="<?=$user->getId($userData)?>">
                <input type="hidden" name="name" value="<?=$user->getFullName($userData)?>">
                <select name="dia">
                    <?php for($i = 1; $i <= 28; $i++ ):?>
                            <option value="<?=$i?>"><?=$i?></option>
                    <?php endfor ?>
                </select>
                <select name="mes">       
                        <option value="Dezembro">Dezembro</option>
                </select>
                <select name="ano">
                <option value="2023">2023</option>
                </select>
                <input class="btn-alocar" type="submit" value="alocar-se">
            </form>   
        </div> 
        <?php endif;?>
        <?php endif;?>

        <!-- Dezembro -->
        <?php if($mesAtual == "Dezembro"):?> 
            <h2>Qual dia deseja alocar-se?</h2> 
        <div>
            <p>Qua dia deseja de alocar?</p>  
             <form method="post" action="alocacao_process.php">
            <input type="hidden" name="type" value="createAlocacao">
                <input type="hidden" name="user_id" value="<?=$user->getId($userData)?>">
                <input type="hidden" name="name" value="<?=$user->getFullName($userData)?>">
                <select name="dia">
                    <?php for($i = $dia; $i <= 31; $i++ ):?>
                            <option value="<?=$i?>"><?=$i?></option>
                    <?php endfor ?>
                </select>
                <select name="mes">       
                        <option value="Dezembro">Dezembro</option>
                </select>
                <select name="ano">
                <option value="2023">2023</option>
                </select>
                <input class="btn-alocar" type="submit" value="alocar-se">
            </form>
        </div> 
        <br><br>

        <?php if($dia >= 29): ?>
            <form method="post" action="alocacao_process.php">
            <input type="hidden" name="type" value="createAlocacao">
                <input type="hidden" name="user_id" value="<?=$user->getId($userData)?>">
                <input type="hidden" name="name" value="<?=$user->getFullName($userData)?>">
                <select name="dia">
                    <?php for($i = 1; $i <= 31; $i++ ):?>
                            <option value="<?=$i?>"><?=$i?></option>
                    <?php endfor ?>
                </select>
                <select name="mes">       
                        <option value="Janeiro">Janeiro</option>
                </select>
                <select name="ano">
                <option value="2024">2024</option>
                </select>
                <input class="btn-alocar" type="submit" value="alocar-se">
            </form>
        <?php endif;?>
        <?php endif;?>







</main>