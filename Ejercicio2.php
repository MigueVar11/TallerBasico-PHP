<?php
//Ejercicio2
/*Crea un arreglo asociativo llamado $empleados que contenga información sobre varios
empleados. Cada empleado debe tener un nombre y un arreglo asociativo que almacene
información adicional, como salario, fecha de contratación y departamento. Luego,
muestra los nombres de todos los empleados junto con su salario.*/

$empleados = [ //Creamos los empleados en su arrelgo 
    "Miguel Vargas" => [
        "salario" => 50000,
        "fecha_contratacion" => "2020-01-15",
        "departamento" => "Sistemas "
    ],
    "Maria Lopez" => [
        "salario" => 55000,
        "fecha_contratacion" => "2019-06-23",
        "departamento" => "Marketing"
    ],
    "Carlos Gonzalez" => [
        "salario" => 60000,
        "fecha_contratacion" => "2021-03-30",
        "departamento" => "Desarrollo"
    ],"Martin Jose" => [
        "salario" => 70000,
        "fecha_contratacion" => "2023-04-16",
        "departamento" => "Contabilidad"
    ],
    "Jose Hernan" => [
        "salario" => 95000,
        "fecha_contratacion" => "2012-04-23",
        "departamento" => "Despacho"
    ],
    "Catalina Usme" => [
        "salario" => 10000,
        "fecha_contratacion" => "2013-03-12",
        "departamento" => "Sitemas"
    ]
];
echo "Empleados: <br>";
// Mostrar los nombres de los empleados junto con su salario
foreach ($empleados as $nombre => $info) {
    echo "Empleado: $nombre -Salario: $" . $info["salario"] . "<br>";
}
?>