<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center><h1>Indice de masa corporal</h1></center><br><br>
<?php
    $nombre=$_POST['nombre'];
    $peso=$_POST['peso'];
    $estatura=$_POST['estatura'];
echo "El nombre del paciente es: ".$nombre."<br><br>";
echo "El peso del paciente es: ".$peso." kg <br><br>";
echo "La estatura del paciente es: ".$estatura." m <br><br>";

$indiceMasa=$peso/($estatura*$estatura);
echo "El indice de masa corporal es: ".$indiceMasa."<br><br>";

if($indiceMasa<18.5){
    echo "El paciente esta por debajo del peso";
}
else{
    if($indiceMasa<24.9){
        echo "El paciente saludable";
    } 
    else{
        if($indiceMasa<29.9){
            echo "El paciente con sobre peso";
        }
        else{
            if($indiceMasa<39.9){
                echo "El paciente es obeso";
            }
            else{
                echo "El paciente tiene obesidad morbida";
            }
        }
    }
}
?>
</body>
</html>