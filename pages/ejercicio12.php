<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 12</title>
</head>
<body>
    <h1>FORMULARIO (control select)</h1>
    
    <form action="" method="POST">
        
        <label for="person_name">Nombre de la Persona:</label>
        <input type="text" name="person_name" required>
        <br>

        <label for="monthly_income">Selecciona tus Ingresos Mensuales:</label>
        <select name="monthly_income" required>
            <option value="">Seleccione Ingreso</option>
            <option value="low">1 - 1000</option>
            <option value="medium">1001 - 3000</option>
            <option value="high">> 3000</option>
        </select>
        <br>

        <input type="submit" value="Verificar Impuesto">
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["person_name"]) && isset($_POST["monthly_income"])) {
            
            $name = htmlspecialchars($_POST["person_name"]);
            $income_level = htmlspecialchars($_POST["monthly_income"]); 
        
            
            echo "<h2>Resultados:</h2>";
            
            if ($income_level === "high") {
                
                echo "<p>Estimado/a $name</p>";
                echo "<p>Dado que sus ingresos mensuales superan los 3000, debe pagar impuestos a las ganancias.</p>";
                
            } else {
                echo "<p>Estimado/a $name,</p>";
                echo "<p>Sus ingresos mensuales se encuentran en el rango seleccionado, por lo que no debe pagar impuestos a las ganancias.</p>";
                
            }
        }
    ?>
</body>
</html>