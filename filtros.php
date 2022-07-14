<?php 
$cursos = fopen('arquivos/cursos.txt', 'r');

stream_filter_append($cursos, 'string.toupper');

echo fread($cursos, filesize('arquivos/cursos.txt'));

?>