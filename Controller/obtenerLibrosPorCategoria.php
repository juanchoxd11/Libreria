<?php
require_once '../Model/Libro.php';

if (isset($_GET['categoria'])) {
  $categoria = $_GET['categoria'];
  if ($categoria === 'Todos') {
    $libros = Libro::obtenerTodos();
  } else {
    $libros = Libro::obtenerPorCategoria($categoria);
  }
  header('Content-Type: application/json');
  echo json_encode($libros);
} else {
  http_response_code(400);
  echo json_encode(['error' => 'Categoría no especificada']);
}
?>
