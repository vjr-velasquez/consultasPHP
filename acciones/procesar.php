<?php
    #Declarando una variable
    $nombre = $_GET['txt_nombre'];
    $edad = $_GET['txt_edad'];
    $sueldo = $_GET['txt_sueldo'];
    echo "Este es mi nombre: $nombre";
    echo "<br>";
    echo "Este es mi primer codigo PHP";
    echo "<br>";
    echo "Esta es mi edad: $edad";
    echo "<br>";
    echo "Este es mi sueldo: $sueldo";


    echo "<br> La raiz cuadrada de la edad es: " . sqrt($edad);
    echo "<br> La edad al cuadrado es: " . pow($edad, 2);

    if ($edad < 18) {
        echo "<br> Eres menor de edad";
    } else {
        echo "<br> Eres mayor de edad";
    }
    echo "<br><br><br>";
    echo "<br>Numeros continuos desde 1 hasta la edad: ";
    for ($i=0; $i <= $edad ; $i++) { 
        echo "<b>" . $i ;
    }
?>
<br>
<a href="../index.php">Regresar</a>