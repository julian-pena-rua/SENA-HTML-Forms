<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>GET</h1>
    <P>Este documento refresca la URL y la modifica.</P>
<?php
if ($_GET) {
    echo '<pre>';
    echo htmlspecialchars(print_r($_GET, true));
    echo '</pre>';
}
?>
<form action="" method="get">
    Nombre:  <input type="text" name="personal[nombre]" /><br />
    Email:   <input type="text" name="personal[email]" /><br />
    Cerveza: <br />
    <select multiple name="cerveza[]">
        <option value="Pilsen">Pilsen</option>
        <option value="Aguila">Aguila</option>
        <option value="Club">Club Colombia</option>
    </select><br />
    <input type="submit" value="¡enviarme!" />
</form>
<a href="form3.php">Siguiente</a>    
</body>
</html>
