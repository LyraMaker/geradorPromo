<?php

include('conec.php');
include('operacao.php');
$nome = $_POST['nome']; $precoAntigo = $_POST['preco-antigo']; $desconto = $_POST['desconto']; $obs = $_POST['obs'];

$query = "INSERT INTO promocao(produto,precoAntigo,desconto,observacao) values ( :produto,:precoAntigo,:desconto,:observacao);";

$stmt = $pdo->prepare($query);

$stmt->bindValue(":produto",$nome);
$stmt->bindValue(":precoAntigo",$precoAntigo);
$stmt->bindValue(":desconto",$desconto);
$stmt->bindValue(":observacao",$obs);



$stmt->execute();


?>