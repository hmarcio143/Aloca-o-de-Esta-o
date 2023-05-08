<?php

    class User{

        public $id;
        public $name;
        public $lastname;
        public $email;
        public $password;
        public $token;
        public $profile;


        public function generateToken(){

            return bin2hex(random_bytes(50));
        }

        public function getFullName($user){
            return $user->name. " ".$user->lastname;
        }

        public function getProfile($user){

            return $user->profile;
        }

        public function getId($user){

            return $user->id;
        }

        public function imageGenerateName($ext){

            return bin2hex(random_bytes(60)).$ext;
        }
    }


    interface userDaointerface{

        public function builduser($data);
        public function create(User $user, $authUser = false );
        public function update (User $user, $redirect = true);
        public function verifyToken($protected = false );
        public function setTokenSession($email, $password);
        public function findByEmail($email);
        public function findById($id);
        public function findByToken($token);
        public function changePassWord(User $user);
        public function destroyToken();
        


    }



?>