<?php
require_once ('DataBase.php');
class Pessoa{
    public $id; 
    public $email; 
    public $nome; 
    public $telefone; 
    public $foto;

    public function cadastrar(){
        $cx = (new DataBase())->getCx();
        $cmdSql = 'INSERT INTO pessoa(email, nome, telefone, foto) VALUES (:email, :nome, :telefone, :foto)';
        $cx_preparado = $cx->prepare($cmdSql);
        $cx_preparado->bindValue(':email',$this->email);
        $cx_preparado->bindValue(':nome',$this->nome);
        $cx_preparado->bindValue(':telefone',$this->telefone);
        $cx_preparado->bindValue(':foto',$this->foto);
        return $cx_preparado->execute();
    }

    public function listar($filtro=""){
        $cx = (new DataBase())->getCx();
        $cmdSql = 'CALL pessoa_listar(:filtro)';
        $cx_preparado = $cx->prepare($cmdSql);
        $cx_preparado->bindValue(':filtro',$filtro);
        if($cx_preparado->execute()){
            if($cx_preparado->rowCount()){

                $lista_pessoa = $cx_preparado->fetchAll(PDO::FETCH_CLASS, __CLASS__);
                return $lista_pessoa;
            }
        }
        return false;
    }
}