Hola <?php echo htmlspecialchars($_GET['nombre']);  // htmlspeacialchars garantiza que se codifique cualquier caracter especial previniendo inyección html o js  ?>. 
Usted tiene <?php echo (int)$_GET['edad']; // garantiza sólo procesar los enteros ?> años.