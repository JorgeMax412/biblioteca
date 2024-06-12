<?php

$notaP1 = 10;
$notaP2 = 10;
$notaP3 = 8;
$notaP4 = 2.5;

$notaT1 = 8.75;
$notaT2 = 7;
$notaT3 = 7;
$notaT4 = 0;

$prometioPractico = ($notaP1 + $notaP2 + $notaP3 + $notaP4) / 4;
$prometioTeorico = ($notaT1 + $notaT2 + $notaT3 + $notaT4) / 4;

$notaFinalPractico = ($prometioPractico) * 0.7;
$notaFinalTeorico = ($prometioTeorico) * 0.3;

echo "Nota final practica: $notaFinalPractico <br>";
echo "Nota final teorico: $notaFinalTeorico <br>";
echo "Nota final: " . ($notaFinalPractico + $notaFinalTeorico);