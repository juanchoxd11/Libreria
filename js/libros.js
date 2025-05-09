document.addEventListener('DOMContentLoaded', () => {
  const categoryButtons = document.querySelectorAll('#category-buttons button');
  const bookList = document.getElementById('book-list');
  const searchResults = document.getElementById('search-results');

  // Función para cargar libros por categoría
  function cargarLibros(categoria) {
    fetch(`../Controller/obtenerLibrosPorCategoria.php?categoria=${encodeURIComponent(categoria)}`)
      .then(response => response.json())
      .then(libros => {
        bookList.innerHTML = '';
        if (libros.length === 0) {
          searchResults.style.display = 'block';
        } else {
          searchResults.style.display = 'none';
          libros.forEach(libro => {
            const col = document.createElement('div');
            col.className = 'col-md-4 mb-4';
            col.innerHTML = `
              <div class="card h-100">
                <img src="${libro.imagen}" class="card-img-top" alt="${libro.titulo}">
                <div class="card-body d-flex flex-column">
                  <h5 class="card-title">${libro.titulo}</h5>
                  <p class="card-text">Autor: ${libro.autor}</p>
                  <p class="card-text">Categoría: ${libro.categoria}</p>
                  <p class="card-text fw-bold">$${libro.precio}</p>
                  <button class="btn btn-outline-primary mt-auto">Agregar al carrito</button>
                </div>
              </div>
            `;
            bookList.appendChild(col);
          });
        }
      })
      .catch(error => {
        console.error('Error al cargar libros:', error);
      });
  }

  // Event listeners para los botones de categoría
  categoryButtons.forEach(button => {
    button.addEventListener('click', () => {
      categoryButtons.forEach(btn => btn.classList.remove('active'));
      button.classList.add('active');
      const categoria = button.getAttribute('data-cat');
      cargarLibros(categoria);
    });
  });

  // Cargar todos los libros al iniciar
  cargarLibros('Todos');
});
document.getElementById('search-btn').addEventListener('click', function () {
  const query = document.getElementById('search-input').value;

  fetch('../Controlador/buscarLibros.php?q=' + encodeURIComponent(query))
      .then(response => response.json())
      .then(data => {
          const bookList = document.getElementById('book-list');
          bookList.innerHTML = '';

          if (data.length === 0) {
              document.getElementById('search-results').style.display = 'block';
          } else {
              document.getElementById('search-results').style.display = 'none';
              data.forEach(libro => {
                  const card = `
                      <div class="col-md-4 mb-4">
                          <div class="card h-100">
                              <img src="${libro.imagen}" class="card-img-top book-img" alt="${libro.titulo}">
                              <div class="card-body">
                                  <h5 class="card-title">${libro.titulo}</h5>
                                  <p class="card-text">${libro.descripcion}</p>
                                  <p><strong>Precio:</strong> $${libro.precio}</p>
                                  <button class="btn btn-primary">Agregar al carrito</button>
                              </div>
                          </div>
                      </div>`;
                  bookList.innerHTML += card;
              });
          }
      });
});


document.addEventListener('DOMContentLoaded', () => {
  const categoryButtons = document.querySelectorAll('#category-buttons button');
  const bookList = document.getElementById('book-list');
  const searchResults = document.getElementById('search-results');

  function cargarLibros(categoria) {
    fetch(`../Controller/obtenerLibrosPorCategoria.php?categoria=${encodeURIComponent(categoria)}`)
      .then(response => response.json())
      .then(libros => {
        bookList.innerHTML = '';
        if (libros.length === 0) {
          searchResults.style.display = 'block';
        } else {
          searchResults.style.display = 'none';
          libros.forEach(libro => {
            const col = document.createElement('div');
            col.className = 'col-md-4 mb-4';
            col.innerHTML = `
              <div class="card h-100">
                <img src="${libro.imagen}" class="card-img-top" alt="${libro.titulo}">
                <div class="card-body d-flex flex-column">
                  <h5 class="card-title">${libro.titulo}</h5>
                  <p class="card-text">Autor: ${libro.autor}</p>
                  <p class="card-text">Categoría: ${libro.categoria}</p>
                  <p class="card-text fw-bold">$${libro.precio}</p>
                  <button class="btn btn-outline-primary mt-auto">Agregar al carrito</button>
                </div>
              </div>
            `;
            bookList.appendChild(col);
          });
        }
      })
      .catch(error => {
        console.error('Error al cargar libros:', error);
      });
  }

  categoryButtons.forEach(button => {
    button.addEventListener('click', () => {
      categoryButtons.forEach(btn => btn.classList.remove('active'));
      button.classList.add('active');
      const categoria = button.getAttribute('data-cat');
      cargarLibros(categoria);
    });
  });

  cargarLibros('Todos');
});

// BÚSQUEDA
document.getElementById('search-btn').addEventListener('click', function () {
  const query = document.getElementById('searchInput').value;

  fetch('../Controlador/buscarLibros.php?q=' + encodeURIComponent(query))
    .then(response => response.json())
    .then(data => {
      const bookList = document.getElementById('book-list');
      bookList.innerHTML = '';

      if (data.length === 0) {
        document.getElementById('search-results').style.display = 'block';
      } else {
        document.getElementById('search-results').style.display = 'none';
        data.forEach(libro => {
          const card = `
            <div class="col-md-4 mb-4">
              <div class="card h-100">
                <img src="${libro.imagen}" class="card-img-top book-img" alt="${libro.titulo}">
                <div class="card-body d-flex flex-column">
                  <h5 class="card-title">${libro.titulo}</h5>
                  <p class="card-text">${libro.descripcion}</p>
                  <p class="card-text fw-bold">$${libro.precio}</p>
                  <button class="btn btn-primary mt-auto">Agregar al carrito</button>
                </div>
              </div>
            </div>`;
          bookList.innerHTML += card;
        });
      }
    });
});


// CARRITO DE COMPRAS
let carrito = [];

function agregarAlCarrito(libro) {
  const existente = carrito.find(item => item.id === libro.id);
  if (existente) {
    existente.cantidad += 1;
  } else {
    libro.cantidad = 1;
    carrito.push(libro);
  }
  actualizarCarrito();
}

function actualizarCarrito() {
  const cartList = document.getElementById('cart-list');
  const cartTotal = document.getElementById('cart-total');
  cartList.innerHTML = '';
  let total = 0;

  carrito.forEach(libro => {
    const item = document.createElement('li');
    item.className = 'list-group-item d-flex justify-content-between align-items-center';
    item.innerHTML = `
      ${libro.titulo} x${libro.cantidad}
      <span>$${(libro.precio * libro.cantidad).toFixed(2)}</span>
    `;
    cartList.appendChild(item);
    total += libro.precio * libro.cantidad;
  });

  cartTotal.textContent = total.toFixed(2);
}

// DELEGACIÓN para detectar botones dinámicos de "Agregar al carrito"
document.addEventListener('click', function(e) {
  if (e.target && e.target.textContent.includes('Agregar al carrito')) {
    const card = e.target.closest('.card');
    if (!card) return;

    const titulo = card.querySelector('.card-title')?.textContent || 'Sin título';
    const precioEl = card.querySelector('.fw-bold');
    const precio = parseFloat(precioEl?.textContent.replace('$', '').trim()) || 0;
    const imagen = card.querySelector('img')?.src || '';

    const libro = {
      id: titulo + precio, // ID temporal
      titulo,
      precio,
      imagen
    };

    agregarAlCarrito(libro);
  }
});


