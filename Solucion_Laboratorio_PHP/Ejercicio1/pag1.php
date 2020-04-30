<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Nº1</title>
</head>
<body>
<?php
 $P1=$_POST['P1'];
 $P2=$_POST['P2'];
 $P3=$_POST['P3'];
 $examenFinal=$_POST['examenFinal'];
 $trabajoFinal=$_POST['trabajoFinal'];
 $promedioParciales= ($P1 + $P2 + $P3)/3;

 echo "La nota del primer parcial es: ".$P1."<br><br>";
 echo "La nota del segundo parcial es: ".$P2."<br><br>";
 echo "La nota del terero parcial es: ".$P3."<br><br>";
 echo "La nota del examen final es: ".$examenFinal."<br><br>";
 echo "La nota del trabajo final es: ".$trabajoFinal."<br><br>";

 $porcentajeParciales= $promedioParciales*0.35;
 $porcentajeExamen=$examenFinal*0.35;
 $porcentajeTrabajo=$trabajoFinal*0.30;
 $notaFinal=$porcentajeParciales+$porcentajeExamen+$porcentajeTrabajo;
 
 echo "La nota final es: ".$notaFinal."<br><br>";
 
 if($notaFinal<3){  
  echo "El estudiante no aprobó";
  }
 else{
  echo "El estudiante aprobó ";
  }
?>
su definitiva es: <?php echo $notaFinal ?>

</body>
</html>
