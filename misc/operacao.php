<?php

function verificarSeMenorIgualZero($valor){
    if($valor<=0) return FALSE; else return TRUE;
}

function gerarNovoValor($vAntigo,$desconto){
    if(verificarSeMenorIgualZero($desconto)&&verificarSeMenorIgualZero($vAntigo)){
    $vNovo = $vAntigo-($vAntigo*($desconto/100));
    return $vNovo;}
    else{
        return "ERRO! EXISTE VALORES MENORES OU IGUAL A ZERO!";
    }
    
}