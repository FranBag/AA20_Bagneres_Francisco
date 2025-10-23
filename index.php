<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Guía PHP</title>
</head>
<body>
    <?php
        include "./db_connection.php";
        if (connect()) {
            echo "<p style='color: beige;'><b>Base de datos conectada.</b></p>";
        } else {
            echo "<p style='color: red;'><b>Base de datos no conectada.</b></p>";
        }
    ?>

    <h1>Actividad Áulica 20</h1>
    <h2>Bagneres Francisco</h2>

    <ol class="container">
        <?php 
            if ($connection) {
                $sql = mysqli_query($connection, "SELECT exercise_name, route FROM routes ORDER BY id_route ASC");
                
                while($row = mysqli_fetch_array($sql))
                {
                    $exercise_name = htmlspecialchars($row["exercise_name"]);
                    $route = htmlspecialchars($row["route"]);
                    echo "<li class='exercise'><a href='{$route}'>{$exercise_name}</a></li>"; 
                }
                
                mysqli_free_result($sql);
            } else {
                echo '
                <li class="exercise-alternative">
                    <p>Puedes usar las rutas locales en caso de que no funcione la conexión:</p>
                    <button type="button" onclick="showStaticExercises()">Mostrar Ejercicios Locales</button>
                </li>';
                
                echo '<div id="static_exercises" style="display: none;">';
                echo '
                    <li class="exercise" ><a href="./pages/ejercicio04.php">Ejercicio 4</a></li>
                    <li class="exercise" ><a href="./pages/ejercicio05.php">Ejercicio 5</a></li>
                    <li class="exercise" ><a href="./pages/ejercicio06.php">Ejercicio 6</a></li>
                    <li class="exercise" ><a href="./pages/ejercicio07.php">Ejercicio 7</a></li>
                    <li class="exercise" ><a href="./pages/ejercicio08.php">Ejercicio 8</a></li>
                    <li class="exercise" ><a href="./pages/ejercicio09.php">Ejercicio 9</a></li>
                    <li class="exercise" ><a href="./pages/ejercicio10.php">Ejercicio 10</a></li>
                    <li class="exercise" ><a href="./pages/ejercicio11.php">Ejercicio 11</a></li>
                    <li class="exercise" ><a href="./pages/ejercicio12.php">Ejercicio 12</a></li>
                    <li class="exercise" ><a href="./pages/ejercicio13.php">Ejercicio 13</a></li>
                    <li class="exercise" ><a href="./pages/ejercicio14.php">Ejercicio 14</a></li>
                    <li class="exercise" ><a href="./pages/ejercicio15.php">Ejercicio 15</a></li>
                    <li class="exercise" ><a href="./pages/ejercicio16.php">Ejercicio 16</a></li>
                    <li class="exercise" ><a href="./pages/ejercicio17.php">Ejercicio 17</a></li>
                    <li class="exercise" ><a href="./pages/ejercicio18.php">Ejercicio 18</a></li>
                ';
                echo '</div>';
            }
        ?>
    </ol>

    <script>
        function showStaticExercises() {
            var staticContainer = document.getElementById("static_exercises");
            var buttonContainer = document.querySelector(".exercise-alternative");

            staticContainer.style.display = "block"; 
            
            if (buttonContainer) {
                buttonContainer.style.display = "none";
            }
        }
    </script>
    
</body>
</html>