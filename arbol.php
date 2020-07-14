<?php 

echo"<br>******ARBOL******<br>";
class arbol
{
    public $cantidaHojas;
    public $tipo;
    public $antiguedad;
    public $altura;
    
    public function crecer($altura)
    {
        echo "CRECIENDO .... $altura Metros <br>";
    }

    public function crearHojas($cantidaHojas)
    {
        echo "CREANDO HOJAS .... $cantidaHojas Hojas<br>";
        
    }

    public function fotosintesis($tipo, $antiguedad)
    {
        echo "REALIZANDO FOTOSINTESIS .... del arbol $tipo de $antiguedad años";
        
    }
}
$tree = new arbol();
$tree->crecer(10);
$tree->crearHojas(1200);
$tree->fotosintesis("Dragon", 20);

echo"<br>******HUMANO******<br>";

class humano
{
    public $altura;
    public $genero;
    public $edad;
    public $caracter;
    public function hablar($caracter,$edad,$genero)
    {
        echo "HABLANDO.... mi genero es $genero, soy $caracter y tengo $edad años<br>";
    }
    public function correr()
    {
        echo "CORRIENDO......<br>";
    }
    public function comer($altura)
    {
        echo "COMIENDO .... altura = $altura Metros";
    }
}
$hum=new humano();
$hum->hablar("amigable", 19, "masculino");
$hum->correr();
$hum->comer(1.7);
?>