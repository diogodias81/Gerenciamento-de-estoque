<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento De Estoque</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div>
            <h1 class="text">Bem Vindo ao Controle De Estoque!</h1>
        </div>
        
        <div class="card">
            <div class="form">
                <input type="text"   id="nome"        placeholder="Nome Do Produto">
                <input type="number" id="quantidade"  placeholder="Quantidade">
                <input type="number" id="preco"       placeholder="Preço">
                <input type="text"   id="categoria"   placeholder="Categoria">
                <button type="button" class="btn" onclick="adicionarProdutos()">Adicionar</button>
            </div>
            
            <div>
                <h3>Produtos no estoque:</h3>
            </div>
            <div id="produtos" class="produto"></div>
        </div>

        <div class="card2">
            <p class="paragrafo">Resultado:</p>
            <div class="resultado" id="resultado"></div>
        </div>
        
    <script src="js/script.js"></script>
</body>
</html>