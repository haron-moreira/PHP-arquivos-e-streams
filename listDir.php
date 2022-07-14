<?php 

$diretorio = dir('.');

while ($arquivo = $diretorio->read()){
echo $arquivo . PHP_EOL;
}

?>