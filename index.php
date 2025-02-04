<?php
require_once __DIR__ . '/./src/Saludo.php';

use HolaMundoMultilenguaje\Saludo;

$saludo = new Saludo();
$mensaje = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $resultado = $saludo->generarSaludoAleatorio();
    $mensaje = $resultado['saludo'];
    $codigo = $resultado['codigo'];
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generador de Hola Mundo docker IMG</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            color: #333;
        }

        button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            margin-top: 10px;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
        }

        button:hover {
            background-color: #0056b3;
        }

        p {
            font-size: 20px;
            font-weight: bold;
            margin-top: 15px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Generador aleatorio de Hola Mundos</h1>
        <form method="post">
            <button type="submit">Generar</button>
        </form>
        <?php
        if (!empty($mensaje)) {
            echo "<p><b>" . htmlspecialchars($codigo) . ":</b> " . htmlspecialchars($mensaje) . "</p>";
        }
        ?>
    </div>
</body>

</html>