<?php

$produto = $_POST['produto'];
$marca = $_POST['marca'];
$quantidade = $_POST['quantidade'];
$preco = $_POST['valor'];

if($produto == ""){
    echo "Preencha o nome do produto";
    exit;
}

if($marca == ""){
    echo "Preencha a marca do produto";
    exit;
}

if($quantidade == ""){
    echo "Preencha a quantidade do produto";
    exit;
}

if($preco == ""){
    echo "Preencha o preço do produto";
    exit;
}

// Conexão com o banco de dados
define("SERVIDOR", "localhost");
define("USUARIO", "root");
define("SENHA", "");
define("BANCO", "db_estoque");

$conexao = new PDO("mysql:host=".SERVIDOR.";dbname=".BANCO." charset=utf8", USUARIO, SENHA);

$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "INSERT INTO db_ estoque (produto,marca,quantidade,valor) VALUES ($produto,$marca,$quantidade,$preco)";

$comando = $conexao->prepare($sql);
$comando->execute();

echo "Produto cadastrado com sucesso!";
?>
