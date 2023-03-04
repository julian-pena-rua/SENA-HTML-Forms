<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>RadioButton</title>
</head>
<body>
    <nav>
        <a href="index.html">Inicio</a>
        <a href="RadioButton.html">RadioButton</a>
        <a href="DropdownList.html">DropdownList</a>
        <a href="CheckBox.html">CheckBox</a>
    </nav>
    <!-- RadioButton -->
    <p>Selecciona tu lenguaje favorito:</p>
    <form>
        <input type="radio" id="html" name="fav_language1" value="HTML">
        <label for="html">HTML</label><br>
        <input type="radio" id="css" name="fav_language" value="CSS"> <!-- Este elemento se encuentra por fuera del grupo de selección -->
        <label for="css">CSS</label><br>
        <input type="radio" id="javascript" name="fav_language1" value="JavaScript">
        <label for="javascript">JavaScript</label>
    </form>
    
</body>
</html>