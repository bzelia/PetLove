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

      /* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
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
  <button  type="submit" class="btn  new-p" ><span class="material-icons pr-1">
  add
  </span>
  Novo Produto</button>

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
  </thead>
  <tbody class="produtos w-100">

    <tr >
      <td  style="text-align: center" >  <img src="img/jardineira_pet_sullivan_monstros_s_a_femea_2017_1_e09beea2e2917c0a785596a93147a2bc.webp" height="auto" class="card-img-top" alt="...">
   </td>
   <td  >#43</td>
      <td >Jardineira Pet Sullivan Monstros S.A. Fêmea</td>
 
      <td >PETLOVE</td>
      <td >12</td>
      <td >R$ 460,00</td>
      <td > <button type="submit" class="btn btn-editar">Editar</button></td>
      <td ><button type="submit" class="btn btn-excluir popup">Excluir</button>

</script>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>