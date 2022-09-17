<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
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

    <?php if (is_null($descricao) or $descricao == '') : ?>
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

    <?php if ($resultado) : ?>
        <script type="text/javascript">
            alert("Produto Cadastrado com sucesso!");
            window.location = "read.php";
        </script>
    <?php else : ?>
        <script type="text/javascript">
            alert("Falha ao cadastrar o produto!");
            window.location = "create.php";
        </script>
    <?php endif; ?>

</body>

</html>