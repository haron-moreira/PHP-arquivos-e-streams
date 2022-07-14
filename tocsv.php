<?php

$meusCursos = file('cursos-php.txt');
$outrosCursos = file('arquivos/cursos.txt');

$arquivoCSV = fopen('cursos.csv', "w");

foreach ($meusCursos as $curso){
    $linha = [trim($curso), 'Sim'];
    //fwrite($arquivoCSV, implode(',', $linha));
    fputcsv($arquivoCSV, $linha, ';');
}

foreach ($outrosCursos as $curso){
    $linha = [trim($curso), 'Não'];
    fputcsv($arquivoCSV, $linha, ';');
//     fwrite($arquivoCSV, implode(',', $linha));
}

fclose($arquivoCSV);

?>