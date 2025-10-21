<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Punto 7 - Estructura condicional</title>
</head>
<body>
<h2>Punto 7 - Estructura condicional (if)</h2>
<?php
$valor = rand(1, 3);
echo "Número generado: $valor<br>";

if ($valor == 1) {
    echo "Uno";
} elseif ($valor == 2) {
    echo "Dos";
} else {
    echo "Tres";
}
?>
<br><br><a href="index.php">Volver</a>
</body>
</html>
