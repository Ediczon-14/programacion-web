<?php

//1.-declarar un entero, n, calcular la suma de los n primeros números impares
echo"<hr>";
echo "Reto 1<br>";
echo"<hr>";
$n=6;
$sum=0;
for($i=1;$i<$n;$i++)
{
    if($i%2==1)
    {
        echo "sumamos<br>";
        echo $sum."+".$i."=".($sum=$sum+$i);
        
    }
    else
    {
        echo "<br>No sumamos<br>";
    }

}
echo "<br>Resultado: ".$sum."<br>";
echo"<hr>";
echo "Reto 2<br>";
echo"<hr>";
//2.-declarar tres números y mostrarlos ordenados de mayor a menor.
$arrayA=array(8,5,9);
$mayor=0;
$menor=100;
$s=1;
for($x=0;$x< sizeof($arrayA)-1;$x++)
{
    for($j=0;$j<sizeof($arrayA)-$x-1;$j++)
    {
        if($arrayA[$j+1]>$arrayA[$j])
        {
            $aux=$arrayA[$j+1];
            $arrayA[$j+1]=$arrayA[$j];
            $arrayA[$j]=$aux;
        }
    }
}
for($y=0;$y< sizeof($arrayA);$y++)
{
    echo $arrayA[$y]."<br>";
}
echo"<hr>";
echo "Reto 3<br>";
echo"<hr>";
//3.declarar un número entre 0 y 9.999 y decir cuantas cifras tiene.

$numero=9.999;
$decimal=0;
$entero;

echo $numero;
$entero=(int)$numero;
		
while ($numero>$entero){
  $numero*=10;
  $decimal++;
  $entero=(int)$numero;
}
		
echo " tiene ".$desimal." dígitos";

echo"<hr>";
echo "Reto 4<br>";
echo"<hr>";
//4.-Imprimir los 15 primeros números y escribir la suma total.
$n=15;
$sum=0;
for($i=1;$i<$n;$i++)
{
    echo "<br>";
    echo $sum."+".$i."=".($sum=$sum+$i);
}
?>