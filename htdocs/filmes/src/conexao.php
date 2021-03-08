<?php

namespace App;

//var_dump($_POST);die;

class Conexao{

    private static $conexao;

    public function __construct(){

    }

    public static function getInstance(){

//        self::$conexao = new \PDO('mysql:host=localhost;port=3306;dbname=locadora', 'root', 'toor');
//        self::$conexao->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
//        self::$conexao->exec('set names utf8');

        try {
    $conn = new PDO('mysql:host=db;dbname=locadora', 'root', 'toor');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
//Buscar ou fazer Query
    $data = $conn->query('SELECT * FROM filmes ');
    foreach($data as $row) {
        print_r($row);
    }
    
//Inserção no banco completa
    $obFilme = new Filmes('eita', 'novela', '1990-01-01 00:00:00', 9.4);
     $sqlInsert = "INSERT INTO filmes (nome, genero, dataLancamento, valor) VALUES('{$obFilme->nome}', '{$obFilme->genero}', '{$obFilme->dataLancamento}',{$obFilme->valor});";
     
//busca por id
///Buscar ou fazer Query em id
//     $id = 6;
    $data = $conn->query('SELECT * FROM filmes WHERE id = '.$id);
    $statement = $data->fetch(PDO::FETCH_ASSOC);
////    var_dump($statement);die;
//    
// Deletar dados da Query
    $stmt = $conn->prepare("DELETE FROM filmes WHERE id= ?");
    $stmt->bindParam(1, $id);
////    var_dump($stmt);die;
    
//Update dados da Query por Id
     $id = 8;
     $nome = 'Blue Valentines';
     $dataLanc = '1990-01-01 00:00:00';
     $genero = 'romance';
     $valor = 8.5;
    $stmt = $conn->prepare("UPDATE filmes SET nome = ?, genero = ?, dataLancamento = ?, valor = ? WHERE id = ?");
    $stmt->bindParam(1,$nome );
    $stmt->bindParam(2,$genero);
    $stmt->bindParam(3,$dataLanc);
    $stmt->bindParam(4,$valor);
    $stmt->bindParam(5,$id);
    
//    var_dump($stmt);die;
    $stmt->execute();
    
//     $conn->exec($data);
//     print_r($conn);die;
//    var_dump($conn->exec($data));die;
    
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}


    }
    

}

