<?php

namespace App\Model;

//entity
Class Filmes {

    /**
     * @var integer
     */
    public $id;

    /**
     * @var string
     */
    public $nome;

    /**
     * @var string
     */
    public $genero;

    /**
     * @var string
     */
    public $dataLancamento;

    /**
     * @var float
     */
    public $valor;
    
   function __construct(string $nome, string $genero, string $dataLancamento, float $valor) {
       $this->nome = $nome;
       $this->genero = $genero;
       $this->dataLancamento = $dataLancamento;
       $this->valor = $valor;
   }

    function getId(): integer {
        return $this->id;
    }

    function getNome(): string {
        return $this->nome;
    }

    function getGenero(): string {
        return $this->genero;
    }

    function getDataLancamento(): string {
        return $this->dataLancamento;
    }

    function getValor(): float {
        return $this->valor;
    }

    function setId(integer $id): void {
        $this->id = $id;
    }

    function setNome(string $nome): void {
        $this->nome = $nome;
    }

    function setGenero(string $genero): void {
        $this->genero = $genero;
    }

    function setDataLancamento(string $dataLancamento): void {
        $this->dataLancamento = $dataLancamento;
    }

    function setValor(float $valor): void {
        $this->valor = $valor;
    }
    
}