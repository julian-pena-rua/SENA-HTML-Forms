<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
    <h1>POST</h1>
    <P>Este documento no refresca la URL ni la modifica.</P>
<?php
if ($_POST) {
    echo '<pre>';
    echo htmlspecialchars(print_r($_POST, true));
    echo '</pre>';
}
?>
<form action="" method="post">
    Nombre:  <input type="text" name="personal[nombre]" /><br />
    Email:   <input type="text" name="personal[email]" /><br />
    Bebida: <br />
    <select multiple name ="cerveza[]">
        <option value="Pilsen">Pilsen</option>
        <option value="Aguila">Aguila</option>
        <option value="Club">Club Colombia</option>
    </select><br />
    <input type="submit" value="¡enviarme!" />
</form>    
</body>
</html>
