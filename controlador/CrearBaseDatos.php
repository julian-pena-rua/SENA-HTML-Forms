<?php
    # PAQUETES
    require 'conexion.php';

    # ATRIBUTOS
    $conexionPOO = ConexionPOO($servername,$username,$password);
    $conexionPDO = ConexionPHPDataObject($servername,$username,$password);
        
    //CerrarConexionPDO($conexion);

    // CREAR BASE DE DATOS MySQLiObjectOriented
    function CrearBaseDatos_MySQLiOO($conexionPOO){
        $sql = "CREATE DATABASE prueba";
        if ($conexionPOO->query($sql) === TRUE) {
            echo "Base de datos creada con éxito.";
        } 
        else 
        {
            echo "Error creando la base de datos: " . $conexionPOO->error;
        }
        // CerrarConexionPOO($conexionPOO);
        $conexionPOO->close();
    }

    // CREAR BASE DE DATOS MySQLiProcedural
    function CrearBaseDatos_MySQLiProcedural($conexionPOO){
        $sql = "CREATE DATABASE prueba";
        if (mysqli_query($conexionPOO, $sql)) {
            echo "Base de datos creada con éxito.";
        } else {
            echo "Error creando la base de datos: " . mysqli_error($conexionPOO);
        }
        // CerrarConexionPOO($conexionPOO);
        mysqli_close($conexionPOO);
    }

    // CREAR BASE DE DATOS PHP DATA OBJECT
    function CrearBaseDatos_PDO($conexionPDO){
        try {
            $sql = "CREATE DATABASE prueba";
            // use exec() because no results are returned
            $conexionPDO->exec($sql);
            echo "Base de datos creada con éxito.<br>";
        } catch(PDOException $e) {
            echo $sql . "Error creando la base de datos: <br>" . $e->getMessage();
        }
        $conexionPDO = null;
    }
    
    # PRUEBAS

    CrearBaseDatos_PDO($conexionPDO);

?>