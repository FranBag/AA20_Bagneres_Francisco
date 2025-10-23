<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 13</title>
</head>
<body>
    <h1>FORMULARIO (control textarea)</h1>
    
    <form action="" method="POST">
        
        <label for="contract_content">Rellena los Datos del Contrato</label> <br>
        <textarea name="contract_content" rows="15" cols="80" required>
En la ciudad de [Ciudad], se acuerda entre la Empresa [Nombre de la Empresa] 
representada por el Sr. [Representante] en su carácter de Apoderado,
con domicilio en la calle [Domicilio de la Empresa] y el Sr. [Nombre del Empleado],
futuro empleado con domicilio en [Domicilio del Empleado], celebrar el presente 
contrato a Plazo Fijo, de acuerdo a la normativa vigente de los
artículos 90, 92, 93, 94, 95 y concordantes de la Ley de Contrato de Trabajo N° 20.744.
        </textarea> <br>
        <input type="submit" value="Mostrar Contrato Final">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["contract_content"])) {

            $modified_contract = htmlspecialchars($_POST["contract_content"]);
            
            echo "<h2>Contrato Final:</h2>";
            echo $modified_contract;
        }
    ?>

</body>
</html>