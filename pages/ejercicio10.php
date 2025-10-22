<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 10</title>
</head>
<body>
    <h1>FORMULARIO (control radio)</h1>
    <form action="" method="POST">
        <label for="person_name">Nombre de la Persona:</label>
        <input type="text" name="person_name" required>

        <h2>Nivel de Estudios:</h2>
        <label><input type="radio" name="person_study" value="1" required>No tiene estudios</label>
        <label><input type="radio" name="person_study" value="2">Estudios primarios</label>
        <label><input type="radio" name="person_study" value="3">Estudios secundarios</label>

        <input type="submit" value="Mostrar Perfil">
    </form>

    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["person_name"]) && isset($_POST["person_study"])) {
            $name = htmlspecialchars($_POST["person_name"]);
            $study = htmlspecialchars($_POST["person_study"]);

            switch ($study) {
                case "1":
                    $study_msg = "no tiene estudios formales.";
                    break;
                case "2":
                    $study_msg = "posee Estudios Primarios completos.";
                    break;
                case "3":
                    $study_msg = "posee Estudios Secundarios completos.";
                    break;
                default:
                    $study_msg = "ha seleccionado una opción desconocida.";
                    break;
            }

            echo "<h2>Resultado:</h2>";

            echo "<p>La persona ingresada es: $name.</p>";
            echo "<p>Según su selección, $study_msg</p>";
        }
    ?>
</body>
</html>