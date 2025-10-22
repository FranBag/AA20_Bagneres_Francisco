<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>
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