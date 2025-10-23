<?php 
    function connect() {
        global $connection;
        // Editar la instancia de conexión con los valores de su motor de base de datos.
        try {
            $connection = mysqli_connect("localhost", "root", "admin", "AA20");
            $connection -> set_charset("utf8");
            return True;
        } catch (Exception $e) {
            echo "<p style='color: orange; text-align: center;'>Ocurrió un error al conectarse a la base de datos: $e</p>";
            return False;
        }
    }

    function disconnect() {
        global $connection;
        mysqli_close($connection);
    }
?>