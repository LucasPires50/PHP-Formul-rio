<?php

/*
 * Created by Netbeans.
 * User: Lucas
 * Date: 25/03/2020
 * Time: 19:58
 */

//Criando uma função
function validaNome(string $nome) : bool{
    if (empty($nome)) {
        setarMensagemErro($mensagem= 'O campo nome não pode estar vazio');
        return false;
    } else if (strlen($nome) < 3) {
        setarMensagemErro ($mensagem= 'O nome deve contar mais de 3 caracteres');
        return false;
    } else if (strlen($nome) > 40) {
        setarMensagemErro ($mensagem='O nome não pode ter mais de 40 caracteres');
        return false;
    }
    return true;
}

function validaIdade(string $idade) : bool {
    if (!is_numeric($idade)) {
        setarMensagemErro ($mensagem= 'Informe um número para a idade');
        return false;
    }
    return true;
}
