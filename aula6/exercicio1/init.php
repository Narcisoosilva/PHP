<?php
/*
Agora que vc já conhece:
variável, condicionais, loop, array e função

faça um programa para cadastro e listagem de produtos com estoque
neste programa, vc terá que solicitar :
    o codigo de identificação do produto
    nome do produto
    descricao do produto
    quantidade em estoque

um item no menu de saida do estoque onde vc digita o codigo do produto e quanto que irá sair do estoque, se o produto não tiver a quantidade em estoque, alertar

também terá um relatório onde irá mostrar todos os produtos e os seus itens em estoque

=================================
id  nome    descricao  quantidade
=================================
1   Pasta   uma desc   3
1   Pasta   uma desc   3
1   Pasta   uma desc   3
1   Pasta   uma desc   3
1   Pasta   uma desc   3
1   Pasta   uma desc   3
*/

$estoque = [];

function tela() {
    echo "1. Cadastrar podutos\n";
    echo "2. Listar todos os podutos\n";
    echo "3. Remover podutos\n";
    echo "4. Sair\n";
    echo "Digite sua opção: ";
}

function lista ($arraylista){
    echo str_repeat("=", 40) . "\n";
    echo str_pad("id", 10) . str_pad("nome", 15) . str_pad("descricao", 10) . str_pad("qtd", 5) . "\n";
    echo str_repeat("=", 40) . "\n";

    foreach ($arraylista as $produto) {
        echo str_pad($produto['id'], 10) . 
             str_pad($produto['nome'], 15) . 
             str_pad($produto['descricao'], 10) . 
             str_pad($produto['qtd'], 5) . "\n";
    }

    echo str_repeat("=", 40) . "\n";
    
}
function cadastrar(&$estoque) {
    echo "Digite o id do produto.";
    $id = trim(fgets(STDIN));

    echo "Digite o nome produto.";
    $nome = trim(fgets(STDIN));

    echo "Digite a descrição do produto.";
    $descricao = trim(fgets(STDIN));

    echo "digite a quantidade do produto.";
    $qtd = trim(fgets(STDIN));

    $estoque[] = [
        "id" => $id,
        "nome" => $nome,
        "descricao" => $descricao,
        "qtd" => $qtd,
    ];
    echo "Produto cadastrado com sucesso!\n";
}

function remover($array, $id) {
    unset($array[$id]);
}





while (true) {
    // Menu principal
    tela();    
    $opcao = trim(fgets(STDIN));

    switch ($opcao) {
        case 1:
            cadastrar($estoque);
            break;
        case 2:
            // Listar Livros
            lista($estoque);
            break;
        case 3:
            // Listar Livros não qtd$qtds
            echo str_repeat("=", 40) . "\n";
            echo str_pad("id", 10) . str_pad("nome", 15) . "ano de descricao" . "voce ja leu \n";
            echo str_repeat("=", 40) . "\n";

            foreach ($biblioteca_pessoal as $livro) {
                $valor = $livro['qtd$qtd'];
                if($valor == "nao"){
                    echo str_pad($livro['id'], 10) . 
                    str_pad($livro['nome'], 15) . 
                    $livro['descricao'] .
                    $livro['qtd'] ."\n";
                }
            
            }

            echo str_repeat("=", 40) . "\n";
            break;
        case 4:
            exit("Obrigado por usar o programa!\n");
        
        default:
        echo "Opção inválida.\n";
            break;
    }
}



