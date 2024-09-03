<?php
# Carrega as classes
include_once 'classes/Pessoa.class.php';
include_once 'classes/Conta.class.php';

# Criação do objeto $Carlos
$carlos = new Pessoa(10, "Carlos da Silva", 1.85, 28, "10/04/1976", "Ensino Médio", 650.00);

# Manipulando o Objeto Carlos
echo "Manipulando o objeto {$carlos->Nome}: <br>";

echo "{$carlos->Nome} é formado em: {$carlos->Escolaridade} <br>";
$carlos->Formar("Técnico em Eletricidade");
echo "{$carlos->Nome} é formado em: {$carlos->Escolaridade} <br>";

echo "{$carlos->Nome} tem {$carlos->Idade} anos <br>";
$carlos->Envelhecer(1);
echo "{$carlos->Nome} tem agora {$carlos->Idade} anos <br><br>";

# Criação do objeto $carlos
$conta_jorge = new Conta(0016, "3916-0", "10/04/2024", "Jorge Eduardo", "xkpt", 650.00, false);

# Manipulando o Objeto Conta_Carlos
echo "Manipulando o objeto conta_{$conta_jorge->Codigo} de {$conta_jorge->Titular} <br>";
