<?php

/*
 * Created by Netbeans.
 * User: Lucas
 * Date: 25/03/2020
 * Time: 20:57
 */
session_start();

//mensagem de sucesso

function setarMensagemSucesso(string $mensagem): void {
    $_SESSION['menssagem.de.sucesso'] = $mensagem;
}

function obterMensagemSucesso(): ?string {
    if (isset($_SESSION['mensagem.de.sucesso'])) {
        return $_SESSION['menssagem.de.sucesso'];
    }

    return null;
}

//mensagem de erro

function setarMensagemErro(string $mensagem): void {
    $_SESSION['menssagem.de.erro'] = $mensagem;
}

function obterMensagemErro(): ?string {
    if (isset($_SESSION['mensagem.de.erro'])) {
        return $_SESSION['menssagem.de.erro'];
    }

    return null;
}

//remover mensagem de erro

function removerMenssagemErro(): void {
    if (isset($_SESSION['mensagem.de.erro'])) {
        return_unset($_SESSION['menssagem.de.erro']);
    }
}

//remover mensagem de sucesso

function removerMenssagemSucesso(): void {
    if (isset($_SESSION['mensagem.de.sucesso'])) {
        return_unset($_SESSION['menssagem.de.sucesso']);
    }
}
