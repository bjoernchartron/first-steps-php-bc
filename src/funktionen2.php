<?php

function preisFormattierung ($nettoPreis, $mwstFaktor)
{
    $bruttoPreis = $nettoPreis * $mwstFaktor;
    $gerundeterBruttoPreis = round($bruttoPreis, 2);
    $deutscherPreis = str_replace('.',',', $gerundeterBruttoPreis);
    $preis = $deutscherPreis. ' €';
    return $preis;
}

echo preisFormattierung (10.578784, 1.19). '<br>';
echo preisFormattierung (20.973456, 1.07). '<br>';
echo preisFormattierung (30.245768, 1.19). '<br>';
echo preisFormattierung (40.087653, 1.07). '<br>';
