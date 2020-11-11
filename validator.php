<?php

    $users = "/var/www/html/users/usuaris.txt";
    $fitxer = fopen($users,"r") or die ("L'usuari no s'ha pogut validar");

    if($fitxer){
        $mida_fitxer = filesize($users);
        $llegir_usuaris = explode(PHP_EOL, fread($fitxer,$mida_fitxer)); //Llegeix tot el fitxer d'usuaris
    }
    foreach ($llegir_usuaris as $usuari) {
        $login = explode(":",$usuari);
        
        if(($_POST['usuari'] == $logpwd[0]) && ($_POST['password'] == $logpwd[1])){
            fclose($fitxer);
            session_name($_POST['usuari']);
			session_start();
			break;
        }
    }

?>

<html>
    <h1>HolaMon</h1>
</html>
