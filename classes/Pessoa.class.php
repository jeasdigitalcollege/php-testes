<?php

// Define a Classe Pessoa. 
// Atentar que a primeira letra é maiuscula
class Pessoa
{
    // Criar variáveis PHP que serão as propriedades da Classe Pessoa
    // Atentar que a primeira letra é maiuscula
    var $Codigo;
    var $Nome;
    var $Altura;
    var $Idade;
    var $Nascimento;
    var $Escolaridade;
    var $Salario;

    /* 
        Método Construtor
        Executa automaticamente no instanciamento de um objeto. 
        Define o comportamento inicial de um objeto.
    */
    function __construct($Codigo, $Nome, $Altura, $Idade, $Nascimento, $Escolaridade, $Salario)
    {
        $this->Codigo = $Codigo;
        $this->Nome = $Nome;
        $this->Altura = $Altura;
        $this->Idade = $Idade;
        $this->Nascimento = $Nascimento;
        $this->Escolaridade = $Escolaridade;
        $this->Salario = $Salario;
    }

    /*  Método Crescer
        Aumenta a altura em $centímetros
        Atentar que o método é uma função que recebe parametros e pode ou não retornar resultado. 
        Métodos que modificam o estado de um objeto (como Retirar e Depositar) não necessariamente precisam retornar algo, pois a operação se completa ao alterar o objeto.
        Métodos que fornecem um valor ou informação (como ObterSaldo) precisam de return para enviar o valor de volta para quem solicitou, permitindo que o programa utilize esse dado em outros contextos. 
    */
    function Crescer($centimetros)
    {
        if ($centimetros > 0) {
            $this->Altura += $centimetros;
        }
    }

    /*  
        Método Formar
        Altera a Escolaridade para $titulacao
    */
    function Formar($titulacao)
    {
        $this->Escolaridade = $titulacao;
    }

    /*  
        Método Envelhecer
        Aumenta a idade em $anos
    */
    function Envelhecer($anos)
    {
        if ($anos > 0) {
            $this->Idade += $anos;
        }
    }

    /* 
        Método Destrutor
        Finaliza o objeto
    */
    function __destruct()
    {
        echo "Objeto {$this->Nome} finalizado... <br>";
    }
}
