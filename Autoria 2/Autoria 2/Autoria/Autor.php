<?php
include_once 'Conectar.php';

class Autor{
    private $id;
    private $NomeAutor;
    private $SobreNome;
    private $email;
    private $nascAuto;
    private $conn;
    
    public function getCodigo(){
        return $this->id;
    }

    public function setCodigo($idd){
        $this->id = $idd;
    }

    public function getNome(){
        return $this->NomeAutor;
    }

    public function setNome($NomeAutorr){
        $this->NomeAutor = $NomeAutorr;
    }

    public function getSobrenome(){
        return $this->  SobreNome;
    }

    public function setSobrenome($SobreNNome){
        $this->SobreNome = $SobreNNome;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($emaill){
        $this->email = $emaill;
    }

    public function getNasc(){
        return $this->nascAuto;
    }

    public function setNasc($nascc){
        $this->nascAuto = $nascc;
    }

    function salvar()
    {
        try
        {
            $this-> conn = new Conectar();
            $sql = $this->conn->prepare("insert into autor values (?,?,?,?,?)");
            @$sql-> bindParam(1, $this->getCodigo(), PDO::PARAM_STR);
            @$sql-> bindParam(2, $this->getNome(), PDO::PARAM_STR);
            @$sql-> bindParam(3, $this->getSobrenome(), PDO::PARAM_STR);
            @$sql-> bindParam(4, $this->getEmail(), PDO::PARAM_STR);
            @$sql-> bindParam(5, $this->getNasc(), PDO::PARAM_STR);
            if($sql->execute() == 1)
            {
                return "Registro salvo com sucesso!";
            }
            $this->conn = null;
        }
        catch(PDOException $exc)
        {
            echo "Erro ao salvar o registro. " . $exc->getMessage();
        }
    }

    function alterar() 
    {
        try
        {
            $this-> conn = new Conectar();
            $sql = $this->conn->prepare("Select * from autor where Cod_autor = ?");
            @$sql-> bindParam(1, $this->getCodigo(), PDO::PARAM_STR); 
            $sql->execute();
            return $sql->fetchAll ();
            $this->conn = null;
        }
        catch(PDOExeception $exc)
        {
            echo "Erro ao alterar. " . $exc->getMessage();
        }
    }

    function alterar2()
    {
        try
        {
            $this-> conn = new Conectar();
            $sql = $this->conn->prepare("update autor set NomeAutor = ?, Sobrenome = ?, Email = ?, Nasc = ? where Cod_Autor = ?");
            @$sql-> bindParam(1, $this->getNome(), PDO::PARAM_STR);
            @$sql-> bindParam(2, $this->getSobrenome(), PDO::PARAM_STR);
            @$sql-> bindParam(3, $this->getEmail(), PDO::PARAM_STR);
            @$sql-> bindParam(4, $this->getNasc(), PDO::PARAM_STR);
            @$sql-> bindParam(5, $this->getCodigo(), PDO::PARAM_STR);
            if($sql->execute() == 3) 
            {
                return "registro alterado com sucesso!";
            }
            $this->conn = null;
        }
        catch(PDOException $exc)
        {
            echo "Erro ao salvar o registro. " . $exc->getMessage();
        }
    }

    function consultar()
    {
        try
        {
            $this-> conn = new Conectar();
            $sql = $this->conn->prepare("Select * from autor where NomeAutor like ?");
            @$sql-> bindParam(1, $this->getNome(), PDO::PARAM_STR); 
            $sql->execute();
            return $sql->fetchAll ();
            $this->conn = null;
        }
        catch(PDOExeception $exc)
        {
            echo "Erro a consulta" . $exc->getMessage();
        }
    }

    function exclusao()
    {
        try
        {
            $this-> conn = new Conectar();
            $sql = $this->conn->prepare("delete from Autor where Cod_autor = ?");
            @$sql-> bindParam(1, $this->getCodigo(), PDO::PARAM_STR);
            if($sql->execute() == 1) 
            {
                return "Excluido com sucesso!";
            }
            $this->conn = null;
        }
        catch(PDOException $exc)
        {
            echo "Erro ao excluir. " . $exc->getMessage();
        }
    }
    function listar(){
        try{
            $this-> conn = new Conectar();
            $sql = $this ->conn->query("select * from autor order by Cod_autor");
            $sql->execute();
            return $sql->fetchAll();
            $this->conn = null;
        }

        catch(PDOException $exc){
            echo "Erro ao executar consulta. " . $exc->getMessage();
        }
    }
}
?>