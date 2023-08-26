<?php
// Arreglo asociativo con usuarios y contraseñas almacenadas
$usuarios = array(
    array("usuario" => "usuario1", "clave" => "contraseña1"),
    array("usuario" => "usuario2", "clave" => "contraseña2"),
    array("usuario" => "qmelani", "clave" => "melaniq1")
    // Agregar más usuarios y contraseñas aquí
);
// Obtener datos del formulario
$username = $_POST['username'];
$password = $_POST['password'];

// Verificar que el usuario y la contraseña no estén vacíos
if (empty($username) || empty($password)) {
    echo "Por favor, ingrese tanto el usuario como la contraseña.";
} else {
    // Verificar la seguridad de la contraseña
    //preg_match('/[a-zA-Z]/', $password) verifica si la contraseña ($password) contiene al menos una letra (minúscula o mayúscula).
    //La función preg_match() en PHP se utiliza para realizar una búsqueda de patrones mediante expresiones regulares en una cadena de texto. 
    if (strlen($password) < 8 || $password === $username || !preg_match('/[a-zA-Z]/', $password) || !preg_match('/[0-9]/', $password)) {
        echo "La contraseña no cumple con los requisitos de seguridad, recuerde que debe tener 8 caracteres con letras y numeros";
    } else {
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
    }
}
?>
