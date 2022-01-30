<?php

class Configuracion{
    public static $color;
    public static $newLetter;
    public static $entorno;

    /**
     * @return mixed
     */
    public static function getColor()
    {
        return self::$color;
    }

    /**
     * @param mixed $color
     */
    public static function setColor($color): void
    {
        self::$color = $color;
    }

    /**
     * @return mixed
     */
    public static function getNewLetter()
    {
        return self::$newLetter;
    }

    /**
     * @param mixed $newLetter
     */
    public static function setNewLetter($newLetter): void
    {
        self::$newLetter = $newLetter;
    }

    /**
     * @return mixed
     */
    public static function getEntorno()
    {
        return self::$entorno;
    }

    /**
     * @param mixed $entorno
     */
    public static function setEntorno($entorno): void
    {
        self::$entorno = $entorno;
    }



}