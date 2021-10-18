<?php
if(isset($_GET['titulo']) and isset($_GET['descripcion'])){
   echo $_GET['titulo'].'<br>';
   echo  $_GET['descripcion'];
}