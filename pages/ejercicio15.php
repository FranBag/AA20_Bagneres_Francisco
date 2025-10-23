<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 15</title>
</head>
<body>
    <h1>Creación de un archivo de texto</h1>

    <form action="" method="POST">
        
        <label for="person_name">Nombre:</label>
        <input type="text" name="person_name" required>
        <br>

        <label for="address">Dirección:</label>
        <input type="text" name="address" required>
        <br>

        <h2>Selección de Pizzas y Cantidad:</h2>
        
        <label>
            <input type="checkbox" name="jyq" value="yes"> Jamón y Queso
        </label>
        <label for="quantity_jyq">Cantidad:</label>
        <input type="text" name="quantity_jyq" size="3" value="0">
        <br>

        <label>
            <input type="checkbox" name="napolitana" value="yes"> Napolitana
        </label>
        <label for="quantity_napolitana">Cantidad:</label>
        <input type="text" name="quantity_napolitana" size="3" value="0">
        <br>

        <label>
            <input type="checkbox" name="muzzarella" value="yes"> Muzzarella
        </label>
        <label for="quantity_muzzarella">Cantidad:</label>
        <input type="text" name="quantity_muzzarella" size="3" value="0">
        <br>

        <input type="submit" value="Confirmar Pedido" name="submit_order">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit_order"])) {
            
            $file_name = "pedidos.txt";
            
            $file_handle = @fopen($file_name, "a") or
                die("No se pudo abrir o crear el archivo $file_name.");

            fputs($file_handle, "Nombre: ");
            fputs($file_handle, htmlspecialchars($_POST["person_name"]));
            fputs($file_handle, "\n");
            
            fputs($file_handle, "Direccion: ");
            fputs($file_handle, htmlspecialchars($_POST["address"]));
            fputs($file_handle, "\n");
            
            if (isset($_POST["jyq"])) {
                $quantity_jyq = (int)htmlspecialchars($_POST["quantity_jyq"]);
                fputs($file_handle, "Cantidad de Jamon y Queso: ");
                fputs($file_handle, $quantity_jyq);
                fputs($file_handle, "\n");
            }

            if (isset($_POST["napolitana"])) {
                $quantity_napolitana = (int)htmlspecialchars($_POST["quantity_napolitana"]);
                fputs($file_handle, "Cantidad de Napolitana: ");
                fputs($file_handle, $quantity_napolitana);
                fputs($file_handle, "\n");
            }
            
            if (isset($_POST["muzzarella"])) {
                $quantity_muzzarella = (int)htmlspecialchars($_POST["quantity_muzzarella"]);
                fputs($file_handle, "Cantidad de Muzzarella: ");
                fputs($file_handle, $quantity_muzzarella);
                fputs($file_handle, "\n");
            }

            fputs($file_handle, "--------------------------------------------------------");
            fputs($file_handle, "\n");
            
            fclose($file_handle);
            
            echo "<p>El pedido se cargó correctamente en el archivo $file_name.</p>";
        }
    ?>
</body>
</html>