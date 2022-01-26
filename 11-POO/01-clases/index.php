<?php
// POO en PHP

// DEFINIR UNA CLASE

class Coche{

    //ATRIBUTOS
    public $color = "rojo";
    public $marca = "Ferrari";
    public $modelo = "Aventador";
    public  $velocidad = 300;
    public $caballaje = 500 ;
    public $plazas = 2;

    //METODOS
    public function getColor(): string
    {
        return $this ->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }
    public function getVelocity(): int
    {
        return $this->velocidad;
    }

    public function acelerar(){
        $this->velocidad++;
    }

    public function frenar(){
        $this->velocidad--;
    }

} // FIN DEFINICIÓN CLASE

// CREACIÓN OBJETO | INSTANCIAR

$coche = new Coche();
var_dump($coche);

echo "<hr>";

// USANDO METODOS

echo "La velocidad del coche es ".$coche->getVelocity()." km";

echo "<hr>";

$coche->setColor('Azul');
echo "El color del coche es ".$coche->getColor();

$coche->acelerar();
$coche->acelerar();
$coche->acelerar();

echo "<hr>";
echo "La velocidad del coche es ".$coche->getVelocity()." km";

$coche2 = new Coche();
$coche2->setColor('verder');
var_dump($coche2);

