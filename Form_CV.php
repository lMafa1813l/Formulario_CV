<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $nombre = $_POST['nombre'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $ocupacion = $_POST['ocupacion'];
    $contacto = $_POST['contacto'];
    $nacionalidad = $_POST['nacionalidad'];
    $nivel_ingles = $_POST['nivel_ingles'];
    $lenguajes = isset($_POST['lenguajes']) ? $_POST['lenguajes'] : [];
    $aptitudes = $_POST['aptitudes'];
    $habilidades = isset($_POST['habilidades']) ? $_POST['habilidades'] : [];
    $perfil = $_POST['perfil'];

    // Imprimir los datos
    echo "<h2 style='font-family: Arial, sans-serif;'>Datos del CV:</h2>";
    echo "<strong>Nombre y Apellidos:</strong> " . htmlspecialchars($_POST['nombre']) . "<br>";
    echo "<strong>Fecha de Nacimiento:</strong> " . htmlspecialchars($_POST['fecha_nacimiento']) . "<br>";
    echo "<strong>Ocupación:</strong> " . htmlspecialchars($_POST['ocupacion']) . "<br>";
    echo "<strong>Contacto:</strong> " . htmlspecialchars($_POST['contacto']) . "<br>";
    echo "<strong>Nacionalidad:</strong> " . htmlspecialchars($_POST['nacionalidad']) . "<br>";
    echo "<strong>Nivel de inglés:</strong> " . htmlspecialchars($_POST['nivel_ingles']) . "<br>";

    // Imprimir lenguajes de programación
    echo "<strong>Lenguajes de programación:</strong> " . htmlspecialchars(implode(", ", $_POST['lenguajes'])) . "<br>";
    if (!empty($lenguajes)) {
        echo implode(", ", array_map('htmlspecialchars', $lenguajes)) . "<br>";
    } else {
        echo "Ninguno<br>";
    }

    // Imprimir aptitudes
    echo "<strong>Aptitudes:</strong> " . htmlspecialchars($_POST['aptitudes']) . "<br>";

    // Imprimir habilidades
    echo "<strong>Habilidades:</strong> " . htmlspecialchars(implode(", ", $_POST['habilidades'])) . "<br>";
    if (!empty($habilidades)) {
        echo implode(", ", array_map('htmlspecialchars', $habilidades)) . "<br>";
    } else {
        echo "Ninguna<br>";
    }

    // Imprimir perfil
    echo "<strong>Perfil:</strong> " . nl2br(htmlspecialchars($_POST['perfil'])) . "<br>";
}
?>