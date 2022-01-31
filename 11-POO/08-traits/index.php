<?php

//LOS TRAITS PERMITEN COMPARTIR METODOS ENTRE DIFERENTES CLASES

trait Utilidades{
    public function mostrarNombre(){
        echo "<h1>El nombre es: ".$this->nombre."</h1>";
    }
}

class Coche{
    public $nombre;
    public $marca;

    use Utilidades;
}

class Persona{
    public $nombre;
    public $apellidos;
    use Utilidades;
}

class VideoJuego{
    public $nombre;
    public $year;
    use Utilidades;
}

$coche = new Coche();
$coche->nombre = "Tesla";
$persona = new Persona();
$persona->nombre = "Adrina";
$game = new VideoJuego();
$game->nombre = "FIFA 22";



$coche->mostrarNombre();
$persona->mostrarNombre();
$game->mostrarNombre();