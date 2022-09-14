<?php

class Database {
    private $endereco = 'localhost';
    private $usuario  = 'root';
    private $senha    = '';
    private $base     = 'unicv_web';
    public  $conexao;

    public function __construct()
    {
        $this->conexao = mysqli_connect($this->endereco, $this->usuario, $this->senha, $this->base);
    }

    public function select($tabela) 
    {
        $sql = "SELECT * FROM $tabela";
        return mysqli_query($this->conexao, $sql);
    }

    public function delete($tabela, $id)
    {
        $sql = "DELETE FROM $tabela WHERE id = $id";
        return mysqli_query($this->conexao, $sql);
    }
}

?>