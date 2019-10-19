<?php

$ano = $_GET["ano"];

$f = fopen("violencia-domestica-df.csv", "r");
$dados = fgetcsv($f);
$i = 0;
while($ano!=$dados[$i++]) {}
--$i;
while($dados)
    {
        echo "$dados[0]     |    $dados[$i]<br>";
        $dados=fgetcsv($f);
    }
    fclose($f);
?>