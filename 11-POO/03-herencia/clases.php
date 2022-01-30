<?php

// HERENCIA: POSIBILIDAD DE COMPARTIR ATRBUTOS Y MÉTODOS ENTRE CLASES
class Persona{
    private $nombre;
    private $apellido;
    private $altura;
    private $edad;

    /**
     * @param $nombre
     * @param $apellido
     * @param $altura
     * @param $edad
     */
    public function __construct($nombre, $apellido, $altura, $edad)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->altura = $altura;
        $this->edad = $edad;
    }


    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre): void
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * @param mixed $apellido
     */
    public function setApellido($apellido): void
    {
        $this->apellido = $apellido;
    }

    /**
     * @return mixed
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * @param mixed $altura
     */
    public function setAltura($altura): void
    {
        $this->altura = $altura;
    }

    /**
     * @return mixed
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * @param mixed $edad
     */
    public function setEdad($edad): void
    {
        $this->edad = $edad;
    }


    public function hablar(){
        return 'Estoy hablando';
    }

    public function caminar(){
        return 'Estoy Caminando';
    }

}

class Informatico extends Persona {

    private $lenguajes;

    /**
     * @param $lenguajes
     */
    public function __construct($lenguajes)
    {
        $this->lenguajes = $lenguajes;
    }


    public function sabeLenguajes($lenguaje){
        $this->lenguajes = $lenguaje;
    }

    public function programar(){
        return "Soy Programador";
    }

    public  function repararOrdenador(){
        return "Reiniciando...";
    }
}

class TecnicoRedes extends Informatico{
    private $auditarRedes;

public function __construct($lenguajes,$auditarRedes)
{
    parent::__construct($lenguajes);
    $this->auditarRedes = $auditarRedes;
}


    public function auditoria(){
        return "Esoty auditando";
    }
}