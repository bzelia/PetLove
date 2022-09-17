<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Home PetLove</title>

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
     
       }   
        .table img{
          width: 60%;
         
        }
        .table td {
          width: 15%;
          border: 1px solid #E3BBA9;
          color: #73787E;
      
        }
        .thead-top{
          background-color: #F7E0DA;
        }
        .thead-top th{
          color: #707070;
        }
        tbody{
          background: #fff;
        }
        .btn-editar{
          background-color: #AFABAC;
        }
        .btn-excluir{
          background-color: #BF8A7C;
        }
        header{
        border-bottom: 1px solid  #F7E0DA ;
        }
      .new-p{
        background-color: #F7E0DA;
        padding: 10px 18px;
        color: #707070;
        font-size: .9em;
      }
      .new-p{
        display : flex;
        align-items : center;
        justify-content : center;
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
  <div class="col-md-10 pb-3">
  <h3>Produtos</h3>
  </div>

  <div class="col-md-2 pb-3 text-right">
  <a href="create.php" class="btn  new-p" ><span class="material-icons pr-1">
  add
  </span>
  Novo Produto</a>

</div>
</div>
<table id="list" class="table ">
  <thead class="thead-top">
    <tr>
    <th scope="col">Preview</th>
      <th scope="col">Código</th>
      <th scope="col">Descrição</th>
      <th scope="col">Marca</th>
      <th scope="col">Estoque</th>
      <th scope="col">Preço</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
    <?php
            require('conexao.php');
            $resultado = mysqli_query($conexao, 'SELECT * FROM produtos ORDER BY id ASC');
          ?>

  </thead>
  <tbody class="produtos w-100">
  <?php while($registro = mysqli_fetch_assoc($resultado)): ?>
    <tr >
      <td  style="text-align: center" > </td>
      <td ><?=$registro['id']?></td>
       <td  ><?=$registro['descricao']?></td>
       <td ><?=$registro['marca']?></td>
      <td ><?=$registro['estoque']?></td>
      <td ><?=$registro['preco']?></td>
      <td > <a href="update.php?id=<?=$registro['id']?>"  class="btn btn-editar">Editar</a></td>
      <td ><button class="btn btn-excluir" onclick="excluir()">Excluir</button></td>
      <?php endwhile; ?>


<script>
function excluir()
{
var x;
var r=confirm("Deseja Excluir?");
if (r==true)
  {
  x="você pressionou OK!";
  }
else
  {
  x="Você pressionou Cancelar!";
  }

}
</script>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>