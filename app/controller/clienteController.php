<?php

class clienteController {

    public static function cadastrarCliente ($razaoSocial, $cnpj, $nmrCtt, $emailCtt, $endereco, $nMaquinas, $temServidor){
    include_once "../model/Cliente.php";
    $model = new Cliente (null, $razaoSocial, $cnpj, $nmrCtt, $emailCtt, $endereco, $nMaquinas, $temServidor );
    $model->cadastrarCliente($model);
    }

    public static function listarCliente () {
        include_once "../model/Cliente.php";
        $model = new Cliente (null, null, null, null, null, null, null, null);
        return $model->listarCliente();
    }

    public static function resgataCliente($id) {
        include_once "../model/Cliente.php";
        $model = new Cliente (null, null, null, null, null, null, null, null);
        return $model->resgataCliente($id);
    }

    public static function alteraCliente($razaoSocial, $cnpj, $nmrCtt, $emailCtt, $endereco, $nMaquinas, $temServidor) {
        include_once "../model/Cliente.php";
        $model = new Cliente (null, $razaoSocial, $cnpj, $nmrCtt, $emailCtt, $endereco, $nMaquinas, $temServidor);
        $model->alteraCliente($model);
    }

    public static function excluirCliente($id) {
        include_once "../model/Cliente.php";
        $model = new Cliente(null, null, null, null, null, null, null, null);
        $model->excluirCliente($id);
    }

    
}

?>