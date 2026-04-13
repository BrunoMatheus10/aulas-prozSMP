<link rel="stylesheet" href="style.css">


<?php
$nome = $_POST ['nome'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];
$valorTotal = $preco * $quantidade;

echo "Cadastrado com sucesso <br>";
echo "Nome do produto: $nome <br>";
echo "preço do produto: R$ $preco <br>";
echo "quantidade do produto: $quantidade <br>";
echo "Valor total: R$ $valorTotal ";

?>


