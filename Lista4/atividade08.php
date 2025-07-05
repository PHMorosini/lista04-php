<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["notas"])) {
        $notas = $_POST["notas"];
        $quantidade = count($notas);
        $soma = 0;
        $i = 0;

        do {
            $soma += (float) $notas[$i];
            $i++;
        } while ($i < $quantidade);

        $media = $soma / $quantidade;

        echo "<h3>Média final: " . number_format($media, 2, ',', '.') . "</h3>";
    }

    elseif (isset($_POST["quantidade"])) {
        $quantidade = (int) $_POST["quantidade"];
        ?>
        <form method="post">
            <?php
            for ($j = 0; $j < $quantidade; $j++) {
                echo "<label>Nota " . ($j + 1) . ":</label>";
                echo "<input type='number' name='notas[]' step='0.01' required><br>";
            }
            ?>
            <input type="submit" value="Calcular Média">
        </form>
        <?php
    }
} else {
    ?>
    <form method="post">
        <label>Quantas notas deseja inserir?</label>
        <input type="number" name="quantidade" min="1" required>
        <input type="submit" value="Continuar">
    </form>
    <?php
}
?>