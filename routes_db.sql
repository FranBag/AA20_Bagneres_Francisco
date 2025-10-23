DROP DATABASE IF EXISTS AA20;
CREATE DATABASE AA20;
USE AA20;

CREATE TABLE routes (
	id_route TINYINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	exercise_name VARCHAR(20) UNIQUE NOT NULL,
	route TEXT UNIQUE NOT NULL
);

INSERT INTO routes (exercise_name, route) VALUES
("Ejercicio 4", "./pages/ejercicio04.php"),
("Ejercicio 5", "./pages/ejercicio05.php"),
("Ejercicio 6", "./pages/ejercicio06.php"),
("Ejercicio 7", "./pages/ejercicio07.php"),
("Ejercicio 8", "./pages/ejercicio08.php"),
("Ejercicio 9", "./pages/ejercicio09.php"),
("Ejercicio 10", "./pages/ejercicio10.php"),
("Ejercicio 11", "./pages/ejercicio11.php"),
("Ejercicio 12", "./pages/ejercicio12.php"),
("Ejercicio 13", "./pages/ejercicio13.php"),
("Ejercicio 14", "./pages/ejercicio14.php"),
("Ejercicio 15", "./pages/ejercicio15.php"),
("Ejercicio 16", "./pages/ejercicio16.php"),
("Ejercicio 17", "./pages/ejercicio17.php"),
("Ejercicio 18", "./pages/ejercicio18.php");


SELECT * FROM routes;