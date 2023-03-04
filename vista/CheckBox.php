<!DOCTYPE html>
<html lang="es-co">
<head>
    <?php include 'plantilla/head.php'; ?>
    <link rel="stylesheet" href="../style.css">
    <title>Checkbox</title>
</head>
<body>
    <?php include 'plantilla/nav.php'; ?>
    <h1>Cajones de verificación múltiple</h1>
    <form>
        <input type="checkbox" id="bici" name="bici" value="bici">
        <label for="vehicle1"> Tengo una bici</label><br>
        <input type="checkbox" id="carro" name="carro" value="carro">
        <label for="vehicle2"> Tengo un carro </label><br>
        <input type="checkbox" id="bici" name="bici" value="bici">
        <label for="vehicle3"> Tengo una bici</label>
    </form>
    <?php include 'plantilla/footer.php'; ?>
</body>
</html>