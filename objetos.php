<?php

// Arquivo: objetos.php

# Carrega as classes
include_once 'classes/Pessoa.class.php';
include_once 'classes/Conta.class.php';

# Criação do objeto $jorge
$jorge = new Pessoa(10, "Jorge Siqueira", 1.78, 67, "18/09/1956", "Engenharia Mecânica", 10000.00);

# Manipulando o Objeto Jorge
echo "Manipulando o objeto {$jorge->Nome}: <br>";

echo "{$jorge->Nome} é formado em {$jorge->Escolaridade} <br>";

echo "{$jorge->Nome} tem {$jorge->Idade} anos <br>";
$jorge->Envelhecer(1);
echo "{$jorge->Nome} faz {$jorge->Idade} anos agora em Setembro <br><br>";

# Criação do objeto $jorge
$conta_jorge = new Conta(16, "3916-0", "10/04/2024", "Jorge Eduardo", "xkpt", 20000, false);

# Manipulando o Objeto Conta_Jorge
echo "Manipulando a Conta de {$conta_jorge->Titular} <br>";
echo "A conta de {$conta_jorge->Titular} está na Agência {$conta_jorge->Agencia} <br>";
echo "A conta corrente de {$conta_jorge->Titular} tem o número {$conta_jorge->Codigo} <br>";

echo "O saldo inicial da conta de {$conta_jorge->Titular} é de R$ {$conta_jorge->Saldo} <br>";

$deposito = 100.00;
$saldo = $conta_jorge->Depositar($deposito);
echo "Foi feito um depósito de R$ {$deposito}. Saldo atual: R$ {$conta_jorge->Saldo} <br>";

$retirada = 500.00;
$saldo = $conta_jorge->Retirar($retirada);
echo "Foi feito uma retirada de R$ {$retirada}. Saldo atual: R$ {$conta_jorge->Saldo} <br>";


echo "<br>";
