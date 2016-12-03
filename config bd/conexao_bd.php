<?php

class conexao_bd
{
    private $conn;

    public function __construct()
    {
        $servidor = "127.0.0.1";
        $usuario = "root";
        $senha = "";
        $banco = "hackathon";
        $this->conn = new mysqli($servidor, $usuario, $senha, $banco);
    }

    public function query($q)
    {
        return $this->conn->query($q);
    }

}
