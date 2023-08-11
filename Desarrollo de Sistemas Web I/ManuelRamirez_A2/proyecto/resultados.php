<?php

$nombre =$_POST['nombre'];
$edad = $_POST['edad'];
$ciudad =$_POST['ciudad'];
$pasatiempo = $_POST['pasatiempo'];


?>



<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/7170789.js" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="style.css">
        <title>Resultados de datos</title>
    </head>

    <body>
    <div class="dive2">
        <h1>Resultados</h1>
        <center>
        <img src="chem.png" alt="chem"width="300">
    </center>
    <center>
        <a href="index.html">
            <button type="button" a href>Regresar</button>
        </a>
        
    </center>
       
        <h2>Bien hechooo</h2>
        <center>

        
        <?php
        echo '<p><b>Nombre: </b>'.$nombre.'</p>';
        echo '<p><b>Edad: </b>'.$edad.'</p>';
        echo '<p><b>Ciudad donde vives: </b>'.$ciudad.'</p>';
        echo '<p><b>Pasatiempo favorito: </b>'.$pasatiempo.'</p>';


        ?>

        </center>


        <div id="popUpOverlay"></div>
        <div id="popUpBox">
            <div id="box">
                <i class="fas fa-question-circle fa-5x"></i>
                <h1>¿Volver a ingresar datos?</h1>
                <div id="closeModal"></div>
            </div>
        </div>
        <button onclick="Alert.render('you look very pretty today')" class="btn">¡Volver a ingresar!</button>
        <script src="app.js"></script>
    </div>
 </body>
</html>