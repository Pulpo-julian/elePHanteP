<?php

    // tipos de datos
    /*
    numero entero (int / integer)
    coma flotante o decimales (float / double) = 3.45
    cadenas de caracteres o String = "hola este es un texto"
    booleano (bool) = 1 0 true false
    null

    Array o ventores  Collection data

    tipo de datos de objetos

    */

    $numero = 45;

    $texto = "soy un texto";

    $verdadero = true;

    echo gettype($verdadero);

    echo $numero;

    //debug

    echo "<br>";

    $nombre = "julian andres jajajja";

    echo "<br>";

    var_dump($nombre);

    strlen($nombre);
    
    for($i = 0; $i < strlen($nombre); $i++){

        echo "<br>".$nombre[$i];

    }
    

?>