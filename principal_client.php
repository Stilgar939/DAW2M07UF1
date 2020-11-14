<?php
    session_name("client");
    session_start();
?>

<html>
    <h1>Benvingut client</h1>
    <?php echo "Sessió de l'usuari:".session_name()."<br>"; ?>
</html>