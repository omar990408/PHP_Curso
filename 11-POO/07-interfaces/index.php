<?php

interface Ordenador{

    public function encender();
    public function apagar();
    public function reiniciar();
    public function detectaUsb();
    public function desfragmentar();
}

class iMac implements Ordenador {
    public $modelo;

    /**
     * @return mixed
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * @param mixed $modelo
     */
    public function setModelo($modelo): void
    {
        $this->modelo = $modelo;
    }

    public function encender()
    {
        // TODO: Implement encender() method.
    }

    public function apagar()
    {
        // TODO: Implement apagar() method.
    }

    public function reiniciar()
    {
        // TODO: Implement reiniciar() method.
    }

    public function detectaUsb()
    {
        // TODO: Implement detectaUsb() method.
    }

    public function desfragmentar()
    {

    }
}
$macPc = new iMac();
$macPc->setModelo("Macbook Pro 2019");
var_dump($macPc);
echo $macPc->getModelo();