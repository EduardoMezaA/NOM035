<?php
    $respuestas = array();
    foreach ($_POST as $pregunta => $respuesta) {
        echo "Pregunta ".$pregunta.": ".$respuesta."<br>";
    }
    /*
    foreach ($_POST as $pregunta => $respuesta) {
        if (substr($pregunta, 0, 8) == 'pregunta') {
            $numero_pregunta = substr($pregunta, 8);
            $respuestas[$numero_pregunta] = $respuesta;
        }
    }
     
    // Procesar las respuestas del usuario
    foreach ($respuestas as $numero_pregunta => $respuesta) {
        // Aquí puedes hacer lo que quieras con cada respuesta, como guardarla en una base de datos o en un archivo de texto
        echo "Pregunta ".$numero_pregunta.": ".$respuesta."<br>";
    }
    */
?>