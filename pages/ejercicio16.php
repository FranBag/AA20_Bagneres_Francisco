<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 16</title>
</head>
<body>
    <h1>Lectura de un archivo de texto</h1>
    <?php
        $file_name = "pedidos.txt"; 

        if (file_exists($file_name)) {
        
            $file_handle = @fopen($file_name, "r") or 
                die("Problemas al intentar abrir el archivo.");

            echo "<h2>Pedidos Registrados:</h2>";
            
            echo "<pre>";

            while (!feof($file_handle)) {
                $line = fgets($file_handle);
                echo htmlspecialchars($line);
            }

            echo "</pre>";

            fclose($file_handle);
            
        } else {
            echo "<p>El archivo $file_name no existe en el directorio actual. Ejecute el ejercicio 15.</p>";
        }
    ?>
</body>
</html>