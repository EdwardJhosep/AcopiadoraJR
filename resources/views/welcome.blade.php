<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acopiadora JR - Compra de Cacao y Maíz</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-gray-100">

<!-- NAVBAR -->
<nav class="bg-green-800">
  <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
    <div class="relative flex items-center justify-between h-16">
      <div class="flex-shrink-0">
        <img class="h-14 w-auto" src="/imagenes/logo.png" alt="Acopiadora JR">
      </div>
      <div class="hidden sm:flex sm:ml-6">
      <div class="flex space-x-4">
  <a href="{{ route('inicio') }}" class="text-white px-3 py-2 rounded-md text-sm font-medium bg-green-900">Inicio</a>
  <a href="{{ route('productos') }}" class="text-white hover:bg-green-700 px-3 py-2 rounded-md text-sm font-medium">Compra de Productos</a>
  <a href="{{ route('nosotros') }}" class="text-white hover:bg-green-700 px-3 py-2 rounded-md text-sm font-medium">Acerca de Nosotros</a>
  <a href="{{ route('contacto') }}" class="text-white hover:bg-green-700 px-3 py-2 rounded-md text-sm font-medium">Contáctanos</a>
  <a href="{{ route('login') }}" class="text-white hover:bg-green-700 px-3 py-2 rounded-md text-sm font-medium">Login</a>
</div>

      </div>
      <div class="flex sm:hidden">
        <button class="text-white hover:bg-green-700 px-3 py-2 rounded-md text-sm font-medium" id="mobile-menu-button">
          <i class="fas fa-bars"></i> <!-- Icono de hamburguesa -->
        </button>
      </div>
    </div>
  </div>
</nav>

<!-- MOBILE MENU -->
<div class="sm:hidden bg-green-800" id="mobile-menu" style="display: none;">
  <div class="px-2 pt-2 pb-3 space-y-1">
    <a href="{{ route('inicio') }}" class="text-white block px-3 py-2 rounded-md text-base font-medium bg-green-900">Inicio</a>
    <a href="{{ route('productos') }}" class="text-white hover:bg-green-700 block px-3 py-2 rounded-md text-base font-medium">Compra de Productos</a>
    <a href="{{ route('nosotros') }}" class="text-white hover:bg-green-700 block px-3 py-2 rounded-md text-base font-medium">Acerca de Nosotros</a>
    <a href="{{ route('contacto') }}" class="text-white hover:bg-green-700 block px-3 py-2 rounded-md text-base font-medium">Contáctanos</a>
    <a href="{{ route('login') }}" class="text-white hover:bg-green-700 block px-3 py-2 rounded-md text-base font-medium">Login</a>
  </div>
</div>


<!-- HERO SECTION -->
<div class="relative isolate overflow-hidden bg-gray-900 py-16 sm:py-24 lg:py-32">
  <div class="max-w-7xl mx-auto px-6 lg:px-8 text-center">
    <h1 class="text-4xl font-bold tracking-tight text-white sm:text-5xl">Bienvenido a Acopiadora JR</h1>
    <p class="mt-4 text-lg leading-8 text-gray-300">Compra de Cacao y Maíz de la mejor calidad.</p>
    <form class="mt-8 flex justify-center">
      <input type="text" placeholder="Buscar por DNI" class="px-4 py-2 border rounded-l-md focus:outline-none focus:ring focus:ring-green-500" />
      <button type="submit" class="bg-green-700 text-white px-4 py-2 rounded-r-md hover:bg-green-600">Buscar</button>
    </form>
  </div>
</div>

<!-- Sección de compra de productos -->
<section id="productos" class="py-12 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">Compra de Productos</h2>
    <p class="text-gray-600 text-center mb-6">Estamos interesados en adquirir cacao y maíz de calidad. Contáctanos para obtener más detalles sobre nuestras tarifas y procesos.</p>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 gap-8">
      <!-- Producto 1 -->
      <div class="bg-white shadow-lg rounded-lg overflow-hidden text-center">
        <img src="/imagenes/cacao.jpg" alt="Cacao en grano" class="w-full h-48 object-cover">
        <div class="p-4">
          <h3 class="text-lg font-bold text-gray-800">Cacao en grano</h3>
          <p class="text-gray-600 mt-2">Buscamos cacao de calidad premium para la industria.</p>
        </div>
      </div>

      <!-- Producto 2 -->
      <div class="bg-white shadow-lg rounded-lg overflow-hidden text-center">
        <img src="/imagenes/maiz.jpg" alt="Maíz" class="w-full h-48 object-cover">
        <div class="p-4">
          <h3 class="text-lg font-bold text-gray-800">Maíz amarillo</h3>
          <p class="text-gray-600 mt-2">Adquirimos maíz amarillo de alta calidad para el mercado.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Sección sobre nosotros -->
<section id="nosotros" class="py-12">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
    <h2 class="text-3xl font-bold text-gray-800 mb-4">Acerca de Nosotros</h2>
    <p class="text-gray-600">En Acopiadora JR, nos dedicamos a la compra de cacao y maíz, buscando siempre la mejor calidad. Nuestro objetivo es colaborar con los agricultores para promover sus productos en el mercado.</p>
  </div>
</section>

<!-- Sección de contacto -->
<section id="contacto" class="bg-green-800 py-12">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
    <h2 class="text-3xl font-bold text-white mb-4">Contáctanos</h2>
    <p class="text-gray-300 mb-8">Si estás interesado en vendernos cacao o maíz, por favor contáctanos.</p>
    <a href="tel:986425275" class="bg-white text-green-800 px-6 py-3 rounded-md font-medium hover:bg-gray-200">CONTACTAR</a>
  </div>
</section>

<!-- WhatsApp Floating Button -->
<a href="https://wa.me/51986425275" class="fixed bottom-5 right-5 bg-green-500 text-white rounded-full p-3 shadow-lg hover:bg-green-600" title="Contactar por WhatsApp" target="_blank">
    <i class="fab fa-whatsapp fa-lg"></i> <!-- Icono de WhatsApp -->
</a>

<!-- Footer -->
<footer class="bg-gray-800 py-6">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
    <p class="text-gray-400">&copy; 2024 Acopiadora JR. Todos los derechos reservados.</p>
  </div>
</footer>

<script>
  document.getElementById('mobile-menu-button').onclick = function() {
    var menu = document.getElementById('mobile-menu');
    if (menu.style.display === "none") {
      menu.style.display = "block";
    } else {
      menu.style.display = "none";
    }
  };
</script>

</body>
</html>
