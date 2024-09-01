<?php
class Pessoa
{
    var $Codigo;
    var $Nome;
    var $Altura;
    var $Idade;
    var $Nascimento;
    var $Escolaridade;
    var $Salario;

    /*  Método Crescer
        aumenta a altura em $centímetros
    */
    function Crescer($centimetros)
    {
        if ($centimetros > 0) {
            $this->Altura += $centimetros;
        }
    }

    /*  Método Formar
        altera a Escolaridade para $titulacao
    */
    function Formar($titulacao)
    {
        $this->Escolaridade = $titulacao;
    }

    /*  Método Envelhecer
        aumenta a idade em $anos
    */
    function Envelhecer($anos)
    {
        if ($anos > 0) {
            $this->Idade += $anos;
        }
    }
}
