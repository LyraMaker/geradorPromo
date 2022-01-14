<?php

function verificarSeMenorIgualZero($valor)
{
    if ($valor <= 0) return FALSE;
    else return TRUE;
}

function gerarNovoValor($pdo,$nome,$precoAntigo,$obs,$desconto)
{
    if (verificarSeMenorIgualZero($desconto) && verificarSeMenorIgualZero($precoAntigo)) {
        $vNovo = $precoAntigo - ($precoAntigo * ($desconto / 100));

        $query = "INSERT INTO promocao(produto,precoAntigo,desconto,observacao) values ( :produto,:precoAntigo,:desconto,:observacao);";

        $stmt = $pdo->prepare($query);

        $stmt->bindValue(":produto", $nome);
        $stmt->bindValue(":precoAntigo", $precoAntigo);
        $stmt->bindValue(":desconto", $desconto);
        $stmt->bindValue(":observacao", $obs);

        $stmt->execute();

        return $vNovo;
    } else {
        return "ERRO! EXISTE VALORES MENORES OU IGUAL A ZERO!";
    }
}
