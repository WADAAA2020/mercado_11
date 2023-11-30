<?php

echo "<h2>Aula</h2>";

$conexao = new PDO("mysql:host=localhost;dbname=aulapdo","root","");

// var_dump($conexao);

$select = "SELECT * FROM tb_produtos";

$resultado = $conexao->query($select);

$consulta = $resultado->fetchAll();

foreach ($consulta as $linha) {
    echo '<hr> <pre>';
    echo $linha['nome_produto'];
}

?>