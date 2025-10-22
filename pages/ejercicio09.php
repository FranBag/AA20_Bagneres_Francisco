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
    <form action="./ejercicio09.2.php" method="POST">
        <input type="text" name="person_name" placeholder="Nombre de persona">
        <input type="number" name="person_age" placeholder="Edad" min="0">
        <input type="submit">
    </form>
</body>
</html>