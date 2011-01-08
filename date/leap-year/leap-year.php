<?php

/*
Bissexto
Autor: Sérgio Mandrake <sergio_mandrake@yahoo.com.br>
Tipo: Date
Descrição: Calcula os próximos anos bissexto
Complexidade: ?
Dificuldade:
    Fácil
Referências:
    http://pt.wikipedia.org/wiki/Ano_bissexto#Calend.C3.A1rio_Gregoriano
*/

function bissexto($numAnos = 4) {
    $anoAtual = $anoFinal = date('Y');
    $anoFinal += $numAnos;
    
    $anos = array();
    for ($i = $anoAtual; $i <= $anoFinal; $i++) {
        if (($i % 4) == 0) {
            $anos[] = $i;
        }
    }
    
    return $anos;
}

$proxAnosBissexto = bissexto(100);
echo join(', ', $proxAnosBissexto);
