<?php

//ejercicio1
function par_impar($numero)
{
    if($numero%2==0)
    {
        $resp="Es Par";
    }
    else{
        $resp="Es impar";
    }
    return $resp;
}
echo "Resultado: ".par_impar(4);
//ejercicio2

function mayor($n1,$n2)
{
    if($n2<$n1)
    {
        $rpta="El numero mayor es: $n1";
    }
    elseif($n2>$n1)
    {
        $rpta="El numero mayor es: $n2";
    }
    else
    {
        $rpta="Los dos numeros son iguales";
    }
    return $rpta;
}
echo "<br>Resultado: ".mayor(2,1);
//ejercicio3
function cuadrado($num)
{
    $resultado=$num*$num;
    return $resultado;
}

echo "<br>Resultado: ".cuadrado(5);

?>