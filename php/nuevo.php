<?php
$nombre = $matricula = $carrera = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST["nombre"]);
    $matricula = htmlspecialchars($_POST["matricula"]);
    $carrera = htmlspecialchars($_POST["carrera"]);

    if (empty($nombre) || empty($matricula) || empty($carrera)) {
        $error = "Todos los campos son obligatorios";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel Estudiantil</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            color: white;
            text-align: center;
            padding: 40px;
        }

        .container {
            max-width: 400px;
            margin: auto;
            background: rgba(0,0,0,0.4);
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0,0,0,0.5);
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 8px;
            border: none;
        }

        button {
            background: #00c6ff;
            border: none;
            padding: 12px;
            width: 100%;
            color: white;
            font-weight: bold;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #0072ff;
        }

        .card {
            margin-top: 20px;
            padding: 20px;
            border-radius: 12px;
            background: rgba(255,255,255,0.1);
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from {opacity: 0; transform: translateY(20px);}
            to {opacity: 1; transform: translateY(0);}
        }

        .error {
            color: #ff6b6b;
        }
    </style>
</head>
<body>

    <h1>Sistema Estudiantil</h1>

    <div class="container">
        <form method="POST">
            <input type="text" name="nombre" placeholder="Nombre completo">
            <input type="text" name="matricula" placeholder="Matrícula">
            
            <select name="carrera">
                <option value="">Selecciona tu carrera</option>
                <option>Ingeniería en Sistemas</option>
                <option>Derecho</option>
                <option>Medicina</option>
                <option>Administración</option>
            </select>

            <button type="submit">Generar Perfil</button>
        </form>

        <?php if ($error): ?>
            <p class="error"><?php echo $error; ?></p>
        <?php endif; ?>

        <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && !$error): ?>
            <div class="card">
                <h2><?php echo $nombre; ?></h2>
                <p><strong>Matrícula:</strong> <?php echo $matricula; ?></p>
                <p><strong>Carrera:</strong> <?php echo $carrera; ?></p>
                <p>Estudiante registrado con éxito</p>
            </div>
        <?php endif; ?>
    </div>

</body>
</html>