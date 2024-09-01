<?php
//Ejercicio1
/*Crear un arreglo asociativo llamado $estudiantes donde cada clave es el nombre de un
estudiante y el valor es un arreglo con las calificaciones de ese estudiante en diferentes
asignaturas. Calcular el promedio de calificaciones para cada estudiante y luego mostrar
al estudiante con el promedio más alto.*/

$estudiantes = array( //Creamos los estudiantes en su arreglo
    "Martin" => array(10, 9, 8, 7, 6),
    "Carlos" => array(9, 8, 7, 2, 5),
    "Juelita" => array(8, 7, 6, 5, 4),
    "Leo" => array(7, 6, 5, 4, 3),
    "Luis" => array(6, 5, 4, 3, 2),
    "Gabriel" => array(5, 4, 5, 4, 3),
    "Mateo" => array(2, 2, 2, 3, 2)
);
//Almacenar el mejor estudiante y su promedio
$mejorEstudiante = ""; 
$mejorPromedio = 0;
echo "Calificaciones de los Estudiantes: <br>";
//Calcular promedio de calificaciones para cada estudiante
foreach ($estudiantes as $nombre => $calificaciones) {
    $suma = 0;
    foreach ($calificaciones as $calificacion) {
        $suma += $calificacion;
    }
    $promedio = $suma / count($calificaciones);
    echo "El promedio de $nombre es: $promedio <br>";
    if ($promedio > $mejorPromedio) {
        $mejorPromedio = $promedio;
        $mejorEstudiante = $nombre;
    }
}
// Mostrar el estudiante con el promedio más alto
echo "<br>";
echo " <b>El mejor estudiante es : $mejorEstudiante <br> con un promedio: $mejorPromedio </b>";
?>