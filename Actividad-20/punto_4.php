<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Punto 4 - Número aleatorio</title>
</head>
<body>
<h2>Punto 4 - Número aleatorio entre 1 y 100</h2>
<?php
$num = rand(1, 100);
echo "El número generado es: $num <br>";

if ($num <= 50) {
    echo "El número es menor o igual a 50.";
} else {
    echo "El número es mayor que 50.";
}
?>
<br><br><a href="index.php">Volver</a>
</body>
</html>
