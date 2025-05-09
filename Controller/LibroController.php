<?php
// Incluye el archivo que contiene la definición de la clase Libro.
// Se utiliza 'require_once' para evitar múltiples inclusiones del mismo archivo.
require_once '../Model/Libro.php';

// Llama al método estático 'obtenerTodos' de la clase Libro para obtener todos los libros.
// Este método realiza una consulta a la base de datos y devuelve un arreglo asociativo con los datos.
$libros = Libro::obtenerTodos();

// Establece la cabecera HTTP para indicar que el contenido devuelto es de tipo JSON.
// Esto es importante para que el cliente (por ejemplo, una aplicación frontend) interprete correctamente la respuesta.
header('Content-Type: application/json');

// Convierte el arreglo de libros a formato JSON y lo imprime.
// 'json_encode' transforma el arreglo PHP en una cadena JSON.
// 'echo' envía esta cadena al cliente como respuesta.
echo json_encode($libros);
?>


