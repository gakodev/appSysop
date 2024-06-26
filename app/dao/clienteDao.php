<?php

class clienteDao {

    public static function cadastrarCliente (Cliente $cliente) {

    include_once 'conexao.php';

    $conex = new Conexao();
    $conex->fazConexao();
    $sql = "INSERT INTO cliente (razaoSocial, cnpj, nmrCtt, emailCtt, endereco, nMaquinas, temServidor)
    VALUES (:razaoSocial, :cnpj, :nmrCtt, :emailCtt, :endereco, :nMaquinas, :temServidor)";

    $stmt = $conex->conn->prepare($sql);

    $stmt->bindValue(':razaoSocial', $cliente->getRazaoSocial());
    $stmt->bindValue(':cnpj', $cliente->getCnpj());
    $stmt->bindValue(':nmrCtt', $cliente->getNmrCtt());
    $stmt->bindValue(':emailCtt', $cliente->getEmailCtt());
    $stmt->bindValue(':endereco', $cliente->getEndereco());
    $stmt->bindValue(':nMaquinas', $cliente->getNMaquinas());
    $stmt->bindValue(':temServidor', $cliente->getTemServidor());

    $res = $stmt->execute();

        if ($res) {
        //echo '<script>alert("Cadastro realizado!")</script>';
    } else {
    echo '<script>alert("Erro!")</script>';
    }
    echo '<script>location.href="../../index.html"</script>';
    }

    public function listarClientes() { 
        include_once 'conexao.php';

        $conex = new Conexao();
        $conex->fazConexao();
        $sql = 'SELECT * FROM cliente ORDER BY id';
        return $conex->conn->query($sql);  
    }

     public function resgataCliente($id){
        include_once 'conexao.php';
        
        $conex = new Conexao();
        $conex->fazConexao();
        $sql = "SELECT * FROM cliente WHERE id = '$id'";
        return $conex->conn->query($sql);
    }

    public function alterarCliente(Cliente $cliente) {
        include_once 'conexao.php';
        
        $conex = new Conexao();
        $conex->fazConexao();
        $sql = "UPDATE cliente SET razaoSocial, cnpj, nmrCtt, emailCtt, endereco, nMaquinas, temServidor
        VALUES (:razaoSocial, :cnpj, :nmrCtt, :emailCtt, :endereco, :nMaquinas, :temServidor) WHERE id = :id";


    $stmt->bindValue(':id', $cliente->getId());
    $stmt->bindValue(':razaoSocial', $cliente->getRazaoSocial());
    $stmt->bindValue(':cnpj', $cliente->getCnpj());
    $stmt->bindValue(':nmrCtt', $cliente->getNmrCtt());
    $stmt->bindValue(':emailCtt', $cliente->getEmailCtt());
    $stmt->bindValue(':endereco', $cliente->getEndereco());
    $stmt->bindValue(':nMaquinas', $cliente->getNMaquinas());
    $stmt->bindValue(':temServidor', $cliente->getTemServidor());

    $res = $stmt->execute();

    if ($res) {
        echo '<script>alert("Alteração concluída!")</script>';
        } else {
        echo '<script>alert("Erro!")</script>';
    }
    echo '<script>location.href="../controller/processa.php?op=listarCliente"</script>';
    // ALTERAR ESSA LINHA !!!
    }

    public function excluirCliente($id){
        include_once 'conexao.php';

        $conex = new Conexao();
        $conex->fazConexao();
        $sql = "DELETE FROM cliente WHERE id = '$id'";

        $res = $conex->conn->query($sql);

            if ($res) {
                echo '<script>alert("Exclusão concluída!")</script>';
            } else {
                echo '<script>alert("Erro!")</script>';
            }
            echo '<script>location.href="../controller/processa.php?op=listarCliente"</script>';
            // ALTERAR ESSA LINHA !!!
            }

    }






?>