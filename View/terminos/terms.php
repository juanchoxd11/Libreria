<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <title>Términos y Condiciones - Librería Virtual</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <style>
    body {
      background: linear-gradient(180deg, #fff8e1, #fff3cd);
      font-family: 'Segoe UI', sans-serif;
    }

    header {
      background: linear-gradient(90deg, #ff6f61, #ffcc00);
      color: white;
    }

    .terms-container {
      max-width: 850px;
      margin: 0 auto;
      background: #ffffff;
      padding: 40px;
      border-radius: 20px;
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
      transform: perspective(800px) rotateY(1deg);
    }

    h1 {
      color: #ff6f61;
      font-weight: bold;
    }

    ul li::before {
      content: "✔️ ";
      margin-right: 8px;
    }

    @keyframes float {
      0%, 100% { transform: translateY(0px) rotate(0deg); }
      50% { transform: translateY(-10px) rotate(2deg); }
    }

    .floating-icon {
      position: fixed;
      bottom: 20px;
      right: 20px;
      z-index: 1000;
      animation: float 4s ease-in-out infinite;
    }
  </style>
</head>
<body>

  <header class="py-3 shadow text-center">
    <h1 class="animate__animated animate__fadeInDown">📜 Términos y Condiciones</h1>
  </header>

  <main class="py-5">
    <div class="terms-container animate__animated animate__fadeInUp">
      <h2 class="mb-4">Bienvenido a nuestra librería virtual 📚</h2>
      <p class="fs-5">Por favor, revisa nuestras políticas y condiciones antes de utilizar el sitio.</p>
      <ul class="fs-5 mt-4">
        <li>La información personal es confidencial y protegida según la ley.</li>
        <li>Los envíos se realizan en un plazo de 3 días hábiles.</li>
        <li>Si recibes un producto defectuoso, tienes 48 horas para notificarlo.</li>
        <li>Las compras se procesan mediante plataformas de pago seguras.</li>
        <li>No se aceptan devoluciones salvo en caso de defecto comprobable.</li>
        <li>El uso del sitio implica la aceptación de estos términos.</li>
      </ul>
    </div>
  </main>

  <!-- Icono 3D decorativo -->
  <div class="floating-icon">
    <img src="https://cdn-icons-png.flaticon.com/512/3185/3185072.png" width="60" alt="Libro animado" />
  </div>

</body>
</html>
