<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 18</title>
</head>
<body>
    <h1>Funciones en PHP</h1>
    <form action="" method="POST">
        
        <label for="user_name">Nombre de Usuario:</label>
        <input type="text" name="user_name" required>
        <br><br>

        <label for="password_one">Clave:</label>
        <input type="password" name="password_one" required>
        <br><br>

        <label for="password_two">Repetir Clave:</label>
        <input type="password" name="password_two" required>
        <br><br>

        <input type="submit" value="Verificar Claves" name="submit_button">
    </form>

    <?php
        function check_passwords($key_a, $key_b) {
            if ($key_a !== $key_b) {
                echo "<p>Las dos claves ingresadas no coinciden. Inténtelo de nuevo.</p>";
            } else {
                echo "<p>Las claves ingresadas coinciden.</p>";
            }
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit_button"])) {
            
            $password_one = $_POST["password_one"];
            $password_two = $_POST["password_two"];
            
            echo "<h2>Resultado de la Verificación:</h2>";
            check_passwords($password_one, $password_two);
        }
    ?>
</body>
</html>