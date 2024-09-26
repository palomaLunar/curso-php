<?php

function validarRegistro($datos) {
    $errores = [];

    // Validación de nombre completo
    if (empty($datos['nombreCompleto'])) {
        $errores['nombreCompleto'] = 'El nombre completo es obligatorio';
    } elseif (strlen($datos['nombreCompleto']) < 4) {
        $errores['nombreCompleto'] = 'El nombre completo debe tener al menos 4 caracteres';
    }

    // Validación de nombre de usuario
    if (empty($datos['nombreUsuario'])) {
        $errores['nombreUsuario'] = 'El nombre de usuario es obligatorio';
    } elseif (strlen($datos['nombreUsuario']) < 6) {
        $errores['nombreUsuario'] = 'El nombre de usuario debe tener al menos 6 caracteres';
    }

    // Validación de contraseña
    if (empty($datos['contrasena'])) {
        $errores['contrasena'] = 'La contraseña es obligatoria';
    } elseif (strlen($datos['contrasena']) < 8) {
        $errores['contrasena'] = 'La contraseña debe tener al menos 8 caracteres';
    } elseif ($datos['contrasena'] != $datos['confirmarContrasena']) {
        $errores['confirmarContrasena'] = 'Las contraseñas no coinciden';
    }

    // Validación de email
    if (empty($datos['email'])) {
        $errores['email'] = 'El correo electrónico es obligatorio';
    } elseif (!filter_var($datos['email'], FILTER_VALIDATE_EMAIL)) {
        $errores['email'] = 'Formato de correo electrónico no válido';
    }

    // Validación de intereses seleccionados
    if (empty($datos['intereses'])) {
        $errores['intereses'] = 'Debes seleccionar al menos un interés';
    }

    // Validación de archivo adjunto (opcional)
    // ...

    return $errores;
}

function registrarUsuario($datos) {
    // Encriptar la contraseña antes de almacenarla
    $datos['contrasena'] = password_hash($datos['contrasena'], PASSWORD_DEFAULT);

    // Simular almacenamiento de datos en un array (en realidad se guardaría en BD)
    $usuarios = [];
    $usuarios[] = $datos;

    // Guardar el array de usuarios en una sesión (opcional)
    // ...

    return true; // Simulando el registro exitoso
}

?>
<?php

function validarNombre($nombre) {
    if (empty($nombre)) {
        return "El nombre es obligatorio";
    } elseif (strlen($nombre) < 4) {
        return "El nombre debe tener al menos 4 caracteres";
    } else {
        return ""; // Nombre válido
    }
}

function validarEmail($email) {
    if (empty($email)) {
        return "El correo electrónico es obligatorio";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return "Formato de correo electrónico no válido";
    } else {
        return ""; // Email válido
    }
}

function validarPassword($password, $confirmarPassword) {
    if (empty($password)) {
        return "La contraseña es obligatoria";
    } elseif (strlen($password) < 8) {
        return "La contraseña debe tener al menos 8 caracteres";
    } elseif ($password != $confirmarPassword) {
        return "Las contraseñas no coinciden";
    } else {
        return ""; // Contraseña válida
    }
}

?>