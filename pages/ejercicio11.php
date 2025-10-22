<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 11</title>
</head>
<body>
    <h1>FORMULARIO (control checkbox)</h1>
    <h2>Selecciona tus Deportes</h2>
    
    <form action="" method="POST">
        <label for="name">Nombre de la Persona:</label>
        <input type="text" name="person_name" required>

        <label>Deportes que Practica:</label>
        <label><input type="checkbox" name="sports[]" value="futbol">Fútbol</label>
        <label><input type="checkbox" name="sports[]" value="basket">Backet</label>
        <label><input type="checkbox" name="sports[]" value="tennis">Tenis</label>
        <label><input type="checkbox" name="sports[]" value="voley">Voley</label>

        <input type="submit" value="Contar Deportes">
    </form>
    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["person_name"])) {
                $personName = htmlspecialchars($_POST["person_name"]);
                if (isset($_POST["sports"])) {
                    $selectedSports = $_POST["sports"];
                    
                    $sportCount = count($selectedSports);
                    
                    echo "<h2>Resultados:</h2>";

                    echo "<p>El usuario $personName practica $sportCount deportes.</p>";
                    
                } else {
                    echo "<h2>Resultados:</h2>";
                    echo "<p>El usuario $personName no seleccionó ningún deporte.</p>";
                }
            }
    ?>
</body>
</html>