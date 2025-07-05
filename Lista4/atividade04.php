<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tabuada Personalizada</title>
</head>
<body>
    <h2>Tabuada Personalizada</h2>
    <?php if (!isset($_POST['tabuada'])): ?>
        <form method="post">
            <label for="tabuada">Digite um número (1 a 10):</label>
            <input type="number" name="tabuada" id="tabuada" min="1" max="10" required>
            <input type="submit" value="Mostrar Tabuada">
        </form>
    <?php else: ?>
        <div>
            <h3>Tabuada do <?php echo (int)$_POST['tabuada']; ?>:</h3>
            <?php
                $num = (int)$_POST['tabuada'];
                $i = 1;
                do {
                    echo "$num x $i = " . ($num * $i) . '<br>';
                    $i++;
                } while ($i <= 10);
            ?>
        </div>
        <a href="?">Voltar</a>
    <?php endif; ?>
</body>
</html>
