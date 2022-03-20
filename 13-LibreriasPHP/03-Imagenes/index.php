<?php
require_once "../vendor/autoload.php";
$original_photo = 'CR7.jpg';
$save_in = 'CR7_M.jpg';

$thumb = new PHPThumb\GD($original_photo);
ob_clean();
//Redimensionar
$thumb->resize(500,500);
$thumb->show();
$thumb->save($save_in);