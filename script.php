<?php
/**
 * Created by PhpStrom.
 * User: Lucas
 * Date: 31/01/2020
 * Time: 21:32
 */

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolecente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';

//print_r($categorias);

//esse arquivo vai recuperar qualquer informação que vier para o post
$nome = $_POST['nome'];
$idade = $_POST['idade'];

//Validação dos dados
//"empty vai validar se uma determina string está com valor ou não (vazio)"
if(empty($nome))
{
    echo 'O campo do nome não pode estar vazio';
    return;
}
//"strlen" - vai contar a quantidado de caracteres
if(strlen($nome) < 3)
{
   echo'O nome deve contar mais de 3 caracteres';
   return;
}
if(strlen($nome) > 40)
{
    echo'O nome não pode ter mais de 40 caracteres';
    return;
}
//"is_numeric" - ira validadar se a variavel é um número
if(!is_numeric($idade))
{
    echo'Informe um número para a idade';
    return;
}

if($idade >= 6 && $idade < 12)
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if ($categorias[$i] == 'infantil'){
            echo "O nadador " .$nome. ", compete na categoria " .$categorias[$i] .".";
        }
    }
}
else if ($idade >= 13 && $idade <= 18)
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if ($categorias[$i] == 'adolecente'){
            echo "O nadador " .$nome. ", compete na categoria " .$categorias[$i] .".";
        }
    }
}
else{
    for ($i = 0; $i <= count($categorias); $i++)
    {
        if ($categorias[$i] == 'adulto'){
            echo "O nadador " .$nome. ", compete na categoria " .$categorias[$i] .".";
        }
    }

}
