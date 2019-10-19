<form action="prov02.php" method="post">
    localidade
    <input type="text" name="localidade">
    <br>
    <input type="submit" name="enviar">
</form>

<?php

$l = $_POST["localidade"];

$f = fopen("violencia-domestica-df.csv", "r");
$dados = fgetcsv($f);
while($l!=$dados[0])
    $dados = fgetcsv($f);
echo "Localidade: $dados[0], 2011: $dados[1], 2012: $dados[2], 2013: $dados[3], 2014: $dados[4], 2015: $dados[5], 2016: $dados[6]";

?>