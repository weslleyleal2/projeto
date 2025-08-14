<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movimentações</title>
</head>
<body>
<h1>Movimentações</h1>
    <form method="POST" action="index.php?rota=salvar_movimentacao">
        <select name="produto_id" required>
            <?php foreach (($produtos ?? []) as $prod): ?>
                <option value="<?= $prod['id'] ?>"><?= htmlspecialchars($prod['nome']) ?> (Qtd: <?= $prod['quantidade'] ?>)</option>
            <?php endforeach; ?>
        </select>

        <select name="tipo" required>
            <option value="entrada">Entrada</option>
            <option value="saida">Saída</option>
        </select>

        <input type="number" name="quantidade" required min="1" placeholder="Quantidade">
        <button type="submit">Registrar</button>
    </form>

    <h2>Histórico</h2>
    <table border="1" cellpadding="6">
        <tr>
            <th>Produto</th>
            <th>Tipo</th>
            <th>Quantidade</th>
            <th>Data</th>
        </tr>
        <?php foreach (($movimentacoes ?? []) as $m): ?>
            <tr>
                <td><?= htmlspecialchars($m['produto_nome']) ?></td>
                <td><?= ucfirst($m['tipo']) ?></td>
                <td><?= $m['quantidade'] ?></td>
                <td><?= $m['data_movimentacao'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <p><a href="index.php">Voltar</a></p>






    
</body>
</html>