<?php

    $users = "/var/www/html/users/usuaris.txt";
    $fitxer = fopen($users,"r") or die ("L'usuari no s'ha pogut validar");

    if($fitxer){
        $mida_fitxer = filesize($users);
        $llegir_usuaris = explode(PHP_EOL, fread($fitxer,$mida_fitxer)); //Llegeix tot el fitxer d'usuaris
    }
    foreach ($llegir_usuaris as $usuari) {
        list($usr, $pwd) = explode(":",$usuari);
        
        if(($_POST['usuari'] == $usr) && ($_POST["password"] == $pwd)){
            fclose($fitxer);
            echo("Sessio iniciada");
        }
    }

?>

<html>
    <h1>HolaMon</h1>
</html>
