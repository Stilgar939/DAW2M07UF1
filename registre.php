<?php

    require_once("Client.php");

    //Classe client que ereta de persona
    $doc = "/var/www/html/users/usuaris.txt";

    $usr = $_POST["usuari"];
    $pwd = $_POST["password"];

    $info = $usr.":".$pwd;

    $u = new Client($usr,$pwd);
    $u -> AfegeixUsuari($info);
    echo("Usuari creat correctament");

?>