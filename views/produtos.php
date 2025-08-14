
<!DOCTYPE html>
<html lang="Pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Estoque</title>
</head>
<body>
    <h1>Gerenciar Produtos</h1>
    <form method="POST" action="index.php?rota=salvar_produto">
        <input type="text" name="nome" placeholder="Nome do produto" required>
        <input type="number" step="0.01" name="preco" placeholder="Preço" required>
        <input type="number" name="quantidade" placeholder="Quantidade" required>
        <select name="categoria_id">
            <option value="">-- Sem categoria --</option>
            <?php foreach (($categorias ?? []) as $c): ?>
                <option value="<?= $c['id'] ?>"><?= htmlspecialchars($c['nome']) ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Salvar</button>
    </form>

    <h2>Lista de Produtos</h2>
    <table bd="1" cellpadding="6">
        <tr>
            <th>Nome</th>
            <th>Preço</th>
            <th>Quantidade</th>
            <th>Categoria</th>
        </tr>
        <?php foreach (($produtos ?? []) as $p): ?>
            <tr>
                <td><?= htmlspecialchars($p['nome']) ?></td>
                <td>R$ <?= number_format($p['preco'], 2, ',', '.') ?></td>
                <td><?= $p['quantidade'] ?></td>
                <td><?= htmlspecialchars($p['categoria_nome'] ?? '') ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <p><a href="index.php">Voltar</a></p>
</body>
</html>