<?php
require_once '../Model/LibroAgregar.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = $_POST['titulo'];
    $categoria_id = $_POST['categoria_id'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];
    $imagen = $_POST['imagen'];
    $cantidad = $_POST['cantidad'];

    $exito = LibroAgregar::agregarLibro($titulo, $categoria_id, $precio, $descripcion, $imagen, $cantidad);

    if ($exito) {
        header("Location: ../View/index.php?mensaje=Libro agregado correctamente");
        exit();
    } else {
        echo "Error al agregar el libro.";
    }
} else {
    echo "Acceso denegado.";
}
