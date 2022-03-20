<?php
require "../vendor/autoload.php";

use Spipu\Html2Pdf\Html2Pdf;

$html2pdf = new Html2Pdf();
// Obtener Vista para generar PDF
ob_start();
require_once "pdfGenerar.php";
$html = ob_get_clean();

$html2pdf->writeHTML($html);
$html2pdf->output('pdf_generado.pdf');