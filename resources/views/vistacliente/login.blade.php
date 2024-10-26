<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
          <a href="{{ route('inicio') }}" class="{{ Route::is('inicio') ? 'bg-green-900' : '' }} text-white px-3 py-2 rounded-md text-sm font-medium">Inicio</a>
          <a href="{{ route('productos') }}" class="{{ Route::is('productos') ? 'bg-green-900' : '' }} text-white hover:bg-green-700 px-3 py-2 rounded-md text-sm font-medium">Compra de Productos</a>
          <a href="{{ route('nosotros') }}" class="{{ Route::is('nosotros') ? 'bg-green-900' : '' }} text-white hover:bg-green-700 px-3 py-2 rounded-md text-sm font-medium">Acerca de Nosotros</a>
          <a href="{{ route('contacto') }}" class="{{ Route::is('contacto') ? 'bg-green-900' : '' }} text-white hover:bg-green-700 px-3 py-2 rounded-md text-sm font-medium">Contáctanos</a>
          <a href="{{ route('login') }}" class="{{ Route::is('login') ? 'bg-green-900' : '' }} text-white hover:bg-green-700 px-3 py-2 rounded-md text-sm font-medium">Login</a>
        </div>
      </div>
      <div class="flex sm:hidden">
        <button class="text-white hover:bg-green-700 px-3 py-2 rounded-md text-sm font-medium" id="mobile-menu-button">
          <i class="fas fa-bars"></i>
        </button>
      </div>
    </div>
  </div>
</nav>

<!-- MOBILE MENU -->
<div class="sm:hidden bg-green-800" id="mobile-menu" style="display: none;">
  <div class="px-2 pt-2 pb-3 space-y-1">
    <a href="{{ route('inicio') }}" class="{{ Route::is('inicio') ? 'bg-green-900' : '' }} text-white block px-3 py-2 rounded-md text-base font-medium">Inicio</a>
    <a href="{{ route('productos') }}" class="{{ Route::is('productos') ? 'bg-green-900' : '' }} text-white hover:bg-green-700 block px-3 py-2 rounded-md text-base font-medium">Compra de Productos</a>
    <a href="{{ route('nosotros') }}" class="{{ Route::is('nosotros') ? 'bg-green-900' : '' }} text-white hover:bg-green-700 block px-3 py-2 rounded-md text-base font-medium">Acerca de Nosotros</a>
    <a href="{{ route('contacto') }}" class="{{ Route::is('contacto') ? 'bg-green-900' : '' }} text-white hover:bg-green-700 block px-3 py-2 rounded-md text-base font-medium">Contáctanos</a>
    <a href="{{ route('login') }}" class="{{ Route::is('login') ? 'bg-green-900' : '' }} text-white hover:bg-green-700 block px-3 py-2 rounded-md text-base font-medium">Login</a>
  </div>
</div>

<!-- LOGIN FORM -->
<div class="flex items-center justify-center min-h-screen py-12">
    <div class="w-full max-w-md bg-white shadow-md rounded-lg p-6">
        <div class="flex justify-center mb-6">
            <img src="/imagenes/logo2.png" alt="Logo" class="h-16">
        </div>
        <h2 class="text-2xl font-bold text-center mb-8">Inicia sesión en tu cuenta</h2>
        <form action="{{ route('loginAdmin') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">DNI</label>
                <input type="text" name="dni" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 @error('dni') border-red-500 @enderror">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2">Contraseña</label>
                <input type="password" name="password" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500 @error('password') border-red-500 @enderror">
            </div>
            <button type="submit" class="w-full bg-green-800 text-white py-2 rounded-md hover:bg-green-700">Iniciar sesión</button>
        </form>
    </div>
</div>

<!-- WhatsApp Floating Button -->
<a href="https://wa.me/51986425275" class="fixed bottom-5 right-5 bg-green-500 text-white rounded-full p-3 shadow-lg hover:bg-green-600" title="Contactar por WhatsApp" target="_blank">
    <i class="fab fa-whatsapp fa-lg"></i>
</a>

<!-- Footer -->
<footer class="bg-gray-800 py-6 mt-8">
  <div class="max-w-7xl mx-auto px-4 text-center">
    <p class="text-gray-400">&copy; 2024 Acopiadora JR. Todos los derechos reservados.</p>
  </div>
</footer>

<script>
  document.getElementById('mobile-menu-button').onclick = function() {
    var menu = document.getElementById('mobile-menu');
    menu.style.display = menu.style.display === "none" ? "block" : "none";
  };
</script>

</body>
</html>
