<?php
//Jeito 1
// $arquivo = fopen('cursos-php.txt', 'a');

// $curso = "\nProgramação Orientada a Objetos";

// fwrite($arquivo, $curso);

// fclose($arquivo);


// Jeito 2

$curso = "Programação Orientada a Objetos\n";

file_put_contents('cursos-php.txt', $curso, FILE_APPEND);

?>