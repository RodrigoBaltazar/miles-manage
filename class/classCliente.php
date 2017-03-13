<?php

class cliente {

  private id;
  private nome;
  private data_nascimento;
  private cpf;
  private endereco;
  private complemento;
  private bairro;
  private cep;
  private cidade;
  private telefone;
  private celular;
  private saldo;
  private email;

}

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getNome(){
      return $this->nome;
    }
    public function setNome($nome){
      $this->nome = $nome;
    }
    public function getData_nascimento(){
      return $this->data_nascimento;
    }
    public function setData_nascimento($data_nascimento){
      $this->data_nascimento = $data_nascimento;
    }
    public function getCpf(){
      return $this->cpf;
    }
    public function setCpf($cpf){
      $this->cpf = $cpf;
    }

    public function getEndereco(){
      return $this->endereco;
    }
    public function setEndereco($endereco){
      $this->endereco = $endereco;
    }

    public function getComplemento(){
      return $this->complemento;
    }
    public function setComplemento($complemento){
      $this->complemento = $complemento;
    }
    public function getBairro(){
      return $this->bairro;
    }
    public function setBairro($bairro){
      $this->bairro = $bairro;
    }

    public function getCep(){
      return $this->cep;
    }
    public function setCep($cep){
      $this->cep = $cep;
    }
    public function getCidade(){
      return $this->cidade;
    }
    public function setCidade($cidade){
      $this->cep = $cidade;
    }
    public function getTelefone(){
      return $this->telefone;
    }
    public function setTelefone($telefone){
      $this->cep = $telefone;
    }
    public function getCelular(){
      return $this->celular;
    }
    public function setCelular($celular){
      $this->cep = $celular;
    }
    public function getSaldo(){
      return $this->saldo;
    }
    public function setSaldo($saldo){
      $this->cep = $saldo;
    }
    public function getEmail(){
      return $this->email;
    }
    public function setEmail($email){
      $this->cep = $email;
    }


 ?>
