<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de promoções</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bakbak+One&family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilo.css">
    <script defer src="https://friconix.com/cdn/friconix.js"> </script>
</head>
<body>
<?php

include('conec.php');
include('operacao.php');

$nome = $_POST['nome'];
$precoAntigo = $_POST['preco-antigo'];
$desconto = $_POST['desconto'];
$obs = $_POST['obs'];

$novoValor = gerarNovoValor($pdo,$nome,$precoAntigo,$obs,$desconto);

include('oferta.php');

?>
</body>
</html>