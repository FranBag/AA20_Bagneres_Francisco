<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Punto 8 - Estructuras repetitivas</title>
</head>
<body>
<h2>Punto 8 - Tabla de multiplicar del 2</h2>

<?php
echo "<h3>Usando for:</h3>";
for ($i = 1; $i <= 10; $i++) {
    echo "2 x $i = " . (2 * $i) . "<br>";
}

echo "<h3>Usando while:</h3>";
$i = 1;
while ($i <= 10) {
    echo "2 x $i = " . (2 * $i) . "<br>";
    $i++;
}

echo "<h3>Usando do/while:</h3>";
$i = 1;
do {
    echo "2 x $i = " . (2 * $i) . "<br>";
    $i++;
} while ($i <= 10);
?>
<br><br><a href="index.php">Volver</a>
</body>
</html>
