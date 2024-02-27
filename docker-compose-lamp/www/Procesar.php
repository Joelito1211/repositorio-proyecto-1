<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado del Juego</title>
</head>
<body>
    <h1>Resultado del Juego</h1>

    <?php
    // Obtener la opción del usuario
    if (isset($_GET['opcion'])) {
        $opcionUsuario = $_GET['opcion'];

        // Generar la opción aleatoria de la computadora
        $opciones = ['piedra', 'papel', 'tijera'];
        $opcionComputadora = $opciones[array_rand($opciones)];

        // Determinar el resultado del juego
        $resultado = "";
        if ($opcionUsuario == $opcionComputadora) {
            $resultado = "¡Es un empate!";
        } elseif (
            ($opcionUsuario == 'piedra' && $opcionComputadora == 'tijera') ||
            ($opcionUsuario == 'papel' && $opcionComputadora == 'piedra') ||
            ($opcionUsuario == 'tijera' && $opcionComputadora == 'papel')
        ) {
            $resultado = "¡Ganaste!";
        } else {
            $resultado = "¡Perdiste! La computadora eligió $opcionComputadora.";
        }

        // Mostrar resultados
        echo "<p>Tu elección: $opcionUsuario</p>";
        echo "<p>Elección de la computadora: $opcionComputadora</p>";
        echo "<p>Resultado: $resultado</p>";
    } else {
        echo "<p>Hubo un error en la selección.</p>";
    }
    ?>

    <p><a href="index.html">Volver a jugar</a></p>
</body>
</html>