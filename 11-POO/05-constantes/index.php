<?php

class Usuario{

    const URL_COMPLETA = "http://localhost";
    private $email;
    private $password;

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email): void
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }

}
$usuario = new Usuario();
var_dump($usuario);
echo $usuario::URL_COMPLETA.'<hr>'; // ASI SE IMPRIMEN LAS CONSTANTES
echo Usuario::URL_COMPLETA; // ASI SE IMPRIMEN LAS CONSTANTES