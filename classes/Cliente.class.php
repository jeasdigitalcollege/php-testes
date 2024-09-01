<?php
class Cliente
{
    var $Nome;
    var $CPF;
    var $Email;
    var $Telefone;
    var $Idade;

    /* Método Consultar Cliente */
    function ConsultarCliente()
    {
        return $this->Nome;
    }

    /* Método Consultar Cliente */
    function AtualizarIdade($ano)
    {
        if ($ano > 0) {
            $this->Idade += $ano;
        }
    }
}
