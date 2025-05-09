<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Agregar Nuevo Libro</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Enlace a Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
 
  <style>
    /* Estilos personalizados */
    body {
      background: #f8f9fa;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      scroll-behavior: smooth;
    }

    header {
      background: linear-gradient(90deg, #ff6f61, #ffcc00);
      color: white;
      transition: all 0.3s ease;
    }

    header:hover {
      filter: brightness(1.05);
    }

    footer {
      background: #343a40;
      color: white;
      padding-top: 1rem;
      padding-bottom: 1rem;
    }

    footer a {
      color: #ffc107;
      text-decoration: none;
      transition: color 0.2s ease;
    }

    footer a:hover {
      text-decoration: underline;
      color: #ffdd57;
    }

    .navbar-brand {
      font-weight: bold;
      font-size: 1.8rem;
      animation: fadeIn 1s ease-in-out;
    }

    .btn-outline-primary.active {
      background-color: #ffcc00;
      border-color: #ffcc00;
      color: black;
    }

    .btn-outline-primary {
      transition: all 0.3s ease;
    }

    .btn-outline-primary:hover {
      background-color: #ffe066;
      color: #333;
    }

    .btn-primary {
      background-color: #ff6f61;
      border: none;
      transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
      background-color: #e65c50;
    }

    .book-img {
      height: 200px;
      object-fit: cover;
      transition: transform 0.3s ease;
    }

    .card:hover .book-img {
      transform: scale(1.05);
    }

    .card {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      border: none;
      border-radius: 10px;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 0.75rem 1.5rem rgba(0, 0, 0, 0.1);
    }

    #search-results {
      display: none;
      animation: fadeIn 0.6s ease-in-out;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(15px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Estilo para el contenedor del formulario */
    .form-wrapper {
      max-width: 600px;
      margin: 3rem auto;
      background: #ffffff;
      padding: 2rem;
      border-radius: 10px;
      box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
    }
  </style>
</head>
<body>
  <header class="py-4 text-center">
    <h1>Librería Virtual</h1>
    <p>Tu espacio para descubrir y adquirir libros únicos</p>
  </header>
  <div class="form-wrapper">
  <h2 class="mb-4 text-center">Agregar Nuevo Libro</h2>
  <form action="procesar_agregar_libro.php" method="POST">
    <div class="mb-3">
      <label for="titulo" class="form-label">Título</label>
      <input type="text" class="form-control" id="titulo" name="titulo" required>
    </div>

    <div class="mb-3">
      <label for="categoria" class="form-label">Categoría</label>
      <select class="form-select" id="categoria" name="categoria_id" required>
        <option value="">Seleccione una categoría</option>
        <option value="1">Novela</option>
        <option value="2">Fantasía</option>
        <option value="3">Ciencia</option>
      </select>
    </div>

    <div class="mb-3">
      <label for="precio" class="form-label">Precio</label>
      <input type="number" step="0.01" class="form-control" id="precio" name="precio" required>
    </div>

    <div class="mb-3">
      <label for="descripcion" class="form-label">Descripción</label>
      <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
    </div>

    <div class="mb-3">
      <label for="imagen" class="form-label">URL de la Imagen</label>
      <input type="url" class="form-control" id="imagen" name="imagen" required>
    </div>

    <div class="mb-3">
      <label for="cantidad" class="form-label">Cantidad Disponible</label>
      <input type="number" class="form-control" id="cantidad" name="cantidad" required>
    </div>

    <button type="submit" class="btn btn-primary w-100">Agregar Libro</button>
  </form>
</div>


  <footer class="text-center mt-5">
    <p>&copy; 2025 Librería Virtual. Todos los derechos reservados.</p>
  </footer>

  <!-- Enlace al JS de Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
