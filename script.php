<?php

/**
 * Created by PhpStrom.
 * User: Lucas
 * Date: 31/01/2020
 * Time: 21:32
 */
/* Documentaação
 * 
 * session_start() cria uma sessão ou resume a sessão atual baseado em um id de sessão passado via GET ou POST, ou passado via cookie.
 * 
 * Vai inicializar a sessão php
 */
session_start();

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolecente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';

//print_r($categorias);
//esse arquivo vai recuperar qualquer informação que vier para o post
$nome = $_POST['nome'];
$idade = $_POST['idade'];

/* Documentação
 * 
 * Validação dos dados
 * 
 * "empty vai validar se uma determina string está com valor ou não (vazio)"
 * 
 * "strlen" - vai contar a quantidado de caracteres
 * 
 * "is_numeric" - ira validadar se a variavel é um número
 */
if (empty($nome)) {
    $_SESSION['menssagem.de.erro'] = 'O campo nome não pode estar vazio';
    header($string = 'location: index.php');
    return;
} else if (strlen($nome) < 3) {
    $_SESSION['menssagem.de.erro'] = 'O nome deve contar mais de 3 caracteres';
    header($string = 'location: index.php');
    return;
} else if (strlen($nome) > 40) {
    $_SESSION['menssagem.de.erro'] = 'O nome não pode ter mais de 40 caracteres';
    header($string = 'location: index.php');
    return;
} else if (!is_numeric($idade)) {
    $_SESSION['menssagem.de.erro'] = 'Informe um número para a idade';
    header($string = 'location: index.php');
    return;
}

if ($idade >= 6 && $idade < 12) {
    for ($i = 0; $i <= count($categorias); $i++) {
        if ($categorias[$i] == 'infantil') {
            $_SESSION['menssagem.de.sucesso'] = "O nadador " . $nome . ", compete na categoria " . $categorias[$i] . ".";
            header($string = 'location: index.php');
            return;
        }
    }
} else if ($idade >= 13 && $idade <= 18) {
    for ($i = 0; $i <= count($categorias); $i++) {
        if ($categorias[$i] == 'adolecente') {
            $_SESSION['menssagem.de.sucesso'] = "O nadador " . $nome . ", compete na categoria " . $categorias[$i] . ".";
            header($string = 'location: index.php');
            return;
        }
    }
} else {
    for ($i = 0; $i <= count($categorias); $i++) {
        if ($categorias[$i] == 'adulto') {
            $_SESSION['menssagem.de.sucesso'] = "O nadador " . $nome . ", compete na categoria " . $categorias[$i] . ".";
            header($string = 'location: index.php');
            return;
        }
    }
}
