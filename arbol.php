<?php 

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
?>