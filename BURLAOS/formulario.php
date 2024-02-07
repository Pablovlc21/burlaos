<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Astral Design</title>
    <link rel="stylesheet" href="CSS/style_formulario.css">
</head>

<body>
    <header>
        <div class="logo">
            <img src="IMG/logo-ccSrs91_4-transformed-modified.png" alt="Logo de Astral Design">
        </div>

        <section id="titulo">
        <h1>Astral Design</h1>
        </section>

        <nav>
            <ul>
                <li><a href="proyecto.html">Inicio</a></li>
                <li><a href="tienda.html">Tienda</a></li>
                <li><a href="servicios.html">Servicios</a></li>
                <li><a href="contacto.html">Contacto</a></li>
                <li><a href="formulario.php">Formulario</a></li>
                <li><a href="faq.html">FAQ</a></li>
            </ul>
        </nav>

        <div class="botones-container">
            <div class="boton">
                <a href="iniciosesion.php">Iniciar sesión</a>
            </div><br><br>
            <div class="boton">
                <a href="registro.php">Crear cuenta</a>
            </div>
        </div>

    </header>
    <main>

        <h2>Formulario de Satisfacción</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <label for="satisfaccion">En una escala del 1 al 10, ¿qué tan satisfecho(a) está con los servicios de diseño gráfico proporcionados por Astral Design?</label>
            <input type="number" id="satisfaccion" name="satisfaccion" min="1" max="10">

            <label for="calidad">¿Cómo calificaría la calidad general de los diseños recibidos?</label>
            <input type="number" id="calidad" name="calidad" min="1" max="10">

            <label for="comunicacion">¿Cómo calificaría la comunicación con nuestro equipo durante el proyecto?</label>
            <input type="number" id="comunicacion" name="comunicacion" min="1" max="10">

            <label for="entrega">¿Se entregaron los proyectos de diseño dentro de los plazos acordados?</label>
            <label for="si">Sí<input type="radio" id="si" name="entrega" value="si"></label>
            <label for="no">No<input type="radio" id="no" name="entrega" value="no"></label>

            <label for="ajustes">¿Qué aspectos podríamos ajustar para superar sus expectativas en futuros proyectos?</label>
            <textarea id="ajustes" name="ajustes" rows="4"></textarea>

            <label for="problemas">¿Hubo algún problema o demora que le gustaría destacar?</label>
            <textarea id="problemas" name="problemas" rows="4"></textarea>

            <label for="comentario">¿Hay algún comentario adicional que le gustaría compartir sobre su experiencia con Astral Design?</label>
            <textarea id="comentario" name="comentario" rows="4"></textarea>

            <input type="submit" value="Enviar">
        </form>

    </main>
    <footer>
        <p>&copy; 2023 Astral Design. Todos los derechos reservados.</p>
    </footer>
</body>
</html>