<?php

namespace SON;

class Cliente {

    private $db;

    public function __construct(ConexaoInteface $conexao) {
        $this->db = $conexao->connect();
    }

    public function listar() {
        $query = "SELECT * FROM clientes";
        $stmt = $this->db->prepare($query);
        $result = $stmt->execute();
        
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

}
