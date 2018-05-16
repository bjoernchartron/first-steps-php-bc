<?php

$istGeschäftskunde = true;

/*if ($istGeschäftskunde == true)
{
    $mwstFaktor = 1;
}
else 
{
    $mwstFaktor = 1.19;
}*/

$mwstFaktor = ($istGeschäftskunde == true) ? 1 : 1.19;

echo 10.00 * $mwstFaktor;