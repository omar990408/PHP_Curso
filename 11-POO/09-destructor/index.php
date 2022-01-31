<?php
class Usuario{
    public $nombre;
    public $email;

    public function __construct(){
        $this->nombre = "Omar";
        $this->email = "ofgonzalez1@espe.edu.ec";
        echo "Instancia del objeto creada <br>";
    }

    public function __destruct(){
        echo "<br>Destruyendo el objeto";
    }

    public function __toString()
    {
        return "Hola {$this->nombre}, tu email es {$this->email}";
    }


}
$usuario = new Usuario();
echo $usuario;
//for ($i = 0; $i<20 ; $i++){
//    echo "$i<br>";
//}