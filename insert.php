<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>
</head>
<body>
    <?php
        require('conexao.php');

        $descricao = $_POST['descricao'];
        $marca = $_POST['marca'];
        $estoque = $_POST['estoque'];
        $preco = $_POST['preco'];
        $imagem = $_POST['imagem'];

        $erros = 0;
    ?>

    <?php if (is_null($descricao) OR $descricao == ''): ?>
        <div class="alert alert-danger" role="alert">Nome não pode estar em branco.</div>
        <?php $erros++ ?>
    <?php endif; ?>
        
    <?php 
        $resultado = false;

        if ($erros == 0) {
            $sql = "INSERT INTO produtos (id, descricao, marca, estoque, preco, imagem)  
                VALUES (null , '$descricao', '$marca', '$estoque', '$preco', '$imagem')";
        
            $resultado = mysqli_query($conexao, $sql);
        }        
    ?>

    <?php if ($resultado): ?>
        <div class="alert alert-success" role="alert">Produto cadastrado.</div>
        <a href="select.php" class="btn btn-primary">Lista de Usuário</a>
    <?php else: ?>
        <div class="alert alert-danger" role="alert">Erro!</div>
        <a href="cadastrar.php" class="btn btn-primary">Tentar novamente</a>
    <?php endif; ?>
    ?>
    
</body>
</html>