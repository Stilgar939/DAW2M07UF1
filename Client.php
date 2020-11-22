<?php

    //Classe client que ereta de persona
    $doc = "/var/www/html/users/usuaris.txt";

    class Client extends Persona{

        var $user;
        var $pass;

        public function __construct($user,$pass){
            $this->user = $user;
            $this->pass = $pass;
        }

        public function AfegeixUsuari($info){
            $df = fopen($doc,"a") or die("L'usuari no s'ha pogut crear");
            fwrite($df,$info);
            fclose($df);
        }

    }

?>