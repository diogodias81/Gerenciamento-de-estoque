<?php

$produtos = [
];

if(isset($_POST) && count($_POST) > 0) {
    $_SESSION['listaDeNotas'][] = [
        'nome' => $_POST['nome'],
        'quantidade' => $_POST['quantidade',
        'preco' => $_POST['preco',
        
        ]
    ];
}
?>
