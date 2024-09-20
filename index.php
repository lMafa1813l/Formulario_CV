<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario CV</title>
</head>
<body>

<h2>Formulario para CV</h2>

<form action="Form_CV.php" method="post">
    <!-- Nombre y Apellidos -->
    <label for="nombre">Nombre y Apellidos:</label>
    <input type="text" id="nombre" name="nombre" required><br><br>

    <!-- Fecha de Nacimiento -->
    <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
    <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required><br><br>

    <!-- Ocupación -->
    <label for="ocupacion">Ocupación:</label>
    <input type="text" id="ocupacion" name="ocupacion" required><br><br>

    <!-- Contacto -->
    <label for="contacto">Contacto (Teléfono, Email):</label>
    <input type="text" id="contacto" name="contacto" required><br><br>

    <!-- Nacionalidad -->
    <label for="nacionalidad">Nacionalidad:</label>
    <select id="nacionalidad" name="nacionalidad" required>
        <option value="Peruano">Peruano</option>
        <option value="Mexicano">Mexicano</option>
        <option value="Argentino">Argentino</option>
        <option value="Chileno">Chileno</option>
        <option value="Otro">Otro</option>
    </select><br><br>

    <!-- Nivel de Inglés -->
    <label>Nivel de Inglés:</label><br>
    <input type="radio" id="basico" name="nivel_ingles" value="Básico" required>
    <label for="basico">Básico</label><br>

    <input type="radio" id="intermedio" name="nivel_ingles" value="Intermedio" required>
    <label for="intermedio">Intermedio</label><br>

    <input type="radio" id="avanzado" name="nivel_ingles" value="Avanzado" required>
    <label for="avanzado">Avanzado</label><br>

    <input type="radio" id="fluido" name="nivel_ingles" value="Fluido" required>
    <label for="fluido">Fluido</label><br><br>

    <!-- Lenguajes de Programación -->
    <label for="lenguajes">Lenguajes de Programación:</label>
    <select id="lenguajes" name="lenguajes[]" multiple required>
        <option value="C++">C++</option>
        <option value="Java">Java</option>
        <option value="Python">Python</option>
        <option value="JavaScript">JavaScript</option>
        <option value="PHP">PHP</option>
    </select><br><br>

    <!-- Aptitudes -->
    <label for="aptitudes">Aptitudes:</label>
    <input list="aptitudes-list" id="aptitudes" name="aptitudes" required>
    <datalist id="aptitudes-list">
        <option value="Trabajo en equipo">
        <option value="Liderazgo">
        <option value="Resolución de problemas">
        <option value="Lógica">
        <option value="Creatividad">
    </datalist><br><br>

    <!-- Habilidades -->
    <label>Habilidades:</label><br>
    <input type="checkbox" id="habilidad1" name="habilidades[]" value="Programación">
    <label for="habilidad1">Programación</label><br>

    <input type="checkbox" id="habilidad2" name="habilidades[]" value="Diseño Gráfico">
    <label for="habilidad2">Desarrollo Web</label><br>

    <input type="checkbox" id="habilidad3" name="habilidades[]" value="Gestión de Proyectos">
    <label for="habilidad3">Inteligencia Artifical</label><br>

    <input type="checkbox" id="habilidad4" name="habilidades[]" value="Marketing Digital">
    <label for="habilidad4">Base de datos</label><br><br>

    <!-- Perfil -->
    <label for="perfil">Perfil:</label><br>
    <textarea id="perfil" name="perfil" rows="5" cols="40" required></textarea><br><br>

    <!-- Enviar -->
    <input type="submit" value="Enviar CV">
</form>

</body>
</html>
