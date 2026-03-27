<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fromulario en PHP</title>
</head>
<body>
    <h1>Formulario en PHP</h1>
    <form method="GET" action="recibir.php">
        <p>
        <label for="nombre">Nombre</label>
        <input type=""text name="nombre">
        </p>

        <p> 
        <label for="apellidos">Apellido</label>
        <input type="text" name="apellidos"/>
        </p>

        <input type="submit" value="enviar"/>
    </form>



</body>
</html>