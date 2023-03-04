<?php
    # PAQUETES
    require '../controlador/conexionDB.php';

    # ATRIBUTOS
    $conexionPOO        = ConexionPOO($servername,$username,$password,$dbname);
    $conexionPDO        = ConexionPHPDataObject($servername,$username,$password,$dbname);
    $conexionProcedural = ConexionProcedural($servername,$username,$password,$dbname);

    # COMPORTAMIENTOS

    # INSERT

    function usuario_InsertPOO($conexionPOO){
        $sql = "INSERT INTO Usuario (firstname, lastname, email)
                VALUES ('John', 'Doe', 'john@example.com')";

        if ($conexionPOO->query($sql) === TRUE) {
            echo "Nuevo registro creado satisfactoriamente";
        } else {
        echo "Error: " . $sql . "<br>" . $conexionPOO->error;
        }
        $conexionPOO->close();
    }

    function usuario_InsertProcedural($conexionProcedural){
        $sql = "INSERT INTO Usuario (firstname, lastname, email)
                VALUES ('John', 'Doe', 'john@example.com')";

        if (mysqli_query($conexionProcedural, $sql)) {
            echo "Nuevo registro creado satisfactoriamente";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conexionProcedural);
        }
        mysqli_close($conexionProcedural);
    }

    function usuario_InsertPDO($conexionPDO){   
        try {
            $sql = "INSERT INTO Usuario (firstname, lastname, email)
                    VALUES ('John', 'Doe', 'john@example.com')";
            // usa exec() porque no retorna resultados
            $conexionPDO->exec($sql);
            echo "Nuevo registro creado satisfactoriamente";
        } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
        
        $conexionPDO = null;
    }

    # SELECT

    function usuario_SelectPOO($conexionPOO){
        $sql = "SELECT id, firstname, lastname FROM Usuario";
        $result = $conexionPOO->query($sql);

        if ($result->num_rows > 0) {
        
        // cada fila es una salida de datos
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
        }
        } else {
            echo "0 results";
        }
        $conexionPOO->close();
    }

    function usuario_SelectProcedural($conexionProcedural){
        $sql = "SELECT id, firstname, lastname FROM Usuario";
        $result = mysqli_query($conexionProcedural, $sql);

        if (mysqli_num_rows($result) > 0) {
        // cada fila es una salida de datos
        while($row = mysqli_fetch_assoc($result)) {
            echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
        }
        } else {
            echo "0 resultados";
        }
        mysqli_close($conexionProcedural);
    }

    function usuario_SelectPDO($conexionPDO){   
        try {
            // prepara la consulta
            $stmt = $conexionPDO->prepare("SELECT id, firstname, lastname FROM Usuario");
            // ejecuta la consulta
            $stmt->execute();
        
            // configura el arreglo resultante en asociativo
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            while($row = $stmt->fetchAll()) {
                print_r($row). "<br>";
            }
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        $conexionPDO = null;
    }

    # PRUEBAS
    //usuario_InsertPDO($conexionPDO);
    usuario_SelectPDO($conexionPDO);

?>