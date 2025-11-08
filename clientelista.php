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
    <title>Clientes - Lista</title>
</head>
<body>
    <table border=1>
        <?php
        foreach($dados as $cliente){
            ?>

            <tr>
            <td><?php echo $cliente['name']; ?></td>
            <td><?php echo $cliente['email']; ?></td> 
            <td><?php echo $cliente['phone']; ?></td>
            <td><?php echo $cliente['cpf']; ?></td>
           </tr>
           <?php } ?>
      
</table>

</body>
</html>