<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Cadastrar PetLove</title>

    <style>
/* Color Theme Swatches in Hex */
.Rose-gold-gray-1-hex { color: #73787E; }
.Rose-gold-gray-2-hex { color: #AFABAC; }
.Rose-gold-gray-3-hex { color: #F7E0DA; }
.Rose-gold-gray-4-hex { color: #E3BBA9; }
.Rose-gold-gray-5-hex { color: #BF8A7C; }

      *{
        font-family: 'Open Sans', 'Helvetica Neue', sans-serif;
      
      }
      
       .top .text-logo{
       font-size: 1.5em;
       color: #73787E;
          }
       .prod h3{
        font-size: 2em;
        color: #73787E;
        text-align: center;
     
       }
       .formulario{
        width: 60%;
        margin: auto;
       }
      .formulario label{
        color: #707070
      } 
      
        header{
        border-bottom: 1px solid  #F7E0DA ;
        }

      .btn-cancelar{
       border: 1px solid #BF8A7C;
       color: #BF8A7C;
       padding: 10px 30px;
  
  
      }
      .btn-cadastrar{
        background-color: #F7E0DA;
        color: #505050;
        padding: 10px 30px;
        margin-left: 10px;  
  
      }
 
    </style>
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

<form action="insert.php" method="post">
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
    <input type="number" class="form-control" name="preco" id="preco" aria-describedby="preco" placeholder="R$" required>
  </div>
  <div class="form-group pb-3 pt-2">

    <input type="file" class="form-control-file" name="imagem" id="imagem">
  </div>
  <button type="submit" class="btn btn-cancelar">Cancelar</button>
  <button type="submit" class="btn btn-cadastrar">Cadastrar</button>
</form>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>