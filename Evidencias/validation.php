<?php
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$cedula = $_POST['cedula'];
$fechaNacimiento = $_POST['fecha_de_nacimiento'];
// Procesar datos
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $nombres = trim($_POST['nombres']);
  $apellidos = trim($_POST['apellidos']);
  $cedula = trim($_POST['cedula']);
  $fechaNacimiento = trim($_POST['fecha_de_nacimiento']);

  //Validar datos de usuario
  $nombres_correcto = "DeivisAlfonso";
  $apellidos_correcto = "YanceRosado";
  $cedula_correcto = "123456789";
  $fechaNacimiento_correcto = "2006-08-03";


  //Comparar datos de usuario con datos correctos
  if ($nombres == $nombres_correcto && $apellidos == $apellidos_correcto && $cedula == $cedula_correcto && $fechaNacimiento == $fechaNacimiento_correcto) {
    echo "<p class='text-green-600'>¡Acceso concedido! Bienvenido, $username.</p>";
  } else {
    echo "<p class='text-red-600'>Error: Nombre de usuario o contraseña incorrectos.</p>";
  }
}
