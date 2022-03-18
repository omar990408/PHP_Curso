<?php

require_once 'ModeloBase.php';
class Nota extends ModeloBase
{
private $usuario_id;
private $titulo;
private $descripcion;

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return mixed
     */
    public function getUsuarioId()
    {
        return $this->usuario_id;
    }

    /**
     * @param mixed $usuario_id
     */
    public function setUsuarioId($usuario_id): void
    {
        $this->usuario_id = $usuario_id;
    }

    /**
     * @return mixed
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * @param mixed $titulo
     */
    public function setTitulo($titulo): void
    {
        $this->titulo = $titulo;
    }

    /**
     * @return mixed
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * @param mixed $descripcion
     */
    public function setDescripcion($descripcion): void
    {
        $this->descripcion = $descripcion;
    }





    public function guardar(){
        $sql = "INSERT INTO notas (usuario_id,titulo,descripcion,fecha) VALUES ({$this->usuario_id},'{$this->titulo}','{$this->descripcion}',CURDATE());";
        $guardado = $this->db->query($sql);

        return $guardado;
    }



}