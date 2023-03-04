<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>DropdownList</title>
</head>
<body>
    <nav>
        <a href="index.html">Inicio</a>
        <a href="RadioButton.html">RadioButton</a>
        <a href="DropdownList.html">DropdownList</a>
        <a href="CheckBox.html">CheckBox</a>
    </nav>
    <h1>Listas desplegables</h1>
    <p>La etiqueta select nos permite crear una lista desplegable. La primera opción siempre está seleccionada.</p>
    <h2>Lista selección única</h2>
    <p>Sólo permite seleccionar un valor</p>
    <label for="cars">Seleccione un carro:</label>
    <select id="cars" name="cars" size="3">
        <option value="volvo">Volvo</option>
        <option value="saab">Saab</option>
        <option value="fiat">Fiat</option>
        <option value="audi">Audi</option>
    </select>
    <h2>Lista selección múltiple</h2>
    <p>Se agrega el atributo multiple a la etiqueta select </p>
    <label for="cars">Choose a car:</label>
    <select id="cars" name="cars" size="4" multiple>
        <option value="volvo">Volvo</option>
        <option value="saab">Saab</option>
        <option value="fiat">Fiat</option>
        <option value="audi">Audi</option>
    </select>
</body>
</html>