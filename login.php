<html>

    <head>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>

    <body>
        <div id="box">
            <h1>Accedeix a l'espai</h1>
            <input id="usr" type="text" value="usuari"><br>
            <input id="pwd" type="password" value="password">
            <button id="accedir">Accedir</button>
        </div>
    </body>

</html>

<?php

    //comprovar login
    function login(){
        $user = $_GET["nom"];
        $password = $_GET["password"];

        if($user == "admin" && $password == "1234"){
           
    }

?>

