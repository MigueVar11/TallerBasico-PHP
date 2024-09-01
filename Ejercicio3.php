<?php
//Ejercicio3
/*Crea un arreglo asociativo llamado $productos que almacene información sobre
productos en una tienda. Cada producto tiene un nombre, precio y un arreglo asociativo
que contiene detalles adicionales, como disponibilidad y reseñas. Muestra el nombre y el
precio de todos los productos que están disponibles.*/

$productos = [ //Creamos los productos en su arreglo
    "Computador" => [
        "precio" => 800,
        "detalles" => [
            "disponibilidad" => true,
            "reseñas" => 4.5
        ]
    ],
    "Celular" => [
        "precio" => 600,
        "detalles" => [
            "disponibilidad" => false,
            "reseñas" => 2.0
        ]
    ],
    "Nevera" => [
        "precio" => 500,
        "detalles" => [
            "disponibilidad" => true,
            "reseñas" => 2.2
        ]
        ],
        "Mesa" => [
        "precio" => 450,
        "detalles" => [
            "disponibilidad" => true,
            "reseñas" => 4.2
        ]
        ],"Tablet" => [
        "precio" => 200,
        "detalles" => [
            "disponibilidad" => false,
            "reseñas" => 3.3
        ]
        ],"Mouse" => [
        "precio" => 200,
        "detalles" => [
            "disponibilidad" => true,
            "reseñas" => 2.2
        ]
        ]
];
echo "Productos disponibles: <br>";
// Mostrar el nombre y el precio de los productos disponibles
foreach ($productos as $nombre => $informacion) {
    if ($informacion["detalles"]["disponibilidad"]) { //Si el producto esta disponible
        echo "Producto: $nombre - Precio: $" . $informacion["precio"] . "<br>";
    }
}

?>