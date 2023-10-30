<?php
require_once ('DataBase.php');
class Produto{
    public $id; 
    public $nome; 
    public $valor; 
    public $descricao; 
    public $quant_est;

    public function cadastrar(){
        $cx = (new DataBase())->getCx();
        $cmdSql = 'CALL produtoCadastrar(:nome, :valor, :descricao, :quant_est);';
        $cx_preparado = $cx->prepare($cmdSql);
        $cx_preparado->bindValue(':nome',$this->nome);
        $cx_preparado->bindValue(':valor',$this->valor);
        $cx_preparado->bindValue(':descricao',$this->descricao);
        $cx_preparado->bindValue(':quant_est',$this->quant_est);
        return $cx_preparado->execute();
    }

    public function listar($filtro=""){
        $cx = (new DataBase())->getCx();
        $cmdSql = 'CALL produtoListar(:filtro)';
        $cx_preparado = $cx->prepare($cmdSql);
        $cx_preparado->bindValue(':filtro',$filtro);
        if($cx_preparado->execute()){
            if($cx_preparado->rowCount()){
                $lista_produto = $cx_preparado->fetchAll(PDO::FETCH_CLASS, __CLASS__);
                return $lista_produto;
            }
        }
        return false;
    }
}