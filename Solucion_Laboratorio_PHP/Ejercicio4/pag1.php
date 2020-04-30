<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Nº4</title>
</head>
<body>
<center><h1>Cantidad de dinero de cada area</h1></center><br><br>
<?php
    $Monto_pre=$_POST['Monto_pre'];

    echo "El Monto presupuestal es: ".$Monto_pre."<br><br>";

        $Ginecologia=$Monto_pre*0.4;
        $Pediatria=$Monto_pre*0.3;
        $Traumatologia=$Monto_pre*0.3;

        echo "La cantidad de dinero para Ginecologia es: " .$Ginecologia."<br><br>";
        echo "La cantidad de dinero para Pediatria es: " .$Pediatria."<br><br>";
        echo "La cantidad de dinero para Traumatologia es: " .$Traumatologia."<br>";

?>
</body>
</html>