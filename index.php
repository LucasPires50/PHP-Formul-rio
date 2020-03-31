<?php
//O 'session_start', tem que antes de todo o código.
session_start();
?>

<html>

    <head>
        <meta charset="utf=8">
        <title>Formulário de iinscrição</title>
        <meta name="author" content="">
        <meta name="descripton" content="">
        <meta name="viewport" content="width=device.width, inicila-scale=1">
    </head>

    <body>

        <p>FORMULÁRIO PARA INSCRIÇÃO DE COMPETIDORES</p>

        <! --execução do script.php-->
        <form action="script.php" method="post">
            <?php
            $messagemDeSucesso = isset($_SESSION['menssagem.de.sucesso']) ? $_SESSION['menssagem.de.sucesso'] : '';
            if (!empty($messagemDeSucesso)) {
                echo $messagemDeSucesso;
            }
            $messagemDeErro = isset($_SESSION['menssagem.de.erro']) ? $_SESSION['menssagem.de.erro'] : '';
            if (!empty($messagemDeErro)) {
                echo $messagemDeErro;
            }
            ?>

            <p>Seu nome: <input type="text" name="nome"/></p>
            <p>Sua idade: <input type="text" name="idade"/></p>

            <! --para enviar o que for digitado o formulário-->
            <p><input type="submit" value="Enviar dados do competidor"/></p>
        </form>

    </body>
</html>