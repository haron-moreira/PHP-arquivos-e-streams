<?php
// jeito 1

// $arquivo = fopen('cursos.txt', 'r');

// // while (!feof($arquivo)){
// //     $curso = fgets($arquivo);
// //     echo $curso;
// // } 
// $tamanhoArquivo = filesize('cursos.txt');
// $cursos = fread($arquivo, $tamanhoArquivo);

// echo $cursos;

// fclose($arquivo);


// Jeito 2
$cursos = file_get_contents('cursos.txt');
echo $cursos;

// Jeito 3 - com Arrays

$cursos = file('cursos.txt');
var_dump($cursos);

?>
