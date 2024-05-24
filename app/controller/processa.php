<?php

switch($_REQUEST["op"]){
    case "cadastrarCliente":
        cadastrarCliente();break;
    case "alterarCliente":
        alterarCliente();break;
    case "excluirCliente":
        excluirCliente();break;
    case "listarCliente":
        listarCliente();break;
}

function cadastrarCliente() {

    $razaoSocial = $_POST["razaoSocial"];
    $cnpj = $_POST["cnpj"];
    $nmrCtt = $_POST["nmrCtt"];
    $emailCtt = $_POST["emailCtt"];
    $endereco = $_POST["endereco"];
    $nMaquinas = $_POST["nMaquinas"];
    $temServidor = $_POST["temServidor"];

    include_once 'clienteController.php';
    $cntrl = new clienteController();
    $cntrl->cadastrarCliente($razaoSocial, $cnpj, $nmrCtt, $emailCtt, $endereco, $nMaquinas, $temServidor);
}

function alteraCliente() {

    $razaoSocial = $_POST["razaoSocial"];
    $cnpj = $_POST["cnpj"];
    $nmrCtt = $_POST["nmrCtt"];
    $emailCtt = $_POST["emailCtt"];
    $endereco = $_POST["endereco"];
    $nMaquinas = $_POST["nMaquinas"];
    $temServidor = $_POST["temServidor"];

    include_once 'clienteController.php';
    $cntrl = new clienteController();
    $cntrl->alteraCliente($razaoSocial, $cnpj, $nmrCtt, $emailCtt, $endereco, $nMaquinas, $temServidor);
}

function excluirCliente (){
    $id = $_REQUEST["id"];
    include_once 'clienteController.php';
    $cntrl = new clienteController();
    $cntrl->excluirCliente($id);
}
function listarCliente () {
    echo '<script>location.href="../index.html"</script>';
}



?>