<?php


$caminhoBanco = __DIR__ . '/banco.sqlite';
$pdo = new PDO('sqlite:' . $caminhoBanco);


$pdo->exec('create table if not exists promocao(
    ID INTEGER PRIMARY KEY AUTOINCREMENT,
    produto text not null,
    precoAntigo number not null,
    desconto number not null,
    observacao text);');


?>