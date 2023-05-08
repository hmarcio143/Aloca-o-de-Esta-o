<?php
    
    include_once("./models/User.php");
    include_once("./models/Message.php");


    class UserDao implements userDaointerface{


        private $conn;
        private $url;
        private $message;

        public function __construct(PDO $conn, $url){

            $this->conn = $conn;
            $this->url = $url;
            $this->message = new Message($url);


        }

        public function builduser($data){
            
            $user = new User();

            $user->id = $data["id"];
            $user->name = $data["name"];
            $user->lastname = $data["lastname"];
            $user->email = $data["email"];
            $user->password = $data["password"];
            $user->profile = $data["profile"];
            $user->token = $data["token"];


            return $user;
        }

        public function create(User $user, $authUser = false ){

            $smtp = $this->conn->prepare(
                "INSERT INTO usuario(name,lastname,email,password,token,profile)
                VALUES(:name,:lastname,:email,:password,:token,:profile)"
            );

            $smtp->bindParam(":name", $user->name);
            $smtp->bindParam(":lastname", $user->lastname);
            $smtp->bindParam(":email", $user->email);
            $smtp->bindParam(":password", $user->password);
            $smtp->bindParam(":token", $user->token);
            $smtp->bindParam(":profile", $user->profile);

            $smtp->execute();
        }

        public function update(User $user, $redirect = true){

            $smtp = $this->conn->prepare("UPDATE usuario SET name=:name,lastname=:lastname,email=:email,
            password=:password,profile=:profile,token=:token WHERE id=:id");

            $smtp->bindParam(":name", $user->name);
            $smtp->bindParam(":lastname", $user->lastname);
            $smtp->bindParam(":email", $user->email);
            $smtp->bindParam(":password", $user->password);
            $smtp->bindParam(":profile", $user->profile);
            $smtp->bindParam(":token", $user->token);
            $smtp->bindParam(":id", $user->id);
            
            $smtp->execute();

            if($redirect){
                $this->message->setMessage("Dados atualizados com sucesso!!","sucess" ,"editarProfile.php");

            }

        }

        public function verifyToken($protected = false){

            if(!empty($_SESSION['token'])){
                //Pegar o token da ssesion

                $token = $_SESSION['token'];

                $user = $this->findByToken($token);

                if($user){
                    return $user;
                }else if($protected){

                ///Redirecionar usuario não autentificado
                $this->message->setMessage("Faça a autentificação para acessar essa pagina","error" ,"index.php");    
                }

            }else if($protected){

                ///Redirecionar usuario não autentificado
                $this->message->setMessage("Faça a autentificação para acessar essa pagina","error" ,"index.php");    
                }

        }


        public function setTokenSession($token, $redirect = true){

            //salvar token na sessão

            $_SESSION['token'] = $token;

            if($redirect){

                ///Enviar para o painel
                $this->message->setMessage("Cadastro finalizado. Seja bem vindo!!","sucess" ,"registro.php");

            }
        }

        public function setProfileSession($profile, $redirect = true){

            //salvar token na sessão

            $_SESSION['profile'] = $profile;

            if($redirect){

                ///Enviar para o perfil do usuario
                $this->message->setMessage("Cadastro finalizado. Seja bem vindo!!","sucess" ,"registro.php");

            }
        }

        public function findByEmail($email){

            if($email != ""){
                $smtp = $this->conn->prepare("SELECT * FROM usuario WHERE email=:email");
                $smtp->bindParam(":email", $email);
                $smtp->execute();

                if($smtp->rowCount() > 0){
                    $data = $smtp->fetch();
                    $user = $this->builduser($data);

                    return $user;
                }else{
                    return false;
                }   
            }else{
                return false;
            }

           


        }

        public function findById($id){

            if($id != ""){
                $smtp = $this->conn->prepare("SELECT * FROM usuario WHERE id=:id");
                $smtp->bindParam(":id", $id);
                $smtp->execute();

                if($smtp->rowCount() > 0){
                    $data = $smtp->fetch();
                    $user = $this->builduser($data);

                    return $user;
                }else{
                    return false;
                }   
            }else{
                return false;
            }

        }

        public function findByUserId($id){

            
                $smtp = $this->conn->prepare(

                    "SELECT usuario.name FROM usuario
                    INNER JOIN dia_locacao 
                    ON  usuario.id = :id");

                $smtp->bindParam(":id", $id);
                $smtp->execute();

                if($smtp->rowCount() > 0){
                    $data = $smtp->fetch();
                    $user = $this->builduser($data);

                    return $user;
               }else{
                    return false;
                }   
    

        }

        public function findByToken($token){

            if($token != ""){
                $smtp = $this->conn->prepare("SELECT * FROM usuario WHERE token=:token");
                $smtp->bindParam(":token", $token);
                $smtp->execute();

                if($smtp->rowCount() > 0){
                    $data = $smtp->fetch();
                    $user = $this->builduser($data);

                    return $user;
                }else{
                    return false;
                }   
            }else{
                return false;
            }
        }

        public function findByProfile($profile){

            if($profile != ""){
                $smtp = $this->conn->prepare("SELECT * FROM usuario WHERE profile=:profile");
                $smtp->bindParam(":profile", $profile);
                $smtp->execute();

                if($smtp->rowCount() > 0){
                    $data = $smtp->fetch();
                    $user = $this->builduser($data);

                    return $user;
                }else{
                    return false;
                }   
            }else{
                return false;
            }
        }

     

        public function changePassWord(User $user){

            $smtp = $this->conn->prepare("UPDATE users SET password=:password WHERE id=:id");
            $smtp->bindParam(":password", $user->password);
            $smtp->bindParam(":id", $user->id);
            $smtp->execute();

             ///Enviar para o perfil do usuario
             $this->message->setMessage("Senha auterada com sucesso","sucess" ,"editProfile.php");


        }

        public function destroyToken(){

                //remove token da sessão

                $_SESSION['token'] = "";
                //redirecionar e mensagem de sucessso

                $this->message->setMessage("Logout feito com sucesso!!","sucess" ,"index.php");


        }

        public function authenticateUser($email, $password){

            $user = $this->findByEmail($email);

            if($user){
                //chegar se a sneha batem

                if($password === $user->password){

                    //gerar um token e inserir na sessão

                    $token = $user->generateToken();
                    $profile = $user->profile;

                    $this->setTokenSession($token, false);
                    $this->setProfileSession($profile, false);

                    //atualizar token no usuario

                    $user->token = $token;

                    $this->update($user, false);

                    return true;

                }else{
                    return false;
                }

            }else{

                return false;
            }

        }
    }


?>