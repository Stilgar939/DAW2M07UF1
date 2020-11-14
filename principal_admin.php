<?php
    session_name('sessioAdmin');
    session_start();
?>

<html>
    <h1>Benvingut administrador</h1>
    <?php echo "Sessió de l'usuari:".session_name()."<br>"; ?>
</html>