<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica Back End PHP Unidad 2</title>
</head>
<body>
    <?php
 
        $datos = [
            "Nombre" => "Ramiro",
            "Apellido" => "Reynoso",
            "Edad" => 39,
            "Hobbie" => "Ciclismo",
            "editor_pref" => "VSC",
            "so" => "Windows"
        ];

        foreach($datos as $clave => $dato){
            if($clave == "editor_pref"){
                echo "<br>" . "Editor de código preferido: ". $dato;
            } elseif($clave == "so"){
                echo "<br>" . "Sistema operativo que utiliza: " . $dato;
            } else {
                echo "<br>" . $clave . ": " . $dato;
            }
        }
    ?>
</body>
</html>