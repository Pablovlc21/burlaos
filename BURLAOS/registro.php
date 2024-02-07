<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="CSS/style_registro.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Astral Design</title>

</head>

<body>
    <?php
    if (isset($_POST['Volver'])) {
        header('location:./proyecto.html');
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = limpiarInput($_POST['nombre']);
        $apellido = limpiarInput($_POST['apellido']);
        $telefono = limpiarInput($_POST['telefono']);
        $dni = limpiarInput($_POST['dni']);
        $email = limpiarInput($_POST['email']);
        $departamento = limpiarInput($_POST['departamento']);

        if (validarDatos($nombre, $apellido, $telefono, $dni, $email, $departamento)) {
            // Realizar la conexión a la base de datos (proporciona tus propios datos)
            $servername = "tu_servidor";
            $username = "tu_usuario";
            $password = "tu_contraseña";
            $dbname = "tu_base_de_datos";

            $conexion = new mysqli($servername, $username, $password, $dbname);

            if ($conexion->connect_error) {
                die("Conexión fallida: " . $conexion->connect_error);
            }

            // Utilizar una consulta preparada para prevenir la inyección de SQL
            $sql = "INSERT INTO empleados (nombre, apellido, telefono, dni, email, departamento) VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $conexion->prepare($sql);

            // Vincular parámetros
            $stmt->bind_param("ssssss", $nombre, $apellido, $telefono, $dni, $email, $departamento);

            // Ejecutar la consulta
            if ($stmt->execute()) {
                echo "Registro insertado correctamente.";
            } else {
                echo "Error al insertar el registro: " . $stmt->error;
            }

            // Cerrar la conexión
            $stmt->close();
            $conexion->close();
        } else {
            echo "Los datos proporcionados no son válidos.";
        }
    }

    function limpiarInput($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    function validarDatos($nombre, $apellido, $telefono, $dni, $email, $departamento)
    {
        // Puedes agregar más validaciones según tus necesidades
        if (empty($nombre) || empty($apellido) || empty($telefono) || empty($dni) || empty($email) || empty($departamento)) {
            return false;
        }

        // Puedes agregar más validaciones, como expresiones regulares o validaciones específicas

        return true;
    }
    ?>

    <div class="login-container">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <h2>Crear Cuenta</h2>
            <label for="nombre">Nombre:<input type="text" name="nombre"></label>
            <label for="apellido">Apellido:</label>
            <input type="text" name="apellido"><br>
            <label for="telefono">Número de Teléfono:</label>
            <input type="tel" name="telefono"><br>
            <label for="dni">DNI:</label>
            <input type="text" name="dni"><br>
            <label for="email">Correo Electrónico:</label>
            <input type="email" name="email"><br>
            <label for="departamento">Departamento:</label>
            <input type="text" name="departamento"><br>
            <div class="button-container">
                <input class="boton_enviar" type="submit" name="Volver" value="Volver">
                <input class="boton_enviar" type="submit" name="enviar" value="Crear Cuenta">
            </div>
        </form>
    </div>

</body>
</html>