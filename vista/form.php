<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manejo de Formularios</title>
</head>
<body>
        <h1>Recibiendo y enviados datos al servidor superglobal $_POST</h1>
        <h2>Importante: </h2>
        <p>Cualquier elemento de formulario estará disponible en sus códigos php</p>
        <p>Conocer más: <a href="#"> de fuentes externas</a></p>
        <form action="accion.php" method="post">
            <p>Su nombre: <input type="text" name="nombre" /></p>
            <p>Su edad: <input type="text" name="edad" /></p>
            <p><input type="submit" /></p>
        </form>
        <a href="form2.php">Siguiente</a>
    
</body>
</html>