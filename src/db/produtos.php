<?php
session_start();
//se ainda nao existir valor
if(!isset($_SESSION['listaDeProdutos'])){
    //se nao existir cria a lista como um array vazio
    $_SESSION['listaDeProdutos'] = [];
}

//verifica se existe indice no POST e nome no POST,e aqui se o usuario ira querer editar o NOME
if(isset($_POST['indice']) && isset($_POST['nome'])){
   
        $indice = $_POST['indice'];
         //acessa o produto pelo indice,quer dizer que o produto esta na posicao 1 do array
        $_SESSION['listaDeProdutos'][$indice]['nome'] = $_POST['nome'];
}
//verificando se existe se existe o indice e quantidade
if(isset($_POST['indice']) && isset($_POST['quantidade'])){
    $indice = $_POST['indice'];
    $_SESSION['listaDeProdutos'][$indice]['quantidade'] = $_POST['quantidade'];
}


//vereificando se as informacoes do fetch estao retornando as informacoes certas
if(
     isset($_POST['nome']) && 
     isset($_POST['quantidade']) &&
     isset($_POST['preco']) &&
     isset($_POST['categoria'])
){
    //adicionando um novo elemento no final do array  usando []

    $_SESSION['listaDeProdutos'][] = [
        'nome' => $_POST['nome'],
        'quantidade' => $_POST['quantidade'],
        'preco' => $_POST['preco'],
        'categoria' => $_POST['categoria']
    ];
}
echo json_encode($_SESSION['listaDeProdutos']);
// unset($_SESSION['listaDeProdutos']);