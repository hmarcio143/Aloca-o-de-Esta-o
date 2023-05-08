<?php

require_once("models/user.php");
require_once("models/Message.php");
require_once("dao/UserDao.php");
require_once("globals.php");
require_once("bd.php");

$message = new Message($BASE_URL);
$userDao = new UserDao($conn, $BASE_URL);




///Resgatar o type do formulario
$type = filter_input(INPUT_POST,"type");

 if($type === "registro"){

     $name = filter_input(INPUT_POST, "name");
     $lastname = filter_input(INPUT_POST, "lastname");
     $email = filter_input(INPUT_POST, "email");
     $password = filter_input(INPUT_POST, "password");
     $confirmPassword = filter_input(INPUT_POST, "confirmPassword");
    $profile = filter_input(INPUT_POST, "profile");

     //Verificar se as senas batem

     if($password === $confirmPassword){
        //As senhas batem
        //Verificar se o Email ja existe
        if($userDao->findByEmail($email) === false){
            //Cadastrar usuario no sistema
            $user = new User();
            //criaçao do token
            $userToken = $user->generateToken();
            //Montar o objeto
            $user->name = $name;
            $user->lastname = $lastname;
            $user->email = $email;
            $user->password = $confirmPassword;
            $user->token = $userToken;
            $user->profile = $profile;

            $auth = true;
            $userDao->create($user,$auth);
            $message->setMessage("Cadastro Finalizado com sucesso", "sucess", "registro.php");


        }else{

            $message->setMessage("O email digitado já existe", "error", "back");
        }


     }else{

        $message->setMessage("As senhas não conferem, por favor digite novamente", "error", "back");
     }
 }else if($type === "create"){
    $email = filter_input(INPUT_POST, "email");
    $password = filter_input(INPUT_POST, "password");
    
    //tentar autentificar o usuario
    if($userDao->authenticateUser($email, $password)){

        $message->setMessage("Seja bem vindo","sucess" ,"painel.php");


    //Redirecionar o usuario, caso não conseguir autentificar
     }else{

        $message->setMessage("Email ou senha invalidos", "error", "back");

     }



 }else if($type === "update"){
    

    //Receber os dados
    $id = filter_input(INPUT_POST, "id");
    $name = filter_input(INPUT_POST, "name");
    $lastname = filter_input(INPUT_POST, "lastname");
    $email = filter_input(INPUT_POST, "email");
    $password = filter_input(INPUT_POST, "password");
    $confirmPassword = filter_input(INPUT_POST, "confirmPassword");
    $profile = filter_input(INPUT_POST, "profile");

     //Resgatar os dados do usuario
    $query = "SELECT * FROM usuario WHERE id='$id'";
    $userData = $conn->prepare($query);
    $userData->execute();

    //Verificar se as senhas batem
    if($password === $confirmPassword){

        $query = "UPDATE usuario SET name='$name',lastname='$lastname',email='$email',
        password='$password',profile='$profile' WHERE id='$id'";
        $userData = $conn->prepare($query);
        $userData->execute();
        $message->setMessage("Dados atualizados com sucesso!!","sucess" ,"editarProfile.php");
    }else{

        $message->setMessage("Senhas não batem", "error", "editarProfile.php");
    }

 }else if($type === "DeleteUser"){
    
    $id = filter_input(INPUT_POST, "id");
    $query = "DELETE FROM usuario WHERE id='$id'";
    $userData = $conn->prepare($query);
    $userData->execute();
    $message->setMessage("Usuario deletado com sucesso", "sucess", "editarProfile.php");
 }else{

    $message->setMessage("informações invalidas", "error", "index.php");
 }







?>