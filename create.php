<!DOCTYPE html>
<html lang="pt-br">
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
  <h3>Novo Produto</h3>
  </div>
</div>

<form class="w-50 pb-5" action="insert.php" method="post">
  <div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" class="form-control" name="descricao" id="descricao" aria-describedby="descricao" placeholder="nome do produto" required>
  </div>
  <div class="form-group">
    <label for="marca">Marca</label>
    <input type="text" class="form-control" name="marca" id="marca" aria-describedby="marca" placeholder="marca do produto" required>
  </div>
  <div class="form-group">
    <label for="estoque">Estoque</label>
    <input type="number" class="form-control" name="estoque" id="estoque" aria-describedby="estoque" placeholder="quantidade de estoque" required>
  </div>
  <div class="form-group">
    <label for="preco">Preço</label>
    <input type="number" min="0.00" max="10000.00" step="0.01" class="form-control" name="preco" id="preco" aria-describedby="preco" placeholder="R$" required>
  </div>
  <div class="form-group pb-3 pt-2">

    <input type="file" class="form-control-file pb-3" name="imagem" id="imagem">
  </div>
  <a href="read.php" type="text" class="btn btn-cancelar">Cancelar</a>
  <button type="submit" class="btn btn-cadastrar">Cadastrar</button>
</form>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>