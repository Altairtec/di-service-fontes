<?php

namespace SON;

class Conexao implements ConexaoInteface {

    private $host;
    private $dbname;
    private $user;
    private $password;

    public function __construct($host, $dbname, $user, $password) {
        $this->host = $host;
        $this->dbname = $dbname;
        $this->user = $user;
        $this->password = $password;
    }

    public function connect() {
        try {
            return new \PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->user, $this->password);
         } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
            exit;
        }
    }

}
