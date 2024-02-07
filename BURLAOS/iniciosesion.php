<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Astral Design</title>
    <link rel="stylesheet" href="CSS/style_iniciosesion.css">
</head>

<body>
    <?php
    if (isset($_POST['Volver'])) {
        header('location:./proyecto.html');
    }
    if (isset($_POST['enviar'])) {
        $correo = htmlspecialchars($_POST['correo']);
        $contraseña = htmlspecialchars($_POST['contraseña']);

        if (empty($correo) || empty($contraseña)) {
            echo "<span style='color:red'>Por favor, complete todos los campos.</span>";
        } else {
            header('location:./paginaprincipal.php');
        }
    }
    ?>
    <div class="login-container">
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <h2>Iniciar Sesión</h2>
            <label for="username">Usuario:</label>
            <input type="text" id="username" name="username">
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password">
            <div class="button-container">
                <input class="boton_enviar" type="submit" name="Volver" value="Volver">
                <input class="boton_enviar" type="submit" name="enviar" value="Iniciar Sesión">
            </div>
        </form>
    </div>
</body>

</html>
