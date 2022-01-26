<?php

class Coche{

    //ATRIBUTOS
    public $color; // PUBLIC: PODEMOS ACCEDER DESDE CUALQUIER LUGAR, DNTRO DE LA CLASE, DENTRO DE CLASES QUE HEREDEN ESTA CLASE O FUERA DE LA CLASE
    protected $marca; // PROTECTED: PODEMOS ACCEDER DESDE LA CLASE QUE LOS DEFINE Y DESDE CLASES QUE HERENDEN ESTA CLASE
    private $modelo ; // PRIVATE: SOLO PODEMOS ACCEDER DESDE ESTA CLASE
    public  $velocidad ;
    public $caballaje;
    public $plazas;

    //CONSTRUCTOR
        public function __construct($color,$marca,$modelo,$velocidad,$caballaje,$plazas){
            $this->color = $color;
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->velocidad = $velocidad;
            $this->caballaje = $caballaje;
            $this->plazas = $plazas;
        }

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

    /**
     * @param mixed $marca
     */
    public function setMarca($marca): void
    {
        $this->marca = $marca;
    }

    /**
     * @return mixed
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    public function mostrarInfo(){
        $inf = "<h1>Informacion del coche</h1><hr>";
        $inf .="Color: ".$this->color.'<br>';
        $inf .="Modelo: ".$this->modelo.'<br>';
        $inf .="Velocidad: ".$this->velocidad.'<br>';
        return $inf;
    }


} // FIN DEFINICIÓN CLASE