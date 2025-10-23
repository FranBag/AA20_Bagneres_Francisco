<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 17</title>
</head>
<body>
    <h1>Vectores (asociativos)</h1>

    <?php
        $user_passwords = array(
            "admin_user" => "Pass123",
            "jorge_perez" => "Contrasenia",
            "ana_lopez" => "MegaSeguro111",
            "web_master" => "MasterCode01",
            "invitado_1" => "password"
        );

        $target_user = "admin_user"; 
        
        $target_user_password = $user_passwords[$target_user]; 

        echo "<p>La clave de acceso para el usuario $target_user es: $target_user_password.</p>";
        
        $second_target_user = "ana_lopez";
        $second_target_password = $user_passwords[$second_target_user];
        echo "<p>La clave de acceso para $second_target_user es: $second_target_password.</p>";
    ?>
</body>
</html>