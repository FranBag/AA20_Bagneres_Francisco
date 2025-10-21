<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>
<!-- Mostrar la tabla de multiplicar del 2. Emplear el for, luego el while y por último el do/while.
La estructura for permite incrementar una variable de 2 en 2: 
for ($f = 2; $f <= 20; $f = $f + 2)  -->
    <h1>Estructuras repetitivas (for - while - do/while)</h1>
    <?php
        echo "<h2>Bucle For</h2>";
        for ($i=2; $i <= 20; $i = $i + 2) { 
            echo "$i ";
        }
        
        echo "<h2>Bucle While</h2>";
        $i = 0;
        while ($i < 20) {
            $i = $i + 2;
            echo "$i ";
        }

        echo "<h2>Bucle DoWhile</h2>";
        $i = 0;
        do {
            $i = $i  +2;
            echo "$i "; 
        } while ($i < 20);
    ?>
</body>
</html>