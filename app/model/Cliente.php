<?php

class Cliente {

    private $id;
    private $razaoSocial;
    private $cnpj;
    private $nmrCtt;
    private $emailCtt;
    private $endereco;
    private $nMaquinas;
    private $temServidor;


public function __construct($id, $razaoSocial, $cnpj, $nmrCtt, $emailCtt, $endereco, $nMaquinas, $temServidor) {

    $this->id = $id;
    $this->razaoSocial = $razaoSocial;
    $this->cnpj = $cnpj;
    $this->nmrCtt = $nmrCtt;
    $this->emailCtt = $emailCtt;
    $this->endereco = $endereco;
    $this->nMaquinas = $nMaquinas;
    $this->temServidor = $temServidor;

    }

    // Getter e Setter para $id
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    // Getter e Setter para $razaoSocial
    public function getRazaoSocial() {
        return $this->razaoSocial;
    }

    public function setRazaoSocial($razaoSocial) {
        $this->razaoSocial = $razaoSocial;
    }

    // Getter e Setter para $cnpj
    public function getCnpj() {
        return $this->cnpj;
    }

    public function setCnpj($cnpj) {
        $this->cnpj = $cnpj;
    }

    // Getter e Setter para $nmrCtt
    public function getNmrCtt() {
        return $this->nmrCtt;
    }

    public function setNmrCtt($nmrCtt) {
        $this->nmrCtt = $nmrCtt;
    }

    // Getter e Setter para $emailCtt
    public function getEmailCtt() {
        return $this->emailCtt;
    }

    public function setEmailCtt($emailCtt) {
        $this->emailCtt = $emailCtt;
    }

    // Getter e Setter para $endereco
    public function getEndereco() {
        return $this->endereco;
    }

    public function setEndereco($endereco) {
        $this->end = $endereco;
    }

    // Getter e Setter para $nMaquinas
    public function getNMaquinas() {
        return $this->nMaquinas;
    }

    public function setNMaquinas($nMaquinas) {
        $this->nMaquinas = $nMaquinas;
    }

    // Getter e Setter para $temServidor
    public function getTemServidor() {
        return $this->temServidor;
    }

    public function setTemServidor($temServidor) {
        $this->temServidor = $temServidor;
    }
}



?>