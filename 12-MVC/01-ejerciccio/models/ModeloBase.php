<?php
require_once "config/database.php";
class ModeloBase
{
    public $db;

    public function __construct(){
        $this->db = database::conectar();
    }
    public function getAll($tabla){
//        var_dump($this->db);
//        return "Obteniendo todos los usuarios..";
        $query = $this->db->query("SELECT * FROM $tabla ORDER BY id DESC ");
        return $query;
    }
}