<?php

$nettoPreis = 17.93;
$mwstFaktor = 1.19;
$bruttoPreis = $nettoPreis * $mwstFaktor;

echo str_replace ('.', ',', round($bruttoPreis,2)). ' €';

echo $preis;


