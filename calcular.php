<?php
$numero1 = $_POST["numero1"];
$numero2 = $_POST["numero2"];
$soma = $numero1 + $numero2;
$menos = $numero1 - $numero2;
$vezes = $numero1 * $numero2;
$dividir = $numero1 / $numero2;



echo("<h2>a soma é $soma</h2>");
echo("<h2>a a subtração é $menos</h2>");
echo("<h2>a multiplicação é $vezes</h2>");
echo("<h2>a divisão é $dividir</h2>");


?>