<?php
require_once "clases.php";

$persona = new Persona("Omar","Gonzalez",1.68,22);
var_dump($persona);

$informatico = new Informatico("Python");

var_dump($informatico);

$tecnico = new TecnicoRedes("Python",true);
var_dump($tecnico);