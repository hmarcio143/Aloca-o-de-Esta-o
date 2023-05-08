<?php

    class Data{

        public $id;
        public $dia;
        public $mes;
        public $ano;
        public $usuario_id;
        public $name;


        public function generateToken(){

            return bin2hex(random_bytes(50));
        }

        public function getFullName($user){
            return $user->name. " ".$user->lastname;
        }

        public function getProfile($user){

            return $user->profile;
        }

        public function getUser_id($user){

            return $user->usuario_id;
        }


        public function getId($user){

            return $user->id;
        }
    }




?>