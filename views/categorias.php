<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Categorias</title>
</head>
<body>
    <h1>Gerenciar Categorias</h1>
    <form method="POST" action="index.php?rota=salvar_categoria">
        <input type="text" name="nome" placeholder="Nome da Categoria" required>
        <button type="submit">Salvar</button>
    </form>

    <h2>Lista</h2>
    <ul>
        <?php foreach (($dados ?? []) as $cat): ?>
            <li><?= htmlspecialchars($cat['nome']) ?></li>
        <?php endforeach; ?>
    </ul>

    <p><a href="index.php">Voltar</a></p>
</body>
</html>