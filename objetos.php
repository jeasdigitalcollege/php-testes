<?php
# Carrega as classes
include_once 'classes/Pessoa.class.php';
include_once 'classes/Conta.class.php';
include_once 'classes/Cliente.class.php';

# Criação do objeto $carlos
$carlos = new Pessoa;
# Atruibuição de Valores aos Atributos da Classe
$carlos->Codigo = 10;
$carlos->Nome = "Carlos Siqueira";
$carlos->Altura = 1.85;
$carlos->Idade = 28;
$carlos->Nascimento = "10/04/1976";
$carlos->Escolaridade = "Ensino Médio";

# Manipulando o Objeto Carlos
echo "Manipulando o objeto {$carlos->Nome}: <br>";

echo "{$carlos->Nome} é formado em: {$carlos->Escolaridade} <br>";
$carlos->Formar("Técnico em Eletricidade");
echo "{$carlos->Nome} é formado em: {$carlos->Escolaridade} <br>";

echo "{$carlos->Nome} tem {$carlos->Idade} anos <br>";
$carlos->Envelhecer(1);
echo "{$carlos->Nome} tem agora {$carlos->Idade} anos <br><br>";

# Criação do objeto $contaCarlos
$contaCarlos = new Conta;
# Atruibuição de Valores aos Atributos da Classe
$contaCarlos->Agencia = "Centro";
$contaCarlos->Codigo = "0016";
$contaCarlos->DataDeCriacao = "01/09/2024";
$contaCarlos->Titular = $carlos->Nome;
$contaCarlos->Senha = "xkpt";
$contaCarlos->Saldo = 1000.00;
$contaCarlos->Cancelado = false;

echo "Cliente: {$carlos->Nome} <br>";
echo "Saldo Atual: {$contaCarlos->Saldo} <br>";

$valor = 100.05;
echo "Depósito: {$valor} <br>";
$contaCarlos->Depositar($valor);
echo "Saldo Atual: {$contaCarlos->ObterSaldo()} <br><br>";

# Criação do objeto $clienteJorge
$clienteJorge = new Cliente;
# Atruibuição de Valores aos Atributos da Classe
$clienteJorge->Nome = "Jorge Eduardo";
$clienteJorge->CPF = "104.853.093-00";
$clienteJorge->Email = "jeas@outlook.com";
$clienteJorge->Telefone = "(85) 9.8818-5327";
$clienteJorge->Idade = 67;

// Mostra Atributo da Classe
echo "Cliente: {$clienteJorge->Nome} <br>";

// Atualiza atributo de Idade da Classe
$clienteJorge->AtualizarIdade(1);

// Mostra novo valor de Idade da Classe
echo "Nova Idade: {$clienteJorge->Idade} <br><br>";
