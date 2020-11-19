<?php

    //Classe client que ereta de persona
    $doc = "/var/www/html/users/usuaris.txt";

    $usr = $_POST["usuari"];
    $pwd = $_POST["password"];

    $info = $usr.":".$pwd;

    class Client extends Persona{

        public function __construct($user,$pass){
            $df = fopen($doc,"a") or die("L'usuari no s'ha pogut crear");
            fwrite($df,$info);
            fclose($df);
        }

    }

    $u = new Client($usr,$pwd);     

?>