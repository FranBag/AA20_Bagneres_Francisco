<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>
<body>
    <h1>Envío de datos de un FORMULARIO (controles text y submit)</h1>
    <?php 
        $name = htmlspecialchars($_POST["person_name"]);
        $age = $_POST["person_age"];
        if ($age >= 18) {
            echo "<p>La persona $name es mayor de edad.</p>";
        } else {
            echo "<p>La persona $name es menor de edad.</p>";
        }
    ?>
</body>
</html>