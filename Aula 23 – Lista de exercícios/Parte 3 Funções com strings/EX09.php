<?php
$texto = 'Zebra';

$texto1 = strtolower($texto);
echo($texto1);

echo("\n");

$texto2 = Strtoupper($texto);
echo($texto2);

echo("\n");

$texto3 = ucfirst($texto);
echo($texto3);

echo("\n");

$texto4 = strlen($texto);
echo($texto4);

echo("\n");

$texto4 = str_replace("a", "o", $texto);
echo($texto4);

echo("\n");

$texto5 = substr($texto, 0, 4);
echo($texto5);