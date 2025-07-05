<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Contagem Regressiva</title>
</head>
<body>
    <h2>Contagem Regressiva</h2>
    <?php if (!isset($_POST['numero'])): ?>
        <form method="post">
            <label for="numero">Digite um número:</label>
            <input type="number" name="numero" id="numero" min="0" required>
            <input type="submit" value="Contar">
        </form>
    <?php else: ?>
        <div>
            <h3>Contagem:</h3>
            <?php
                $contador = (int)$_POST['numero'];
                while ($contador >= 0) {
                    echo $contador . '<br>';
                    $contador--;
                }
            ?>
        </div>
        <a href="?">Voltar</a>
    <?php endif; ?>
</body>
</html>
