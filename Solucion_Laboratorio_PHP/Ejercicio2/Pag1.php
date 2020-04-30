<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Nº2</title>
</head>
<body>
<center><h1>Salario del vendedor</h1></center><br><br>
    <?php
    $nombre=$_POST['nombre'];
    $cantidad=$_POST['cantidad'];
    $precio=$_POST['precio'];
echo "El nombre del vendedor es: ".$nombre."<br><br>";
echo "La cantidad de automoviles vendidos es: ".$cantidad."<br><br>";
echo "El precio total de automoviles vendidos es: ".$precio."<br><br>";

$salario_basico=450000;
$comision=$cantidad*50000;
$porsentaje_venta=$precio*0.05;
$salario=$salario_basico+$comision+$porsentaje_venta;

echo "El  salario del vendedor es: " .$salario."<br>"
    ?>
</body>
</html>