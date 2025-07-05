<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Nomes</title>
</head>
<body>
    <h2>Lista de Nomes de Alunos)</h2>
    <?php
        $alunos = ["Ana", "Bruno", "Carla", "Diego", "Eduarda"];
        echo '<ol>';
        foreach ($alunos as $nome) {
            echo "<li>$nome</li>";
        }
        echo '</ol>';
    ?>
</body>
</html>
