<?php 
    $id = $_GET['id']; 

    require('conexao.php');
    $resultado = mysqli_query($conexao, "SELECT * FROM produtos WHERE id = $id");
    $produto = mysqli_fetch_assoc($resultado);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Cadastrar PetLove</title>

    
</head>
<body>

<div class="container">

<header class="top mb-5">
  <div  class="row ">
    <div   class="col-md-3 pb-4 pt-4">
    <img src="img/logo petlove.png" width="20%" >
    <span class="text-logo pl-3">PetLove</span>
    </div>
  </div>
  </header>

  <div class="row prod">
  <div class="col-md-12 pb-3 text-center">
  <h3>Editar Produto</h3>
  </div>
</div>

<form class="w-50 mb-5" action="editar.php" method="post">
<div class="form-group">
    <input type="hidden" class="form-control" name="id" id="id" value="<?=$produto['id']?>">
  </div>
  <div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" class="form-control" name="descricao" id="descricao" aria-describedby="descricao" value="<?=$produto['descricao']?>" placeholder="nome do produto">
  </div>
  <div class="form-group">
    <label for="marca">Marca</label>
    <input type="text" class="form-control" name="marca" id="marca" aria-describedby="marca" value="<?=$produto['marca']?>" placeholder="marca do produto">
  </div>
  <div class="form-group">
    <label for="estoque">Estoque</label>
    <input type="number" class="form-control" name="estoque" id="estoque" aria-describedby="estoque" value="<?=$produto['estoque']?>" placeholder="quantidade de estoque">
  </div>
  <div class="form-group">
    <label for="preco">Preço</label>
    <input type="number" class="form-control" name="preco" id="preco" aria-describedby="preco" value="<?=$produto['preco']?>" placeholder="R$">
  </div>
  <div class="form-group pb-3 pt-2">

    <input type="file" class="form-control-file pb-3" name="imagem" id="imagem" value="<?=$produto['imagem']?>"">
  </div>
  <a href="read.php" type="submit" class="btn btn-cancelar">Cancelar</a>
  <button type="submit" name="editar" value="editar" class="btn btn-cadastrar">Salvar</button>
</form>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>