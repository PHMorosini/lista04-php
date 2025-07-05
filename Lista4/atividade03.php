
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Soma dos 100 primeiros números inteiros</title>
</head>
<body>
    <h2>Soma dos 100 primeiros números inteiro</h2>
    <?php
        $soma = 0;
        for ($i = 1; $i <= 100; $i++) {
            $soma += $i;
        }
        echo "A soma de 1 a 100 é: $soma";
    ?>
</body>
</html>
