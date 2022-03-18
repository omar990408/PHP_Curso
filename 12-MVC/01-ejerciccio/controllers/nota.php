<?php
class NotaController{

    public function listar(){
//        MODELO
        require_once "models/nota.php";
//        LOGICA ACCION CONTROLADOR
        $nota = new Nota();

//        $nota->setContenido("Wuenas nuevas");
//        $nota->setNombre('Holaaa');

        $notas = $nota->getAll('notas');

//        VISTA
        require_once "views/nota/listar.php";

    }
    public function crear(){
//        MODELO
        require_once "models/nota.php";

        $nota = new Nota();
        $nota->setUsuarioId(3);
        $nota->setTitulo("Nota desde PHP MVC");
        $nota->setDescripcion("XXXX");
        $nota->guardar();

//        echo $nota->db->error;
//        die();
        header("Location: index.php?action=listar&controller=Nota");

    }
    public function borrar(){

    }
}