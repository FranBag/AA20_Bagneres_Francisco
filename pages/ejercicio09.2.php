<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>
<body>
<!-- Confeccionar un formulario que solicite la carga de un nombre de persona y su edad,
luego mostrar en otra página si es mayor de edad (si la edad es mayor o igual a 18) -->
    <h1>Envío de datos de un FORMULARIO (controles text y submit)</h1>
    <?php 
        $name = htmlspecialchars($_POST["person_name"]);
        $age = $_POST["person_age"];
        if ($age >= 18) {
            echo "La persona $name es mayor de edad.";
        } else {
            echo "La persona $name es menor de edad.";
        }
    ?>
</body>
</html>