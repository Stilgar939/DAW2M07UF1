<?php
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
            <li><a href="/projecte/cataleg_admin.html" class="first">Cataleg &raquo;</a>
                <ul>
                    <li><a href="/projecte/zona_personal.html">Afegir Producte</a></li>
                    <li><a href="/projecte/zona_personal.html">Modificar Producte</a></li>
                    <li><a href="/projecte/zona_personal.html">Eliminar Producte</a></li>

                </ul>
            </li>
            <li><a href="/projecte/comandes.html">Comandes &raquo;</a>
                <ul>
                    <li><a href="/projecte/visualitza.html">Visualitza</a></li>
                    <li><a href="/projecte/modifica.html">Modifica</a></li>
                    <li><a href="/projecte/elimina.html">Elimina</a></li>
                </ul>
            </li>
            <li><a href="/projecte/zona_personal.html">Zona Personal</a></li>
            <li><img src="/projecte/fotos/carret_40x30.jpeg" />
                <ul>
                <li><a href="/projecte/visualitza.html">Visualitza</a></li>
                    <li><a href="/projecte/modifica.html">Modifica</a></li>
                   <!-- TODO foreach carret compra per mostrar els productes que n'hi ha dintre-->
                    <?php
                        
                    ?>
                    <li><a href="/projecte/elimina.html">Compra</a></li>

                </ul>
            </li>
    </nav>


    <div class="grid">
        <img src="/projecte/fotos/fototest.jpg" alt="Producte 1">
        <img src="/projecte/fotos/fototest.jpg" alt="Producte 2">
        <img src="/projecte/fotos/fototest.jpg" alt="Producte 3">
        <img src="/projecte/fotos/fototest.jpg" alt="Producte 4">
        <img src="/projecte/fotos/fototest.jpg" alt="Producte 5">
        <img src="/projecte/fotos/fototest.jpg" alt="Producte 6">
    </div>

</body>

</html>