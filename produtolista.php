<?php
try{
include "conexao.php";

$sql = "SELECT * FROM tb_produtos";
$comando = $conexao->prepare($sql);
$comando->execute();
$dados = $comando->fetchAll(PDO::FETCH_ASSOC);
echo "<pre>";
var_dump($dados);

} catch (PDOException $err) {
    echo "Erro ao listar os dados: ". $err->getMessage();
}
?>

<!DOCTYPE html>

<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos - Lista</title>
</head>
<body>
    <table border=1>
        <?php
        foreach($dados as $produto){
            ?>

            <tr>
            <td><?php echo $produto['produto']; ?></td>
            <td><?php echo $produto['marca']; ?></td> 
            <td><?php echo $produto['quantidade']; ?></td>
            <td><?php echo $produto['preco']; ?></td>
           </tr>
           <?php } ?>
      
</table>

</body>
</html>