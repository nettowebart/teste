<?php
namespace App\Model\Repository;
// var_dump($_SERVER);die;

use App\Model\Persistence\ConnectionFactory;
use PDO;
use PDOException;

class FilmeRepository{
    
    protected $connection;
    
    function __construct() {
        $this->conexaoComBanco();
    }

    
    private function conexaoComBanco() {
        $this->connection = ConnectionFactory::createConnection();
        
    }
    
    public function getFilmes() {
        
       $rs = $this->connection->query("SELECT * FROM filmes");
       return $rs->fetchAll(PDO::FETCH_ASSOC);

    }
    
    public function insert($nome, $genero, $dataLancamento, $valor, $imagem) {
        // echo 'tamo ai na foto'; var_dump($imagem);die;
        $sstt = $this->connection->prepare("INSERT INTO filmes(nome, genero, dataLancamento, valor, imagem) VALUES(?,?,?,?,?)");
        $sstt->bindParam(1, $nome);
        $sstt->bindParam(2, $genero);
        $sstt->bindParam(3, $dataLancamento);
        $sstt->bindParam(4, $valor);
        $sstt->bindParam(5, $imagem);
        
        $success = $sstt->execute();
        
        return $success;
    }
    
    public function delete($id) {
        $stmt = $this->connection->prepare("DELETE FROM filmes WHERE id = ?");
        $stmt->bindParam(1, $id);
        
        $success = $stmt->execute();

        return $success;
    }
    
    public function update($id, $nome, $genero, $dataLancamento, $valor, $imagem) {
        
        $stmt = $this->connection->prepare("UPDATE filmes SET nome = ?, genero = ?, dataLancamento = ?, valor = ?, imagem = ? WHERE id = ?");
        $stmt->bindParam(1,$nome );
        $stmt->bindParam(2,$genero);
        $stmt->bindParam(3,$dataLancamento);
        $stmt->bindParam(4,$valor);
        $stmt->bindParam(5,$imagem);
        $stmt->bindParam(6,$id);
        // echo 'asui';var_dump($id);die;
        $success = $stmt->execute();

        return $success;
    }

    public function searchForId($id){
        $rs = $this->connection->query("SELECT id, nome, genero, dataLancamento, valor, imagem FROM filmes WHERE id = ". $id);
        return $rs->fetch(PDO::FETCH_ASSOC);
        
    }

    public function searchForName($nome){
        // echo 'asas';var_dump($nome);die;
        $rs = $this->connection->prepare("SELECT id, nome, genero, dataLancamento, valor, imagem FROM filmes WHERE nome LIKE ?");
        $rs->bindParam(1, $nome);
        if($rs->execute()){
            $row = $rs->fetch(PDO::FETCH_OBJ);
            return $row;
        } else{
            return 'Não encontrado dados para esse nome : '.$nome;
        }
    }
}