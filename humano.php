<?php

class humano
{
    public $altura;
    public $genero;
    public $edad;
    public $caracter;
    public function hablar($caracter,$edad,$genero)
    {
        echo "hablando.... mi genero es $genero, soy $caracter y tengo $edad años<br>";
    }
    public function correr()
    {
        echo "corriendo......<br>";
    }
    public function comer($altura)
    {
        echo "comiendo .... altura = $altura Metros";
    }
}
$hum=new humano();
$hum->hablar("amigable", 19, "masculino");
$hum->correr();
$hum->comer(1.7);
?>