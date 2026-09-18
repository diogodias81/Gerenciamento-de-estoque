<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de estoque</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="texto">
            <h1>Bem Vindo ao Controle De Estoque!</h1>
        </div>
        <div class="card">
            <input type="text"   id="nome"        placeholder="Nome Do Produto">
            <input type="number" id="quantidade"  placeholder="Quantidade">
            <input type="number" id="preco"       placeholder="Preço">
            <input type="text"   id="categoria"   placeholder="Categoria">
            <button type="button" class="btn" onclick="salvarDados()">Adicionar</button>
        </div>
        <div class="card2">
            <p class="paragrafo">Resultado:</p>
            <div class="resultado"></div>
        </div>
        
    <script src="js/script.js"></script>
</body>
</html>