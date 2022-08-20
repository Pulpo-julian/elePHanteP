<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Imprimir Por Pantalla</title>
    </head>
    <body>

        <h1>Master en PHP <?php echo "yo estoy aprendiendo PHP" ?></h1>

        con esto llamo al "echo"
        <?="Bienvenido a mi pagina de videojuegos"?>

        <?php

            //titulo de la pantalla
            echo "<h3>Listado de videojuegos</h3>";

            echo "<ul>"
                .   "<li>GTA</li>"
                .   "<li>The last of us</>"
                .   "<li>Red Dead Redemtion</li>"
                ."</ul>";

            echo "<p>esta es toda"." - "." la lista de videojuegos</p>";






        ?>

        
    </body>
</html>

