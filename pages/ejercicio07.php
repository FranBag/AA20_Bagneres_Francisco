<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>
    <h1>Estructura condicional (if)</h1>
    <?php
        $random = rand(1, 3);

        if ($random == 1) {
            echo "Uno";
        } else if ($random == 2) {
            echo "Dos";
        } else if ($random == 3) {
            echo "Tres";
        }
    ?>

</body>
</html>