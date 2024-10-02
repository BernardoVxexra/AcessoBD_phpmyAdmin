<?php
include_once 'Conectar.php';


class livro
{
    private $Categoria;
    private $Cod_livro;
    private $Idioma;
    private $ISBN;
    private $QtdePag;
    private $Titulo;

    // Getters e Setters
    public function getCategoria() {
        return $this->Categoria;
    }

    public function setCategoria($CCategoria) {
        $this->Categoria = $CCategoria;
    }

    public function getCod_livro() {
        return $this->Cod_livro;
    }

    public function setCod_livro($Codd_livro) {
        $this->Cod_livro = $Codd_livro;
    }

    public function getIdioma() {
        return $this->Idioma;
    }

    public function setIdioma($IIdioma) {
        $this->Idioma = $IIdioma;
    }

    public function getISBN() {
        return $this->ISBN;
    }

    public function setISBN($ISBNN) {
        $this->ISBN = $ISBNN;
    }

    public function getQtdePag() {
        return $this->QtdePag;
    }

    public function setQtdePag($QtdePPag) {
        $this->QtdePag = $QtdePPag;
    }

    public function getTitulo() {
        return $this->Titulo;
    }

    public function setTitulo($Tituloo) {
        $this->Titulo = $Tituloo;
    }
    

    function salvar()
    {
        try
        {
            $this-> conn = new Conectar();
            $sql = $this->conn->prepare("insert into livro values (null,?,?,?,?,?)");
            @$sql-> bindParam(1,$this->getTitulo(),PDO::PARAM_STR);
            @$sql-> bindParam(2,$this->getCategoria(), PDO::PARAM_STR);
            @$sql-> bindParam(3,$this->getISBN(),PDO::PARAM_STR);
            @$sql-> bindParam(4,$this->getIdioma(), PDO::PARAM_STR);
            @$sql-> bindParam(5,$this->getQtdePag(),PDO::PARAM_STR);
            
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
            $sql = $this->conn->prepare("Select * from produto where id = ?");
            @$sql-> bindParam(1, $this->getId(), PDO::PARAM_STR); 
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
            $sql = $this->conn->prepare("update produto set nome = ?, estoque = ? where id = ?");
            @$sql-> bindParam(1, $this->getNome(), PDO::PARAM_STR);
            @$sql-> bindParam(2, $this->getEstoque(), PDO::PARAM_STR);
            @$sql-> bindParam(3, $this->getId(), PDO::PARAM_STR);
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
            $sql = $this->conn->prepare("Select * from livro where Titulo like ?");
            @$sql-> bindParam(1, $this->getTitulo(), PDO::PARAM_STR); 
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
            $sql = $this->conn->prepare("delete from livro where Cod_livro = ?");
            @$sql-> bindParam(1, $this->getCod_livro(), PDO::PARAM_STR);
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

    function listar()
    {
        try
        {
            $this->conn = new conectar();
            $sql = $this->conn->prepare("Select * from livro order by Idioma");
            $sql->execute();
            return $sql->fetchAll();
            $this->conn = null;
        }
        catch (PDOException $exc) {
            echo "Erro ao listar livros: " . $exc->getMessage();
        }
    }
}
?>