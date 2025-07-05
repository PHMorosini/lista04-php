<?php
$catalogoLivros = array(
    'It' => 10,
    'Jurassic park' => 30,
    'it 2' => 15,
    'O Silmarillion' => 140
);


foreach ($catalogoLivros as $titulo => $preco) {
    echo "Livro: $titulo Preço: R$ $preco" . '<br>';
}
?>
