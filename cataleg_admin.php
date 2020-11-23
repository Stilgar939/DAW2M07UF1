<?php
include "objectes.php";
session_name('sessioAdmin');
session_start();

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Projecte M07</title>
</head>

<body>
    <nav>
        <ul id="navigation">
            <li><a href="/M07/projecte/cataleg.php" class="first">Cataleg &raquo;</a>
                <ul>
                    <li><a href="/M07/projecte/zona_personal.php">Afegir Producte</a></li>
                    <li><a href="/M07/projecte/zona_personal.php">Modificar Producte</a></li>
                    <li><a href="/M07/projecte/zona_personal.php">Eliminar Producte</a></li>

                </ul>
            <li><a href="/M07/projecte/comandes.php">Comandes &raquo;</a>
                <ul>
                    <li><a href="/M07/projecte/visualitza.html">Visualitza</a></li>
                    <li><a href="/M07/projecte/modifica.html">Modifica</a></li>
                    <li><a href="/M07/projecte/elimina.html">Elimina</a></li>
                </ul>
            <li><a href="/M07/projecte/zona_personal.php">Zona Personal</a></li>
    </nav>


    <div class="grid">
        <img src="/M07/projecte/fotos/fototest.jpg" alt="Producte 1">
        <img src="/M07/projecte/fotos/fototest.jpg" alt="Producte 2">
        <img src="/M07/projecte/fotos/fototest.jpg" alt="Producte 3">
        <img src="/M07/projecte/fotos/fototest.jpg" alt="Producte 4">
        <img src="/M07/projecte/fotos/fototest.jpg" alt="Producte 5">
        <img src="/M07/projecte/fotos/fototest.jpg" alt="Producte 6">
    </div>

</body>

</html>