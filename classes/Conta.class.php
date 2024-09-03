<?php
class Conta
{
    // Criar variáveis PHP que serão os atributos
    // Atentar que a primeira letra é maiuscula
    var $Agencia;
    var $Codigo;
    var $DataDeCriacao;
    var $Titular;
    var $Senha;
    var $Saldo;
    var $Cancelado;

    /* 
        Método Construtor
        Executa automaticamente no instanciamento de um objeto. Define o comprtamento inicial de um objeto.
    */
    function __construct($Agencia, $Codigo, $DataDeCriacao, $Titular, $Senha, $Saldo, $Cancelado)
    {
        $this->Agencia = $Agencia;
        $this->Codigo = $Codigo;
        $this->DataDeCriacao = $DataDeCriacao;
        $this->Titular = $Titular;
        $this->Senha = $Senha;
        $this->Saldo = $Saldo;
        $this->Cancelado = $Cancelado;
    }

    /*  
        Método Retirar: diminui o saldo da conta
        Atentar que o método é uma função que recebe parametros e pode ou não retornar resultado. 
        Métodos que modificam o estado de um objeto (como Retirar e Depositar) não necessariamente precisam retornar algo, pois a operação se completa ao alterar o objeto.
        Métodos que fornecem um valor ou informação (como ObterSaldo) precisam de return para enviar o valor de volta para quem solicitou, permitindo que o programa utilize esse dado em outros contextos. 
    */
    function Retirar($quantia)
    {
        if ($quantia > 0) {
            $this->Saldo -= $quantia;
        }
    }

    /*  
        Método Depositar: aumenta o saldo da conta
    */
    function Depositar($quantia)
    {
        $this->Saldo += $quantia;
    }

    /*  
        Método Obter Saldo: retorna o saldo atual
    */
    function ObterSaldo()
    {
        return $this->Saldo;
    }

    /* 
        Método Destrutor
        Finaliza o objeto
    */
    function __destruct()
    {
        echo "Objeto Conta de {$this->Titular} finalizada... <br>";
    }
}
