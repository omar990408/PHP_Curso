<?php
//require_once "classes/usuario.php";
//require_once "classes/entrada.php";
//require_once "classes/categoria.php";
// Se usa para evitar escribir los rqro


require_once "autoload.php";
//RELOAD

//$usuario = new Usuario();
//$entrada = new Entrada();
//$categoria = new Categoria();
//var_dump($usuario);
//var_dump($categoria);
//var_dump($entrada);

// ESPACIOS DE NOMBRES Y PAQUETES

// Para espacio de nombres ..

use MisClases\usuario, MisClases\Categoria, MisClases\Entrada;
use PanelAdministrador\usuario as UsuarioAdmin;


class Principal{
    public $usuario;
    public $entrada;
    public $categoria;

    public function __construct(){

//        $this->usuario = new MisClases\Entrada();
//        $this->categoria = new MisClases\Categoria();
//        $this->entrada = new MisClases\Entrada();

        $this->usuario = new usuario();
        $this->categoria = new Categoria();
        $this->entrada = new Entrada();
    }

    /**
     * @return usuario
     */
    public function getUsuario(): usuario
    {
        return $this->usuario;
    }

    /**
     * @return Entrada
     */
    public function getEntrada(): Entrada
    {
        return $this->entrada;
    }

    /**
     * @return Categoria
     */
    public function getCategoria(): Categoria
    {
        return $this->categoria;
    }

    // CONSTANTES CLASES
    function informacion(){
        echo __CLASS__;
    }

}

//OBJETO PRINCIPAL
//$usuario = new PanelAdministrador\usuario();
$usuario = new UsuarioAdmin();
var_dump($usuario);



// OBJETO PAQUETE
$principal = new Principal();
$principal->informacion();
var_dump($principal->usuario);
$metodos = get_class_methods($principal); // devuelve metodos
$busqueda = array_search('getEntrada',$metodos);
var_dump($busqueda);


// COMPROBAR SI EXISTE UNA CLASE
$clase =  class_exists("MisClases\usuario");
if ($clase){
    echo 'Existe';
}else{
    echo "no existe";
}


