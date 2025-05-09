<!-- Declaración del tipo de documento HTML5 -->
<!DOCTYPE html>
<!-- Inicio del documento HTML con el idioma español -->
<html lang="es">
<head>
  <!-- Configuración de la codificación de caracteres -->
  <meta charset="UTF-8" />
  <!-- Título de la página que aparece en la pestaña del navegador -->
  <title>Librería Virtual</title>
  <!-- Inclusión de la hoja de estilos de Bootstrap desde un CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- Inclusión de una hoja de estilos personalizada -->
  <link rel="stylesheet" href="../style/style.css">
</head>
<body>

  <!-- ENCABEZADO DE LA PÁGINA -->
  <header class="py-3 shadow">
    <div class="container">
      <!-- Barra de navegación -->
      <nav class="navbar navbar-expand-lg navbar-dark">
        <!-- Marca o nombre de la librería -->
        <a class="navbar-brand" href="#">📚 Librería Virtual</a>
        <!-- Botón para mostrar/ocultar el menú en dispositivos pequeños -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Menú de navegación colapsable -->
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <!-- Enlace a la página de inicio -->
            <li class="nav-item"><a class="nav-link text-white" href="#">Inicio</a></li>
          
            <!-- Enlace a la página de contacto -->
            <li class="nav-item"><a class="nav-link text-white" href="/View/agregar/Agregar_Libro.php">Agregar Libro.</a></li>
          </ul>
        </div>
      </nav>
    </div>
  </header>

  <!-- CONTENIDO PRINCIPAL DE LA PÁGINA -->
  <div class="container py-5">
    <!-- Encabezado y barra de búsqueda -->
    <div class="d-flex justify-content-between align-items-center mb-3">
      <!-- Título principal de la página -->
      <h1>📚 Librería Virtual</h1>

      <!-- Barra de búsqueda de libros -->
     <!-- Barra de búsqueda centrada y funcional -->
<!-- Barra de búsqueda con botón -->
<div class="input-group mb-3 w-50">
  <input 
    id="searchInput"
    class="form-control" 
    type="search" 
    placeholder="Buscar libro por título..."
    aria-label="Buscar"
  >
  <button id="searchBtn" class="btn btn-outline-secondary">Buscar</button>
</div>

      <!-- Botón para ver el carrito de compras -->
      <button class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart">
        Ver carrito 🛒
      </button>
    </div>

    <!-- BOTÓN DESPLEGABLE DE CATEGORÍAS -->
   <!-- Menú desplegable de categorías -->
<!-- Botones de categoría -->
<div class="btn-group mb-4" id="category-buttons">
  <button class="btn btn-outline-primary active" data-cat="Todos">Todos</button>
  <button class="btn btn-outline-primary" data-cat="Novela">Novela</button>
  <button class="btn btn-outline-primary" data-cat="Fantasía">Fantasía</button>
  <button class="btn btn-outline-primary" data-cat="Ciencia">Ciencia</button>
</div>

<!-- Contenedor de libros -->
<div class="row" id="book-list">
  <!-- Los libros se cargarán aquí dinámicamente -->
</div>
    <!-- MENSAJE DE RESULTADO DE BÚSQUEDA -->
    <div id="search-results" class="alert alert-info mt-4" role="alert" style="display: none;">
      No se encontraron libros que coincidan con tu búsqueda.
    </div>
  </div>

  <!-- PANEL LATERAL DEL CARRITO DE COMPRAS -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasCart">
    <div class="offcanvas-header">
      <!-- Título del panel del carrito -->
      <h5 class="offcanvas-title">🛒 Carrito de compras</h5>
      <!-- Botón para cerrar el panel -->
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
      <!-- Lista de libros en el carrito -->
      <ul class="list-group mb-2" id="cart-list"></ul>
      <!-- Total del carrito -->
      <strong>Total: $<span id="cart-total">0</span></strong>
      <!-- Botón para finalizar la compra -->
      <button class="btn btn-success w-100 mt-3" id="checkout-btn">Finalizar compra</button>
    </div>
  </div>

  <!-- PIE DE PÁGINA -->
  <footer class="mt-5 py-4 text-center">
    <div class="container">
      <!-- Derechos de autor -->
      <p class="mb-1">© 2025 Librería Virtual - Todos los derechos reservados.</p>
      <!-- Enlaces a términos, privacidad y ayuda -->
      <p>
        <a href="/View/terminos/terms.php">Términos</a> · 
        <a href="/View/terminos/">Política de privacidad</a> · 
        <a href="#">Ayuda</a>
      </p>
    </div>
  </footer>

  <!-- INCLUSIÓN DE SCRIPTS -->
  <!-- Script de Bootstrap para funcionalidades interactivas -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Script personalizado para funcionalidades específicas de la librería -->
  <script src="../js/libros.js"></script>
  


</body>
</html>
