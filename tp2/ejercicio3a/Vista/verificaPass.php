<?php
// Arreglo asociativo con usuarios y contraseñas almacenadas
$usuarios = array(
    array("usuario" => "usuario1", "clave" => "contraseña1"),
    array("usuario" => "usuario2", "clave" => "contraseña2"),
    // Agregar más usuarios y contraseñas aquí
);

// Obtener datos del formulario
$username = $_POST['username'];
$password = $_POST['password'];

// Buscar si el usuario y contraseña coinciden en el arreglo
$usuarioEncontrado = false;
foreach ($usuarios as $usuario) {
    if ($usuario['usuario'] === $username && $usuario['clave'] === $password) {
        $usuarioEncontrado = true;
        break;
    }
}

// Mostrar mensaje de acuerdo al resultado
if ($usuarioEncontrado) {
    echo "Bienvenido, $username!";
} else {
    echo "Usuario o contraseña incorrectos.";
}
?>
