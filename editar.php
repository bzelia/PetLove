<?php
    require('conexao.php');

    mysqli_query($conexao, "UPDATE produtos 
        SET descricao = '$descricao', marca = '$marca', estoque = '$estoque', preco = '$preco', imagem = '$imagem' 
        WHERE id = $id");
?>