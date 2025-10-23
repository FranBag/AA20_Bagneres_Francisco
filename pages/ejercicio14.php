<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 14</title>
</head>
<body>
    <h1>Vectores (tradicionales)</h1>
    <?php
        $week_days = array(
            "Domingo",
            "Lunes", 
            "Martes", 
            "Miércoles", 
            "Jueves", 
            "Viernes", 
            "Sábado"
        );

        $first_day = $week_days[0];

        $total_days = count($week_days);

        $last_day = $week_days[count($week_days) - 1]; 

        echo "<p>El vector de días de la semana contiene $total_days elementos.</p>";
        echo "<p>El primer día de la semana es: $first_day.</p>";
        echo "<p>El último día de la semana es: $last_day.</p>";

    ?>
</body>
</html>