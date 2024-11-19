<?php

require_once('./class/Player.php');
require_once('./class/Inventario.php');
require_once('./class/Item.php');
require_once('./class/Ataque.php');
require_once('./class/Defesa.php');
require_once('./class/Magia.php');

$item1 = new Ataque('Espada Longa', 7, 'Ataque');
echo "{$item1->getName()} - Tamanho: {$item1->getTamanho()} - Classe do item: {$item1->getClasse()} <br>";
$item2 = new Defesa('Armadura de couro', 4, 'Defesa');
echo "{$item2->getName()} - Tamanho: {$item2->getTamanho()} - Classe do item: {$item2->getClasse()} <br>";
$item3 = new Magia('Grimório', 2, 'Magia');
echo "{$item3->getName()} - Tamanho: {$item3->getTamanho()} - Classe do item: {$item3->getClasse()} <br>";