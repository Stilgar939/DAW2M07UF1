<?php

    $fitxer_usuaris = "/var/www/html/users/usuaris.txt";
    $llegir_fitxer = fopen($fitxer_usuaris,"r") or die ("L'usuari no s'ha pogut validar");

    if($llegir_fitxer){
        $mida_fitxer = filesize($fitxer_usuaris);
        $usuaris = explode(PHP_EOL, fread($llegir_fitxer,$mida_fitxer)); //Llegeix tot el fitxer d'usuaris
    }
    foreach ($usuaris as $usuari) {
        $login = explode(":",$usuari);

        $usr = $_POST['usuari'];
        $pwd = $_POST['password'];

        if( $usr == 'administrador'){

            if($usr == $login[0] && $pwd == $login[1]){
                fclose($fitxer);
                header('Location: /principal_admin.php');
                break;
                
            }else{
                header('Location: /login.html');
            }  
        }
        else{
            if($usr == $login[0] && $pwd == $login[1]){
                fclose($fitxer);
                header('Location: /principal_client.php');
                break;
        
            }else{
                header('Location: /login.html');
            }
            
        }
    

    }
    
?>

