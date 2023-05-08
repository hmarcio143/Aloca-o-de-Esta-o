<?php

require_once("models/data.php");
require_once("models/Message.php");
require_once("models/User.php");
require_once("dao/dataDao.php");
require_once("globals.php");
require_once("bd.php");

$user = new User();
$data = new data();
$message = new Message($BASE_URL);
$dataDao = new dataDao($conn, $BASE_URL);
$type = filter_input(INPUT_POST,"type");
$type_get = filter_input(INPUT_GET,"type");

if($type === "createAlocacao"){
    $dia = filter_input(INPUT_POST, "dia");
    $mes = filter_input(INPUT_POST, "mes");
    $ano = filter_input(INPUT_POST, "ano");
    $usuario_id = filter_input(INPUT_POST, "user_id");
    $name = filter_input(INPUT_POST, "name");

    
    switch($mes){

    case "Janeiro":
        /// Fazer a validação de ocupação de lugar
        $QtdLugares = [];
        $qtd = "SELECT COUNT(dia) FROM janeiro WHERE dia='$dia'";
        $smtp = $conn->prepare($qtd);
        $smtp->execute();
        $QtdTotal = $smtp->fetch();
      $qtdOcupada = intval($QtdTotal ["COUNT(dia)"]);
      $qtdlivre =  18 - $qtdOcupada;
      
      if($qtdlivre === 0){

          $message->setMessage("Não há mais lugares disponiveis nesse dia, favor alocar-se em outra data", "error", "alocar.php");
      }else{


            //Verificar se o usuario tem alocação no mesmo dia
          $query = "SELECT dia,usuario_id FROM janeiro WHERE dia = '$dia' AND usuario_id = '$usuario_id'";
          $smtp = $conn->prepare($query);
          $smtp->execute();
          $teste = $smtp->fetch();

          // print_r($teste);exit;

          if($dia == $teste['dia'] && $usuario_id == $teste['usuario_id']){

            $message->setMessage("Você já está alocado nesse dia, favor alocar-se em outra data", "error", "alocar.php");


            

           
          
          }else{

          $query = "INSERT INTO janeiro(dia,mes,ano,usuario_id,name)VALUES('$dia','$mes','$ano','$usuario_id','$name')";
          $smtp = $conn->prepare($query);
          $smtp->execute();
          $message->setMessage("Dados adicionados", "sucess", "painel.php");
      }

      }
      break;

      ///Fevereiro 
      case "Fevereiro":
        /// Fazer a validação de ocupação de lugar
        $QtdLugares = [];
        $qtd = "SELECT COUNT(dia) FROM fevereiro WHERE dia='$dia'";
        $smtp = $conn->prepare($qtd);
        $smtp->execute();
        $QtdTotal = $smtp->fetch();
      $qtdOcupada = intval($QtdTotal ["COUNT(dia)"]);
      $qtdlivre =  18 - $qtdOcupada;
      
      if($qtdlivre === 0){

          $message->setMessage("Não há mais lugares disponiveis nesse dia, favor alocar-se em outra data", "error", "alocar.php");
      }else{


            //Verificar se o usuario tem alocação no mesmo dia
          $query = "SELECT dia,usuario_id FROM fevereiro WHERE dia = '$dia' AND usuario_id = '$usuario_id'";
          $smtp = $conn->prepare($query);
          $smtp->execute();
          $teste = $smtp->fetch();

          // print_r($teste);exit;

          if($dia == $teste['dia'] && $usuario_id == $teste['usuario_id']){

            $message->setMessage("Você já está alocado nesse dia, favor alocar-se em outra data", "error", "alocar.php");
          
          }else{

          $query = "INSERT INTO fevereiro(dia,mes,ano,usuario_id,name)VALUES('$dia','$mes','$ano','$usuario_id','$name')";
          $smtp = $conn->prepare($query);
          $smtp->execute();
          $message->setMessage("Dados adicionados", "sucess", "painel.php");
      }

      }
      break;

       ///Março 
       case "Março":
        /// Fazer a validação de ocupação de lugar
        $QtdLugares = [];
        $qtd = "SELECT COUNT(dia) FROM março WHERE dia='$dia'";
        $smtp = $conn->prepare($qtd);
        $smtp->execute();
        $QtdTotal = $smtp->fetch();
      $qtdOcupada = intval($QtdTotal ["COUNT(dia)"]);
      $qtdlivre =  18 - $qtdOcupada;
      
      if($qtdlivre === 0){

          $message->setMessage("Não há mais lugares disponiveis nesse dia, favor alocar-se em outra data", "error", "alocar.php");
      }else{


            //Verificar se o usuario tem alocação no mesmo dia
          $query = "SELECT dia,usuario_id FROM março WHERE dia = '$dia' AND usuario_id = '$usuario_id'";
          $smtp = $conn->prepare($query);
          $smtp->execute();
          $teste = $smtp->fetch();

          // print_r($teste);exit;

          if($dia == $teste['dia'] && $usuario_id == $teste['usuario_id']){

            $message->setMessage("Você já está alocado nesse dia, favor alocar-se em outra data", "error", "alocar.php");
          
          }else{

          $query = "INSERT INTO março(dia,mes,ano,usuario_id,name)VALUES('$dia','$mes','$ano','$usuario_id','$name')";
          $smtp = $conn->prepare($query);
          $smtp->execute();
          $message->setMessage("Dados adicionados", "sucess", "painel.php");
      }
      }
      break;
      ///Abril 
      case "Abril":
        /// Fazer a validação de ocupação de lugar
        $QtdLugares = [];
        $qtd = "SELECT COUNT(dia) FROM abril WHERE dia='$dia'";
        $smtp = $conn->prepare($qtd);
        $smtp->execute();
        $QtdTotal = $smtp->fetch();
      $qtdOcupada = intval($QtdTotal ["COUNT(dia)"]);
      $qtdlivre =  18 - $qtdOcupada;
      
      if($qtdlivre === 0){

          $message->setMessage("Não há mais lugares disponiveis nesse dia, favor alocar-se em outra data", "error", "alocar.php");
      }else{


            //Verificar se o usuario tem alocação no mesmo dia
          $query = "SELECT dia,usuario_id FROM abril WHERE dia = '$dia' AND usuario_id = '$usuario_id'";
          $smtp = $conn->prepare($query);
          $smtp->execute();
          $teste = $smtp->fetch();

          // print_r($teste);exit;

          if($dia == $teste['dia'] && $usuario_id == $teste['usuario_id']){

            $message->setMessage("Você já está alocado nesse dia, favor alocar-se em outra data", "error", "alocar.php");
          
          }else{

          $query = "INSERT INTO abril(dia,mes,ano,usuario_id,name)VALUES('$dia','$mes','$ano','$usuario_id','$name')";
          $smtp = $conn->prepare($query);
          $smtp->execute();
          $message->setMessage("Dados adicionados", "sucess", "painel.php");
      }
      }
      break;

       ///Maio 
       case "Maio":
        /// Fazer a validação de ocupação de lugar
        $QtdLugares = [];
        $qtd = "SELECT COUNT(dia) FROM maio WHERE dia='$dia'";
        $smtp = $conn->prepare($qtd);
        $smtp->execute();
        $QtdTotal = $smtp->fetch();
      $qtdOcupada = intval($QtdTotal ["COUNT(dia)"]);
      $qtdlivre =  18 - $qtdOcupada;
      
      if($qtdlivre === 0){

          $message->setMessage("Não há mais lugares disponiveis nesse dia, favor alocar-se em outra data", "error", "alocar.php");
      }else{


            //Verificar se o usuario tem alocação no mesmo dia
          $query = "SELECT dia,usuario_id FROM maio WHERE dia = '$dia' AND usuario_id = '$usuario_id'";
          $smtp = $conn->prepare($query);
          $smtp->execute();
          $teste = $smtp->fetch();

          // print_r($teste);exit;

          if($dia == $teste['dia'] && $usuario_id == $teste['usuario_id']){

            $message->setMessage("Você já está alocado nesse dia, favor alocar-se em outra data", "error", "alocar.php");
          
          }else{

          $query = "INSERT INTO maio(dia,mes,ano,usuario_id,name)VALUES('$dia','$mes','$ano','$usuario_id','$name')";
          $smtp = $conn->prepare($query);
          $smtp->execute();
          $message->setMessage("Dados adicionados", "sucess", "painel.php");
      }
      }
      break;

      ///Junho 
      case "Junho":
        /// Fazer a validação de ocupação de lugar
        $QtdLugares = [];
        $qtd = "SELECT COUNT(dia) FROM junho WHERE dia='$dia'";
        $smtp = $conn->prepare($qtd);
        $smtp->execute();
        $QtdTotal = $smtp->fetch();
      $qtdOcupada = intval($QtdTotal ["COUNT(dia)"]);
      $qtdlivre =  18 - $qtdOcupada;
      
      if($qtdlivre === 0){

          $message->setMessage("Não há mais lugares disponiveis nesse dia, favor alocar-se em outra data", "error", "alocar.php");
      }else{


            //Verificar se o usuario tem alocação no mesmo dia
          $query = "SELECT dia,usuario_id FROM junho WHERE dia = '$dia' AND usuario_id = '$usuario_id'";
          $smtp = $conn->prepare($query);
          $smtp->execute();
          $teste = $smtp->fetch();

          // print_r($teste);exit;

          if($dia == $teste['dia'] && $usuario_id == $teste['usuario_id']){

            $message->setMessage("Você já está alocado nesse dia, favor alocar-se em outra data", "error", "alocar.php");
          
          }else{

          $query = "INSERT INTO junho(dia,mes,ano,usuario_id,name)VALUES('$dia','$mes','$ano','$usuario_id','$name')";
          $smtp = $conn->prepare($query);
          $smtp->execute();
          $message->setMessage("Dados adicionados", "sucess", "painel.php");
      }
      }
      break;

       ///Julho 
       case "Julho":
        /// Fazer a validação de ocupação de lugar
        $QtdLugares = [];
        $qtd = "SELECT COUNT(dia) FROM julho WHERE dia='$dia'";
        $smtp = $conn->prepare($qtd);
        $smtp->execute();
        $QtdTotal = $smtp->fetch();
      $qtdOcupada = intval($QtdTotal ["COUNT(dia)"]);
      $qtdlivre =  18 - $qtdOcupada;
      
      if($qtdlivre === 0){

          $message->setMessage("Não há mais lugares disponiveis nesse dia, favor alocar-se em outra data", "error", "alocar.php");
      }else{


            //Verificar se o usuario tem alocação no mesmo dia
          $query = "SELECT dia,usuario_id FROM julho WHERE dia = '$dia' AND usuario_id = '$usuario_id'";
          $smtp = $conn->prepare($query);
          $smtp->execute();
          $teste = $smtp->fetch();

          // print_r($teste);exit;

          if($dia == $teste['dia'] && $usuario_id == $teste['usuario_id']){

            $message->setMessage("Você já está alocado nesse dia, favor alocar-se em outra data", "error", "alocar.php");
          
          }else{

          $query = "INSERT INTO julho(dia,mes,ano,usuario_id,name)VALUES('$dia','$mes','$ano','$usuario_id','$name')";
          $smtp = $conn->prepare($query);
          $smtp->execute();
          $message->setMessage("Dados adicionados", "sucess", "painel.php");
      }
      }
      break;

        ///Agosto
        case "Agosto":
          /// Fazer a validação de ocupação de lugar
          $QtdLugares = [];
          $qtd = "SELECT COUNT(dia) FROM agosto WHERE dia='$dia'";
          $smtp = $conn->prepare($qtd);
          $smtp->execute();
          $QtdTotal = $smtp->fetch();
        $qtdOcupada = intval($QtdTotal ["COUNT(dia)"]);
        $qtdlivre =  18 - $qtdOcupada;
        
        if($qtdlivre === 0){
  
            $message->setMessage("Não há mais lugares disponiveis nesse dia, favor alocar-se em outra data", "error", "alocar.php");
        }else{
  
  
              //Verificar se o usuario tem alocação no mesmo dia
            $query = "SELECT dia,usuario_id FROM agosto WHERE dia = '$dia' AND usuario_id = '$usuario_id'";
            $smtp = $conn->prepare($query);
            $smtp->execute();
            $teste = $smtp->fetch();
  
            // print_r($teste);exit;
  
            if($dia == $teste['dia'] && $usuario_id == $teste['usuario_id']){
  
              $message->setMessage("Você já está alocado nesse dia, favor alocar-se em outra data", "error", "alocar.php");
            
            }else{
  
            $query = "INSERT INTO agosto(dia,mes,ano,usuario_id,name)VALUES('$dia','$mes','$ano','$usuario_id','$name')";
            $smtp = $conn->prepare($query);
            $smtp->execute();
            $message->setMessage("Dados adicionados", "sucess", "painel.php");
        }
        }
        break;

         ///Setembro
         case "Setembro":
          /// Fazer a validação de ocupação de lugar
          $QtdLugares = [];
          $qtd = "SELECT COUNT(dia) FROM setembro WHERE dia='$dia'";
          $smtp = $conn->prepare($qtd);
          $smtp->execute();
          $QtdTotal = $smtp->fetch();
        $qtdOcupada = intval($QtdTotal ["COUNT(dia)"]);
        $qtdlivre =  18 - $qtdOcupada;
        
        if($qtdlivre === 0){
  
            $message->setMessage("Não há mais lugares disponiveis nesse dia, favor alocar-se em outra data", "error", "alocar.php");
        }else{
  
  
              //Verificar se o usuario tem alocação no mesmo dia
            $query = "SELECT dia,usuario_id FROM setembro WHERE dia = '$dia' AND usuario_id = '$usuario_id'";
            $smtp = $conn->prepare($query);
            $smtp->execute();
            $teste = $smtp->fetch();
  
            // print_r($teste);exit;
  
            if($dia == $teste['dia'] && $usuario_id == $teste['usuario_id']){
  
              $message->setMessage("Você já está alocado nesse dia, favor alocar-se em outra data", "error", "alocar.php");
            
            }else{
  
            $query = "INSERT INTO setembro(dia,mes,ano,usuario_id,name)VALUES('$dia','$mes','$ano','$usuario_id','$name')";
            $smtp = $conn->prepare($query);
            $smtp->execute();
            $message->setMessage("Dados adicionados", "sucess", "painel.php");
        }
        }
        break;

        ///Outubro
         case "Outubro":
          /// Fazer a validação de ocupação de lugar
          $QtdLugares = [];
          $qtd = "SELECT COUNT(dia) FROM outubro WHERE dia='$dia'";
          $smtp = $conn->prepare($qtd);
          $smtp->execute();
          $QtdTotal = $smtp->fetch();
        $qtdOcupada = intval($QtdTotal ["COUNT(dia)"]);
        $qtdlivre =  18 - $qtdOcupada;
        
        if($qtdlivre === 0){
  
            $message->setMessage("Não há mais lugares disponiveis nesse dia, favor alocar-se em outra data", "error", "alocar.php");
        }else{
  
  
              //Verificar se o usuario tem alocação no mesmo dia
            $query = "SELECT dia,usuario_id FROM outubro WHERE dia = '$dia' AND usuario_id = '$usuario_id'";
            $smtp = $conn->prepare($query);
            $smtp->execute();
            $teste = $smtp->fetch();
  
            // print_r($teste);exit;
  
            if($dia == $teste['dia'] && $usuario_id == $teste['usuario_id']){
  
              $message->setMessage("Você já está alocado nesse dia, favor alocar-se em outra data", "error", "alocar.php");
            
            }else{
  
            $query = "INSERT INTO outubro(dia,mes,ano,usuario_id,name)VALUES('$dia','$mes','$ano','$usuario_id','$name')";
            $smtp = $conn->prepare($query);
            $smtp->execute();
            $message->setMessage("Dados adicionados", "sucess", "painel.php");
        }
        }
        break;

        ///Novembro
        case "Novembro":
          /// Fazer a validação de ocupação de lugar
          $QtdLugares = [];
          $qtd = "SELECT COUNT(dia) FROM novembro WHERE dia='$dia'";
          $smtp = $conn->prepare($qtd);
          $smtp->execute();
          $QtdTotal = $smtp->fetch();
        $qtdOcupada = intval($QtdTotal ["COUNT(dia)"]);
        $qtdlivre =  18 - $qtdOcupada;
        
        if($qtdlivre === 0){
  
            $message->setMessage("Não há mais lugares disponiveis nesse dia, favor alocar-se em outra data", "error", "alocar.php");
        }else{
  
  
              //Verificar se o usuario tem alocação no mesmo dia
            $query = "SELECT dia,usuario_id FROM novembro WHERE dia = '$dia' AND usuario_id = '$usuario_id'";
            $smtp = $conn->prepare($query);
            $smtp->execute();
            $teste = $smtp->fetch();
  
            // print_r($teste);exit;
  
            if($dia == $teste['dia'] && $usuario_id == $teste['usuario_id']){
  
              $message->setMessage("Você já está alocado nesse dia, favor alocar-se em outra data", "error", "alocar.php");
            
            }else{
  
            $query = "INSERT INTO novembro(dia,mes,ano,usuario_id,name)VALUES('$dia','$mes','$ano','$usuario_id','$name')";
            $smtp = $conn->prepare($query);
            $smtp->execute();
            $message->setMessage("Dados adicionados", "sucess", "painel.php");
        }
        }
        break;

        ///Dezembro
        case "Dezembro":
          /// Fazer a validação de ocupação de lugar
          $QtdLugares = [];
          $qtd = "SELECT COUNT(dia) FROM dezembro WHERE dia='$dia'";
          $smtp = $conn->prepare($qtd);
          $smtp->execute();
          $QtdTotal = $smtp->fetch();
        $qtdOcupada = intval($QtdTotal ["COUNT(dia)"]);
        $qtdlivre =  18 - $qtdOcupada;
        
        if($qtdlivre === 0){
  
            $message->setMessage("Não há mais lugares disponiveis nesse dia, favor alocar-se em outra data", "error", "alocar.php");
        }else{
  
  
              //Verificar se o usuario tem alocação no mesmo dia
            $query = "SELECT dia,usuario_id FROM dezembro WHERE dia = '$dia' AND usuario_id = '$usuario_id'";
            $smtp = $conn->prepare($query);
            $smtp->execute();
            $teste = $smtp->fetch();
  
            // print_r($teste);exit;
  
            if($dia == $teste['dia'] && $usuario_id == $teste['usuario_id']){
  
              $message->setMessage("Você já está alocado nesse dia, favor alocar-se em outra data", "error", "alocar.php");
            
            }else{
  
            $query = "INSERT INTO dezembro(dia,mes,ano,usuario_id,name)VALUES('$dia','$mes','$ano','$usuario_id','$name')";
            $smtp = $conn->prepare($query);
            $smtp->execute();
            $message->setMessage("Dados adicionados", "sucess", "painel.php");
        }
        }
        break;


        
 }
}else if($type == "alocarUsuarioAdm"){
  $dia = filter_input(INPUT_POST, "dia");
  $mes = filter_input(INPUT_POST, "mes");
  $ano = filter_input(INPUT_POST, "ano");
  $usuario = filter_input(INPUT_POST, "usuario");

  $idUsuario = [];
  $query = "SELECT id FROM usuario WHERE CONCAT(name,' ',lastname) = '$usuario'";
  $smtp = $conn->prepare($query);
  $smtp->execute();
  $idUsuario = $smtp->fetchAll();
  $idUsuarioResultado = $idUsuario[0]['id'];


  switch($mes){
    ///Janeiro
    case "Janeiro":
        /// Fazer a validação de ocupação de lugar
        $QtdLugares = [];
        $qtd = "SELECT COUNT(dia) FROM janeiro WHERE dia='$dia'";
        $smtp = $conn->prepare($qtd);
        $smtp->execute();
        $QtdTotal = $smtp->fetch();
      $qtdOcupada = intval($QtdTotal ["COUNT(dia)"]);
      $qtdlivre =  18 - $qtdOcupada;
      
      if($qtdlivre === 0){

          $message->setMessage("Não há mais lugares disponiveis nesse dia, favor alocar o usuario em outra data", "error", "alocar.php");
      }else{


            //Verificar se o usuario tem alocação no mesmo dia
          $query = "SELECT dia,usuario_id FROM janeiro WHERE dia = '$dia' AND usuario_id = '$idUsuarioResultado'";
          $smtp = $conn->prepare($query);
          $smtp->execute();
          $teste = $smtp->fetch();

          // print_r($teste);exit;

          if($dia == $teste['dia'] && $idUsuarioResultado == $teste['usuario_id']){

            $message->setMessage("O usuario já está alocado nesse dia, favor alocar em outra data", "error", "alocarUsuario.php");


            

           
          
          }else{

          $query = "INSERT INTO janeiro(dia,mes,ano,usuario_id,name)VALUES('$dia','$mes','$ano','$idUsuarioResultado','$usuario')";
          $smtp = $conn->prepare($query);
          $smtp->execute();
          $message->setMessage("Dados adicionados", "sucess", "painel.php");
      }

      }
      break;
      ///Fevereiro
      case "Fevereiro":
        /// Fazer a validação de ocupação de lugar
        $QtdLugares = [];
        $qtd = "SELECT COUNT(dia) FROM fevereiro WHERE dia='$dia'";
        $smtp = $conn->prepare($qtd);
        $smtp->execute();
        $QtdTotal = $smtp->fetch();
      $qtdOcupada = intval($QtdTotal ["COUNT(dia)"]);
      $qtdlivre =  18 - $qtdOcupada;
      
      if($qtdlivre === 0){

          $message->setMessage("Não há mais lugares disponiveis nesse dia, favor alocar o usuario em outra data", "error", "alocar.php");
      }else{


            //Verificar se o usuario tem alocação no mesmo dia
          $query = "SELECT dia,usuario_id FROM fevereiro WHERE dia = '$dia' AND usuario_id = '$idUsuarioResultado'";
          $smtp = $conn->prepare($query);
          $smtp->execute();
          $teste = $smtp->fetch();

          // print_r($teste);exit;

          if($dia == $teste['dia'] && $idUsuarioResultado == $teste['usuario_id']){

            $message->setMessage("O usuario já está alocado nesse dia, favor alocar em outra data", "error", "alocarUsuario.php");


            

           
          
          }else{

          $query = "INSERT INTO fevereiro(dia,mes,ano,usuario_id,name)VALUES('$dia','$mes','$ano','$idUsuarioResultado','$usuario')";
          $smtp = $conn->prepare($query);
          $smtp->execute();
          $message->setMessage("Dados adicionados", "sucess", "painel.php");
      }

      }
      break;

      ///Março
      case "Março":
        /// Fazer a validação de ocupação de lugar
        $QtdLugares = [];
        $qtd = "SELECT COUNT(dia) FROM março WHERE dia='$dia'";
        $smtp = $conn->prepare($qtd);
        $smtp->execute();
        $QtdTotal = $smtp->fetch();
      $qtdOcupada = intval($QtdTotal ["COUNT(dia)"]);
      $qtdlivre =  18 - $qtdOcupada;
      
      if($qtdlivre === 0){

          $message->setMessage("Não há mais lugares disponiveis nesse dia, favor alocar o usuario em outra data", "error", "alocar.php");
      }else{


            //Verificar se o usuario tem alocação no mesmo dia
          $query = "SELECT dia,usuario_id FROM março WHERE dia = '$dia' AND usuario_id = '$idUsuarioResultado'";
          $smtp = $conn->prepare($query);
          $smtp->execute();
          $teste = $smtp->fetch();

          // print_r($teste);exit;

          if($dia == $teste['dia'] && $idUsuarioResultado == $teste['usuario_id']){

            $message->setMessage("O usuario já está alocado nesse dia, favor alocar em outra data", "error", "alocarUsuario.php");


            

           
          
          }else{

          $query = "INSERT INTO março(dia,mes,ano,usuario_id,name)VALUES('$dia','$mes','$ano','$idUsuarioResultado','$usuario')";
          $smtp = $conn->prepare($query);
          $smtp->execute();
          $message->setMessage("Dados adicionados", "sucess", "painel.php");
      }

      }
      break;

      ///Abril
      case "Abril":
        /// Fazer a validação de ocupação de lugar
        $QtdLugares = [];
        $qtd = "SELECT COUNT(dia) FROM abril WHERE dia='$dia'";
        $smtp = $conn->prepare($qtd);
        $smtp->execute();
        $QtdTotal = $smtp->fetch();
      $qtdOcupada = intval($QtdTotal ["COUNT(dia)"]);
      $qtdlivre =  18 - $qtdOcupada;
      
      if($qtdlivre === 0){

          $message->setMessage("Não há mais lugares disponiveis nesse dia, favor alocar o usuario em outra data", "error", "alocar.php");
      }else{


            //Verificar se o usuario tem alocação no mesmo dia
          $query = "SELECT dia,usuario_id FROM abril WHERE dia = '$dia' AND usuario_id = '$idUsuarioResultado'";
          $smtp = $conn->prepare($query);
          $smtp->execute();
          $teste = $smtp->fetch();

          // print_r($teste);exit;

          if($dia == $teste['dia'] && $idUsuarioResultado == $teste['usuario_id']){

            $message->setMessage("O usuario já está alocado nesse dia, favor alocar em outra data", "error", "alocarUsuario.php");


            

           
          
          }else{

          $query = "INSERT INTO abril(dia,mes,ano,usuario_id,name)VALUES('$dia','$mes','$ano','$idUsuarioResultado','$usuario')";
          $smtp = $conn->prepare($query);
          $smtp->execute();
          $message->setMessage("Dados adicionados", "sucess", "painel.php");
      }

      }
      break;

      ///Maio
      case "Maio":
        /// Fazer a validação de ocupação de lugar
        $QtdLugares = [];
        $qtd = "SELECT COUNT(dia) FROM maio WHERE dia='$dia'";
        $smtp = $conn->prepare($qtd);
        $smtp->execute();
        $QtdTotal = $smtp->fetch();
      $qtdOcupada = intval($QtdTotal ["COUNT(dia)"]);
      $qtdlivre =  18 - $qtdOcupada;
      
      if($qtdlivre === 0){

          $message->setMessage("Não há mais lugares disponiveis nesse dia, favor alocar o usuario em outra data", "error", "alocar.php");
      }else{


            //Verificar se o usuario tem alocação no mesmo dia
          $query = "SELECT dia,usuario_id FROM maio WHERE dia = '$dia' AND usuario_id = '$idUsuarioResultado'";
          $smtp = $conn->prepare($query);
          $smtp->execute();
          $teste = $smtp->fetch();

          // print_r($teste);exit;

          if($dia == $teste['dia'] && $idUsuarioResultado == $teste['usuario_id']){

            $message->setMessage("O usuario já está alocado nesse dia, favor alocar em outra data", "error", "alocarUsuario.php");


            

           
          
          }else{

          $query = "INSERT INTO maio(dia,mes,ano,usuario_id,name)VALUES('$dia','$mes','$ano','$idUsuarioResultado','$usuario')";
          $smtp = $conn->prepare($query);
          $smtp->execute();
          $message->setMessage("Dados adicionados", "sucess", "painel.php");
      }

      }
      break;

      ///junho
      case "Junho":
        /// Fazer a validação de ocupação de lugar
        $QtdLugares = [];
        $qtd = "SELECT COUNT(dia) FROM junho WHERE dia='$dia'";
        $smtp = $conn->prepare($qtd);
        $smtp->execute();
        $QtdTotal = $smtp->fetch();
      $qtdOcupada = intval($QtdTotal ["COUNT(dia)"]);
      $qtdlivre =  18 - $qtdOcupada;
      
      if($qtdlivre === 0){

          $message->setMessage("Não há mais lugares disponiveis nesse dia, favor alocar o usuario em outra data", "error", "alocar.php");
      }else{


            //Verificar se o usuario tem alocação no mesmo dia
          $query = "SELECT dia,usuario_id FROM junho WHERE dia = '$dia' AND usuario_id = '$idUsuarioResultado'";
          $smtp = $conn->prepare($query);
          $smtp->execute();
          $teste = $smtp->fetch();

          // print_r($teste);exit;

          if($dia == $teste['dia'] && $idUsuarioResultado == $teste['usuario_id']){

            $message->setMessage("O usuario já está alocado nesse dia, favor alocar em outra data", "error", "alocarUsuario.php");


            

           
          
          }else{

          $query = "INSERT INTO junho(dia,mes,ano,usuario_id,name)VALUES('$dia','$mes','$ano','$idUsuarioResultado','$usuario')";
          $smtp = $conn->prepare($query);
          $smtp->execute();
          $message->setMessage("Dados adicionados", "sucess", "painel.php");
      }

      }
      break;

      ///julho
      case "Julho":
        /// Fazer a validação de ocupação de lugar
        $QtdLugares = [];
        $qtd = "SELECT COUNT(dia) FROM julho WHERE dia='$dia'";
        $smtp = $conn->prepare($qtd);
        $smtp->execute();
        $QtdTotal = $smtp->fetch();
      $qtdOcupada = intval($QtdTotal ["COUNT(dia)"]);
      $qtdlivre =  18 - $qtdOcupada;
      
      if($qtdlivre === 0){

          $message->setMessage("Não há mais lugares disponiveis nesse dia, favor alocar o usuario em outra data", "error", "alocar.php");
      }else{


            //Verificar se o usuario tem alocação no mesmo dia
          $query = "SELECT dia,usuario_id FROM julho WHERE dia = '$dia' AND usuario_id = '$idUsuarioResultado'";
          $smtp = $conn->prepare($query);
          $smtp->execute();
          $teste = $smtp->fetch();

          // print_r($teste);exit;

          if($dia == $teste['dia'] && $idUsuarioResultado == $teste['usuario_id']){

            $message->setMessage("O usuario já está alocado nesse dia, favor alocar em outra data", "error", "alocarUsuario.php");


            

           
          
          }else{

          $query = "INSERT INTO julho(dia,mes,ano,usuario_id,name)VALUES('$dia','$mes','$ano','$idUsuarioResultado','$usuario')";
          $smtp = $conn->prepare($query);
          $smtp->execute();
          $message->setMessage("Dados adicionados", "sucess", "painel.php");
      }

      }
      break;
      ///Agosto
      case "Agosto":
        /// Fazer a validação de ocupação de lugar
        $QtdLugares = [];
        $qtd = "SELECT COUNT(dia) FROM agosto WHERE dia='$dia'";
        $smtp = $conn->prepare($qtd);
        $smtp->execute();
        $QtdTotal = $smtp->fetch();
      $qtdOcupada = intval($QtdTotal ["COUNT(dia)"]);
      $qtdlivre =  18 - $qtdOcupada;
      
      if($qtdlivre === 0){

          $message->setMessage("Não há mais lugares disponiveis nesse dia, favor alocar o usuario em outra data", "error", "alocar.php");
      }else{


            //Verificar se o usuario tem alocação no mesmo dia
          $query = "SELECT dia,usuario_id FROM agosto WHERE dia = '$dia' AND usuario_id = '$idUsuarioResultado'";
          $smtp = $conn->prepare($query);
          $smtp->execute();
          $teste = $smtp->fetch();

          // print_r($teste);exit;

          if($dia == $teste['dia'] && $idUsuarioResultado == $teste['usuario_id']){

            $message->setMessage("O usuario já está alocado nesse dia, favor alocar em outra data", "error", "alocarUsuario.php");


            

           
          
          }else{

          $query = "INSERT INTO agosto(dia,mes,ano,usuario_id,name)VALUES('$dia','$mes','$ano','$idUsuarioResultado','$usuario')";
          $smtp = $conn->prepare($query);
          $smtp->execute();
          $message->setMessage("Dados adicionados", "sucess", "painel.php");
      }

      }
      break;
      ///Setembro
      case "Setembro":
        /// Fazer a validação de ocupação de lugar
        $QtdLugares = [];
        $qtd = "SELECT COUNT(dia) FROM setembro WHERE dia='$dia'";
        $smtp = $conn->prepare($qtd);
        $smtp->execute();
        $QtdTotal = $smtp->fetch();
      $qtdOcupada = intval($QtdTotal ["COUNT(dia)"]);
      $qtdlivre =  18 - $qtdOcupada;
      
      if($qtdlivre === 0){

          $message->setMessage("Não há mais lugares disponiveis nesse dia, favor alocar o usuario em outra data", "error", "alocar.php");
      }else{


            //Verificar se o usuario tem alocação no mesmo dia
          $query = "SELECT dia,usuario_id FROM setembro WHERE dia = '$dia' AND usuario_id = '$idUsuarioResultado'";
          $smtp = $conn->prepare($query);
          $smtp->execute();
          $teste = $smtp->fetch();

          // print_r($teste);exit;

          if($dia == $teste['dia'] && $idUsuarioResultado == $teste['usuario_id']){

            $message->setMessage("O usuario já está alocado nesse dia, favor alocar em outra data", "error", "alocarUsuario.php");


            

           
          
          }else{

          $query = "INSERT INTO setembro(dia,mes,ano,usuario_id,name)VALUES('$dia','$mes','$ano','$idUsuarioResultado','$usuario')";
          $smtp = $conn->prepare($query);
          $smtp->execute();
          $message->setMessage("Dados adicionados", "sucess", "painel.php");
      }

      }
      break;
      //outubro
      case "Outubro":
        /// Fazer a validação de ocupação de lugar
        $QtdLugares = [];
        $qtd = "SELECT COUNT(dia) FROM outubro WHERE dia='$dia'";
        $smtp = $conn->prepare($qtd);
        $smtp->execute();
        $QtdTotal = $smtp->fetch();
      $qtdOcupada = intval($QtdTotal ["COUNT(dia)"]);
      $qtdlivre =  18 - $qtdOcupada;
      
      if($qtdlivre === 0){

          $message->setMessage("Não há mais lugares disponiveis nesse dia, favor alocar o usuario em outra data", "error", "alocar.php");
      }else{


            //Verificar se o usuario tem alocação no mesmo dia
          $query = "SELECT dia,usuario_id FROM outubro WHERE dia = '$dia' AND usuario_id = '$idUsuarioResultado'";
          $smtp = $conn->prepare($query);
          $smtp->execute();
          $teste = $smtp->fetch();

          // print_r($teste);exit;

          if($dia == $teste['dia'] && $idUsuarioResultado == $teste['usuario_id']){

            $message->setMessage("O usuario já está alocado nesse dia, favor alocar em outra data", "error", "alocarUsuario.php");


            

           
          
          }else{

          $query = "INSERT INTO outubro(dia,mes,ano,usuario_id,name)VALUES('$dia','$mes','$ano','$idUsuarioResultado','$usuario')";
          $smtp = $conn->prepare($query);
          $smtp->execute();
          $message->setMessage("Dados adicionados", "sucess", "painel.php");
      }

      }
      break;

      //Novembro
      case "Novembro":
        /// Fazer a validação de ocupação de lugar
        $QtdLugares = [];
        $qtd = "SELECT COUNT(dia) FROM novembro WHERE dia='$dia'";
        $smtp = $conn->prepare($qtd);
        $smtp->execute();
        $QtdTotal = $smtp->fetch();
      $qtdOcupada = intval($QtdTotal ["COUNT(dia)"]);
      $qtdlivre =  18 - $qtdOcupada;
      
      if($qtdlivre === 0){

          $message->setMessage("Não há mais lugares disponiveis nesse dia, favor alocar o usuario em outra data", "error", "alocar.php");
      }else{


            //Verificar se o usuario tem alocação no mesmo dia
          $query = "SELECT dia,usuario_id FROM novembro WHERE dia = '$dia' AND usuario_id = '$idUsuarioResultado'";
          $smtp = $conn->prepare($query);
          $smtp->execute();
          $teste = $smtp->fetch();

          // print_r($teste);exit;

          if($dia == $teste['dia'] && $idUsuarioResultado == $teste['usuario_id']){

            $message->setMessage("O usuario já está alocado nesse dia, favor alocar em outra data", "error", "alocarUsuario.php");


            

           
          
          }else{

          $query = "INSERT INTO novembro(dia,mes,ano,usuario_id,name)VALUES('$dia','$mes','$ano','$idUsuarioResultado','$usuario')";
          $smtp = $conn->prepare($query);
          $smtp->execute();
          $message->setMessage("Dados adicionados", "sucess", "painel.php");
      }

      }
      break;

      //Dezembro
      case "Dezembro":
        /// Fazer a validação de ocupação de lugar
        $QtdLugares = [];
        $qtd = "SELECT COUNT(dia) FROM dezembro WHERE dia='$dia'";
        $smtp = $conn->prepare($qtd);
        $smtp->execute();
        $QtdTotal = $smtp->fetch();
      $qtdOcupada = intval($QtdTotal ["COUNT(dia)"]);
      $qtdlivre =  18 - $qtdOcupada;
      
      if($qtdlivre === 0){

          $message->setMessage("Não há mais lugares disponiveis nesse dia, favor alocar o usuario em outra data", "error", "alocar.php");
      }else{


            //Verificar se o usuario tem alocação no mesmo dia
          $query = "SELECT dia,usuario_id FROM dezembro WHERE dia = '$dia' AND usuario_id = '$idUsuarioResultado'";
          $smtp = $conn->prepare($query);
          $smtp->execute();
          $teste = $smtp->fetch();

          // print_r($teste);exit;

          if($dia == $teste['dia'] && $idUsuarioResultado == $teste['usuario_id']){

            $message->setMessage("O usuario já está alocado nesse dia, favor alocar em outra data", "error", "alocarUsuario.php");


            

           
          
          }else{

          $query = "INSERT INTO dezembro(dia,mes,ano,usuario_id,name)VALUES('$dia','$mes','$ano','$idUsuarioResultado','$usuario')";
          $smtp = $conn->prepare($query);
          $smtp->execute();
          $message->setMessage("Dados adicionados", "sucess", "painel.php");
      }

      }
      break;


      
}

}

 

?>