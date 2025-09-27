<?php

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();

date_default_timezone_set('America/Sao_Paulo');
$dataAtual = date('d/m/Y H:i:s');
$nomeUsuario = "Pablo Nascimento"; // Você pode alterar seu nome

$html = '
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
        }
        h1 {
            color: #0056b3;
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
            color: #333;
        }
        .footer {
            text-align: center;
            font-size: 0.8em;
            color: #777;
            margin-top: 30px;
        }
    </style>

    <h1>Relatório de Atividades do Projeto</h1>
    
    <p>Este documento foi gerado automaticamente pelo sistema em <strong>' . $dataAtual . '</strong>.</p>
    <p>Usuário responsável: <strong>' . $nomeUsuario . '</strong></p>

    <h2>Resumo das Tecnologias</h2>
    <p>A tabela abaixo detalha as tecnologias utilizadas neste projeto de portfólio.</p>
    
    <table>
        <thead>
            <tr>
                <th>Tecnologia</th>
                <th>Propósito</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>PHP</td>
                <td>Linguagem principal para a lógica do backend.</td>
            </tr>
            <tr>
                <td>Composer</td>
                <td>Gerenciador de dependências para pacotes PHP.</td>
            </tr>
            <tr>
                <td>mPDF</td>
                <td>Biblioteca para converter HTML e CSS em PDF.</td>
            </tr>
            <tr>
                <td>HTML & CSS</td>
                <td>Estrutura e estilo da interface e do próprio PDF.</td>
            </tr>
        </tbody>
    </table>

    <div class="footer">
        Gerador de PDF v1.0
    </div>
';

$mpdf->WriteHTML($html);

$mpdf->Output('gerador_PDF.pdf', \Mpdf\Output\Destination::DOWNLOAD);