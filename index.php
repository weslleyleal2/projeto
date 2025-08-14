<?php
require __DIR__ . '/vendor/autoload.php';
define('BASE_PATH', __DIR__);

use App\Controllers\CategoriaController;
use App\Controllers\ProdutoController;
use App\Controllers\MovimentacaoController;

/**
 * Função para incluir arquivos de views com segurança
 */
function view($arquivo) {
    $caminho = BASE_PATH . '/views/' . $arquivo;
    if(file_exists($caminho)) {
        include $caminho;
    } else {
        echo "Erro: Arquivo '$arquivo' não encontrado!";
    }
}

// Captura a rota da URL, padrão vazio
$rota = $_GET['rota'] ?? '';

// Roteamento simples
switch ($rota) {
    case 'categorias':
        (new CategoriaController())->index();
        break;

    case 'salvar_categoria':
        (new CategoriaController())->salvar();
        break;

    case 'produtos':
        (new ProdutoController())->index();
        break;

    case 'salvar_produto':
        (new ProdutoController())->salvar();
        break;

    case 'movimentacoes':
        (new MovimentacaoController())->index();
        break;

    case 'salvar_movimentacao':
        (new MovimentacaoController())->salvar();
        break;

    default:
        // Inclui a view home com segurança
        view('home.php');
        break;
}


