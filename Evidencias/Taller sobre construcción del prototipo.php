<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Taller sobre construcción del prototipo</title>

  <link rel="stylesheet" href="style.css">

</head>

<body>
  <section
    class="flex items-center justify-center min-h-screen text-gray-900 bg-gradient-to-br from-green-100 to-purple-100">
    <div class="w-full max-w-md p-8 bg-white shadow-2xl rounded-xl">
      <h2 class="mb-8 text-2xl font-bold text-center text-gray-800">
        Validación de Datos
      </h2>
      <form
        id="userForm"
        class="space-y-8"
        action="validation.php"
        method="post"
        class="flex flex-col w-11/12 max-w-lg p-5 bg-white rounded-md shadow-lg md:p-10" novalidate>
        <div>
          <label for="nombres" class="block text-sm font-medium text-gray-700">Nombres</label>
          <input
            type="text"
            id="nombres"
            name="nombres"
            required
            pattern="\S.*"
            aria-required=" true"

            class="block w-full mt-1 border-2 border-gray-100 rounded-md shadow-sm focus:outline-none focus:border-blue-400" />

        </div>
        <div>
          <label
            for="apellidos"
            class="block text-sm font-medium text-gray-700">Apellidos</label>
          <input
            type="text"
            id="apellidos"
            name="apellidos"
            required
            pattern="\S.*"
            aria-required="true"
            class="block w-full mt-1 border-2 border-gray-100 rounded-md shadow-sm focus:outline-none focus:border-blue-400" />
        </div>
        <div>
          <label for="id" class="block text-sm font-medium text-gray-700">Cedula</label>
          <input
            type="text"
            id="cedula"
            name="cedula"
            pattern="\S.*"
            required
            aria-required="true"
            class="block w-full mt-1 border-2 border-gray-100 rounded-md shadow-sm focus:outline-none focus:border-blue-400" />
        </div>
        <div>
          <label
            for="fecha_de_nacimiento"
            class="block text-sm font-medium text-gray-700">Fecha de nacimiento</label>
          <input
            type="date"
            id="fecha_de_nacimiento"
            name="fecha_de_nacimiento"
            required
            pattern="\S.*"
            aria-required="true"
            class="block w-full mt-1 border-2 border-gray-100 rounded-md shadow-sm focus:outline-none focus:border-blue-400" />
        </div>
        <button
          type="submit"
          class="w-full px-4 py-2 text-sm font-medium text-white transform bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 hover:-translate-y-1 hover:scale-105 ">
          Validar
        </button>
        <div class="absolute bottom-0 left-0 z-10 w-full h-20 bg-gradinet-to-t from-transparent peer-invalid-red-500">
      </form>
    </div>
  </section>
  <footer class="flex items-center justify-center text-white bg-gray-800">
    <p>© 2024 Deivis Alfonso Yance Rosado</p>
  </footer>
</body>

</html>