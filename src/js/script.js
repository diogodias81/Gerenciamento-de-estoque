let listaDeProdutos = [];
let produtos = document.querySelector('#produtos');
let listaEstoqueDisponivel = [
    {
        'produto':'tv',
        'quantidadeNoEstoque': 20,
    },
    {
        'produto':'celular',
        'quantidadeNoEstoque':5
    },
    {
        'produto':'Controle Xbox',
        'quantidadeNoEstoque':4
    }
]

for(let i = 0; i < listaEstoqueDisponivel.length;i++){
    produtos.innerHTML +=
    `
    <div> 
        <p>
            produto: ${listaEstoqueDisponivel[i].produto} <br>
            Estoque: ${listaEstoqueDisponivel[i].quantidadeNoEstoque} 
        </p>
    
    </div>`
}

let nome = document.querySelector('#nome');
let quantidade = document.querySelector('#quantidade');
let preco = document.querySelector('#preco');
let categoria = document.querySelector('#categoria');
let resultado = document.querySelector('#resultado');
function adicionarProdutos(){
    fetch('db/produtos.php',{
        method:'POST',
        headers:{
            "Content-Type": "application/x-www-form-urlencoded"

        },
        body: `nome=${nome.value}&quantidade=${quantidade.value}&preco=${preco.value}&categoria=${categoria.value}`
    })
        .then(r => r.json())
        .then(r =>{
            listaDeProdutos = r;
            
            carregarProdutos()
        })
}
function carregarProdutos(){
        fetch('db/produtos.php')

            .then(resposta => resposta.json())

            .then(resposta =>{

                listaDeProdutos = resposta;

                let varVazia = '';

                for(let i= 0;i < listaDeProdutos.length; i++){
                    varVazia += 
                    `
                    <div id="produto-${i}" class="produto">    
                        <p>Nome:${resposta[i].nome}
                            <button type="button" onclick ="editarNome(${i})">
                                Editar Nome
                            </button>
                        </p>
                        
                        <p>Quantidade:${resposta[i].quantidade}
                            <button type="button" onclick ="editarQtd(${i})">
                                Editar Quantidade
                            </button>
                        </p>
                        
                        <p>Preço:${resposta[i].preco}
                            <button type="button" onclick ="editarPreco(${i})">
                                Editar Preço
                            </button>
                        </p>
                        
                        <p>Categoria:${resposta[i].categoria}
                            <button type="button" onclick ="editarCatagoria(${i})">
                                Editar Categoria
                            </button>
                        </p>
                        <hr>
                    </div>`
                
                }
                resultado.innerHTML = varVazia;
        })
}
carregarProdutos()

function editarNome(indice){
    let nomeNovoValor = prompt("Insira o Novo Nome")
    fetch('db/produtos.php',{
        method:'POST',
        headers:{
        "Content-Type": "application/x-www-form-urlencoded"
        
    },
        body:`indice=${indice}&nome=${nomeNovoValor}`
    })
        .then(resposta => resposta.json())
        .then(resposta =>{
            carregarProdutos()
    })


}
function editarQtd(indice){
    let novaQuantidade = prompt("Insira A Nova quantidade");
    fetch('db/produtos.php',{
        method:'POST',
        headers:{
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: `indice=${indice}&quantidade=${novaQuantidade}`
    })
        .then(resposta => resposta.json())
        .then(resposta =>{
            carregarProdutos()
    })

}