<?php

require_once __DIR__ . '/vendor/autoload.php';

// Instanciando a classe da versão 6.1 (sem namespace)
$mpdf = new \Mpdf\Mpdf();

$html = '
    <h1>Olá, PDF!</h1>
    <h1>O PHP moderno é incrível!!</h1>
    <p>Este é o meu primeiro documento PDF gerado com a biblioteca mPDF v8.2</p>
';

$mpdf->WriteHTML($html);

// Na v6, o segundo parâmetro era uma string, não uma constante
$mpdf->Output('documento.pdf', 'D'); // <--- MUDANÇA SECUNDÁRIA

?>