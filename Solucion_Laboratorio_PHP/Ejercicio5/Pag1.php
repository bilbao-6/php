<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Nº5</title>
</head>
<body>
<center><h1>descuento de un articulo</h1></center><br><br>
<?php
    $NOMRE=$_POST['NOMRE'];
    $CLAVE=$_POST['CLAVE'];
    $PRECIO=$_POST['PRECIO'];

    echo "Nombre del articulo: ".$NOMRE."<br><br>";
    echo "Clave de descuento: ".$CLAVE."<br><br>";
    echo "Precio original del articulo: ".$PRECIO."<br><br>";

    if($CLAVE==1){
        $total=$PRECIO-($PRECIO*0.1);
        echo "El precio con descuento es: ".$total."<br>";
       }
       else{
        if($CLAVE==2){
         $total=$PRECIO-($PRECIO*0.2);
         echo "El precio con descuento es: ".$total."<br>";
        }
        else{
         echo "Esa clave no existe";
        }
       }
?>
</body>
</html>