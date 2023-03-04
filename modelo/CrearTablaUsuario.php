<?php
    # PAQUETES
    require '../controlador/conexionDB.php';

    # ATRIBUTOS
    $conexionPOO        = ConexionPOO($servername,$username,$password,$dbname);
    $conexionPDO        = ConexionPHPDataObject($servername,$username,$password,$dbname);
    $conexionProcedural = ConexionProcedural($servername,$username,$password,$dbname);
    
    # COMPORTAMIENTOS
    function CrearTablaUsuario_MySQLiProcedural($conexionProcedural){

        $sql = "CREATE TABLE Usuario (
                            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                            firstname VARCHAR(30) NOT NULL,
                            lastname VARCHAR(30) NOT NULL,
                            email VARCHAR(50),
                            reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";
    
        if (mysqli_query($conexionProcedural, $sql)) {
            echo "Tabla Usuario creada satisfactoriamente.";
        } else {
            echo "Error creando tabla: " . mysqli_error($conexionProcedural);
        }
        mysqli_close($conexionProcedural);
    }

    function CrearTablaUsuario_MySQLiPDO($conexionPDO){
        try {
            $sql = "CREATE TABLE Usuario (
                            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                            firstname VARCHAR(30) NOT NULL,
                            lastname VARCHAR(30) NOT NULL,
                            email VARCHAR(50),
                            reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";
            
            // utiliza exec() porque no retorna resultados
            $conexionPDO->exec($sql);
            echo "Tabla Usuario creada satisfactoriamente.";
        } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
        
        $conexionPDO = null;
    }

    # PRUEBAS

    CrearTablaUsuario_MySQLiPDO($conexionPDO);

?>