<?php

class Produto {
    public $id;
    public $descricao;
    protected $marca;
    private $estoque;
    private $preco;

    public function __construct(){}

    public function novoProduto($id, $descricao, $marca, $estoque, $preco)
    {
        $this->id = $id;
        $this->descricao = $descricao;
        $this->marca = $marca;
        $this->estoque = $estoque;
        $this->preco = $preco;
    }

    public function exibeProduto()
    {
        echo '<p>'.$this->id.'</p>';
        echo '<p>'.$this->descricao.'</p>';
        echo '<p>'.$this->marca.'</p>';
        echo '<p>'.$this->estoque.'</p>';
        echo '<p>'.$this->preco.'</p>';
    }
}

?>

