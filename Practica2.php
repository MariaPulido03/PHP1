<html>
<head>
<title> Practica 2 </title>
</head>
<body>
<?php
$a=10; //variable global

function variables(){
$b=15; //variable local es la que esta dentro de la funcion
echo "Prueba de la impression de la variable dentro";
echo "La variable a es $a <br>";
echo "La variable b es $b <br>";
}

variables();
echo "Prueba de la impresion de la variable fuera<br>"; 
echo "La variable a es $a <br>";
echo "La variable b es $b <br>";

?>
<img src="Practica2.png" alt="Evidencia de practica 2" width="500">
</body>
</html>
