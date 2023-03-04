<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuperGlobales parte 2</title>
</head>
<body>
    <?php 
        $_SERVER;
        echo "<h1> Los SuperGlobals de PHP Parte 2 </h1>";
    ?> 
    <h2>$GLOBALS</h2>   
    <p>Se pueden acceder desde cualquier parte de PHP</p>
    <p>Php almacena todas las variables globales en un vector llamado $GLOBALS[indice]</p>
    <p>El <strong>indice</strong> guarda el nombre de la variable</p>
    <p>
        <code>
            <?php
                require_once 'globals.php';
                $GLOBALS['y'] = 99;
                print_r($GLOBALS['z']);
                addition();
                print("<br>");
                print_r($GLOBALS['z']);
            ?>
        </code>
    </p>
    <h2>$_SERVER</h2>   
    <p>Almacena información sobre los headers, rutas, y ubicaciones de scripts</p>
    <?php
    echo $_SERVER['PHP_SELF'] ; // Devuelve el archivo actual
    echo "<br>"; 
    echo $_SERVER['SERVER_NAME']; // devuelve  el nombre del servidor
    echo "<br>";
    echo $_SERVER['HTTP_HOST']; // devuelve el header de la solicitud actual
    echo "<br>";
    echo $_SERVER['HTTP_REFERER']; // devuelve la ruta completa de la página actual
    echo "<br>";
    echo $_SERVER['HTTP_USER_AGENT']; // devuelve el interpretador http
    echo "<br>";
    echo $_SERVER['SCRIPT_NAME']; // devuelve la ruta del archivo actual
    ?>
    <p>
        <a href="superglobal.php">Hoja anterior</a>
    </p>
    
    

</body>
</html>
