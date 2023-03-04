<?php

# DATOS DE CONEXIÓN
$servername = "localhost";
$username   = "root";
$password   = "";

# PROCESO DE CONEXIÓN SEGÚN TIPO

function ConexionPOO($servername, $username, $password){
    // Crea conexión
    $conn = new mysqli($servername, $username, $password);
    // verifica conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error); // $connect_error dejó de funcionar para PHP 5.2.9 y 5.3.0. En su lugar se usa mysqli_connect_error()
    }
    echo "Conexión exitosa.";
    return $conn;
}

function ConexionPOO2($servername, $username, $password)
{
    // Crea conexión
    $conn = new mysqli($servername, $username, $password);
    // verifica conexión
    if (mysqli_connect_error()) {
        die("Conexión fallida a la base de datos: " . mysqli_connect_error()); 
    }
    echo "Conexión exitosa.";
    return $conn;
}

function ConexionProcedural($servername, $username, $password){

    // Crea conexión
    $conn = mysqli_connect($servername, $username, $password);
    
    // verifica conexión
    if (!$conn) {
        die("Conexión fallida: " . mysqli_connect_error());
    }
    echo "Conexión exitosa.";
    return $conn;
}

function ConexionPHPDataObject($servername, $username, $password) {
    try {
        $conn = new PDO("mysql:host=$servername", $username, $password);
        // configura el manejo de errores a excepciones
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        Echo "Conexión exitosa.";
        return $conn;
    } 
    catch(PDOException $e) {
        echo "Conexión fallida: " . $e->getMessage();
    } 
}

function CerrarConexionPOO($conn){
    $conn->close();
    echo "Conexion Cerrada";
}

function CerrarConexionProcedural($conn){
    mysqli_close($conn);
    echo "Conexion Cerrada";
}

function CerrarConexionPDO($conn){
    $conn = null;
    echo "Conexion Cerrada";
}



# PRUEBAS

//$conexion = ConexionPHPDataObjectDB($servername,$username,$password, $dbname);
//CerrarConexionPDO($conexion);

?>