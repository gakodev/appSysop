<?php

    class Conexao {
        private $host = '';
        private $db_name = '';
        private $usermane = '';
        private $password = '';
        private $conn; 

        public function fazConexao() {
            try {
                $this->conn = new PDO ("mysql:host={$this->host};dbname={$this->db_name}",
                $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e){
            echo "Erro de conexão: ".$e->getMessage();
        }
        return $this->conn; 
            }
        }
    




?>