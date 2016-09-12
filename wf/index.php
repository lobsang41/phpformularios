<?php 
require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;
$domdpf = new Dompdf();
$domdpf->loadHtml('<h1>This is my first HTML to PDF file </h1>');
$domdpf->setPaper('A4', 'landscape');
$domdpf->render();
$domdpf->stream('codexworld',array('Attachment'=>0));
?>