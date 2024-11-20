<?php

require_once('./class/Player.php');
require_once('./class/Inventario.php');
require_once('./class/Item.php');
require_once('./class/Ataque.php');
require_once('./class/Defesa.php');
require_once('./class/Magia.php');

$item1 = new Ataque('Espada Longa', 7, 'Ataque');
//echo "{$item1->getName()} - Tamanho: {$item1->getTamanho()} - Classe do item: {$item1->getClasse()} <br>";
$item2 = new Defesa('Armadura de couro', 4, 'Defesa');
//echo "{$item2->getName()} - Tamanho: {$item2->getTamanho()} - Classe do item: {$item2->getClasse()} <br>";
$item3 = new Magia('Grimório', 2, 'Magia');
//echo "{$item3->getName()} - Tamanho: {$item3->getTamanho()} - Classe do item: {$item3->getClasse()} <br>";
$item4 = new Ataque('Machado de batalha', 7, 'Ataque');
$item5 = new Defesa('Escudo', 4, 'Defesa');
$item6 = new Magia('Poção de vida', 2, 'Magia');

$inventario = new Inventario(20);
$inventario->capacidadeLivre();



$player1 = new Player ("Teste", 1, $inventario);
$player1->coletarItem($item1);
$player1->coletarItem($item2);
$player1->coletarItem($item3);
$player1->coletarItem($item4);
$player1->coletarItem($item5);
$player1->coletarItem($item6);
$inventario->capacidadeLivre();
$player1->soltarItem($item4);
$inventario->capacidadeLivre();

$player1->subirNivel();

$inventario->capacidadeLivre();