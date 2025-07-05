<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Soma de Números Digitados</title>
</head>
<body>
    <h2>Soma de Números Digitados</h2>
    <?php
    $soma = 0;
    if (isset($_POST['soma'])) {
        $soma = (int)$_POST['soma'];
    }

    if (isset($_POST['numero'])) {
        $numero = (int)$_POST['numero'];
        while ($numero != 0) {
            $soma += $numero;
            echo '<form method="post">';
            echo '<label for="numero">Digite um número (0 para parar):</label>';
            echo '<input type="number" name="numero" id="numero" required autofocus>';
            echo '<input type="hidden" name="soma" value="' . $soma . '">';
            echo '<input type="submit" value="Enviar">';
            echo '</form>';
            echo '<p>Soma parcial: ' . $soma . '</p>';
            return;
        }
        echo '<p>Soma total dos números digitados: ' . $soma . '</p>';
    } else {
    ?>
    <form method="post">
        <label for="numero">Digite um número (0 para parar):</label>
        <input type="number" name="numero" id="numero" required autofocus>
        <input type="hidden" name="soma" value="0">
        <input type="submit" value="Enviar">
    </form>
    <p>Soma parcial: 0</p>
    <?php } ?>
</body>
</html>
