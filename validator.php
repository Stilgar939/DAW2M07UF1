<?php

    $fitxer_usuaris = "/var/www/html/users/usuaris.txt";
    $llegir_fitxer = fopen($fitxer_usuaris,"r") or die ("L'usuari no s'ha pogut validar");

    if($llegir_fitxer){
        $mida_fitxer = filesize($fitxer_usuaris);
        $usuaris = explode(PHP_EOL, fread($fitxer_usuaris,$mida_fitxer)); //Llegeix tot el fitxer d'usuaris
    }
    foreach ($usuaris as $usuari) {
        $login = explode(":",$usuari);
        
        $u = $_GET['usuari'];

        if( $u == 'administrador'){

            if(($_GET['usuari'] == $login[0]) && ($_GET['password'] == $login[1])){
                fclose($fitxer);
                session_name($_POST['usuari']);
                session_start();
		        break;
            }

            ?>
            <html>
                <h1>Benvingut administrador</h1>
                <?php echo "Sessió de l'usuari:".session_name()."<br>"; ?>
            </html>
            <?php
        }else{

            if(($_GET['usuari'] == $login[0]) && ($_GET['password'] == $login[1])){
                fclose($fitxer);
                session_name($_POST['usuari']);
                session_start();
		        break;
            }

            ?>
            
            <html>
                <h1>Benvingut client</h1>
                <?php echo "Sessió de l'usuari:".session_name()."<br>"; ?>
            </html>

            <?php

        }
    }

?>

