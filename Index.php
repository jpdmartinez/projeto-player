<?php

require_once('./class/Player.php');
require_once('./class/Inventario.php');
require_once('./class/Item.php');
require_once('./class/Ataque.php');
require_once('./class/Defesa.php');
require_once('./class/Magia.php');

//Itens de Ataque

$item1 = new Ataque('Espada Longa', 7, 'Ataque');
$item2 = new Ataque('Machado de batalha', 7, 'Ataque');
$item3 = new Ataque('Espada curta', 7, 'Ataque');
$item4 = new Ataque('Arco e flecha', 7, 'Ataque');
$item5 = new Ataque('Lança', 7, 'Ataque');
$item6 = new Ataque('Adaga afiada', 7, 'Ataque');
$item7 = new Ataque('Clava', 7, 'Ataque');
$item8 = new Ataque('Machado de guerra', 7, 'Ataque');


//Itens de Defesa

$item9 = new Defesa('Armadura de couro', 4, 'Defesa');
$item10 = new Defesa('Escudo', 4, 'Defesa');
$item11 = new Defesa('Armadura de ferro', 4, 'Defesa');
$item12 = new Defesa('Elmo', 4, 'Defesa');
$item13 = new Defesa('Capa mágica', 4, 'Defesa');
$item14 = new Defesa('Escudo de madeira', 4, 'Defesa');
$item15 = new Defesa('Botas resistentes', 4, 'Defesa');
$item16 = new Defesa('Escudo de ferro', 4, 'Defesa');


//Itens de Magia

$item17 = new Magia('Grimório', 2, 'Magia');
$item18 = new Magia('Poção de mana', 2, 'Magia');
$item19 = new Magia('Pergaminho de fogo', 2, 'Magia');
$item20 = new Magia('Elixir de cura', 2, 'Magia');
$item21 = new Magia('Poção de invisibilidade', 2, 'Magia');
$item22 = new Magia('Bastão do mago', 2, 'Magia');
$item23 = new Magia('Orbe de luz', 2, 'Magia');
$item6 = new Magia('Poção de vida', 2, 'Magia');


//Criação de inventários 
$inventarioMago = new Inventario(20);
$inventarioBarbaro = new Inventario(20);
$inventarioBardo = new Inventario(20);
$inventarioRanger = new Inventario(20);

//Criação de personagens 
$mago = new Player("Elrond", 1, $inventarioMago);
$barbaro = new Player ("Kruk", 1, $inventarioBarbaro);
$bardo = new Player ("Lyra", 1, $inventarioBardo);
$ranger = new Player ("Thorne", 1, $inventarioRanger);


echo "{$mago->getNickname()}<br>";
$mago->coletarItem($item17);
$mago->coletarItem($item18);
$mago->coletarItem($item23);
$mago->coletarItem($item13);
$mago->coletarItem($item6);
$mago->soltarItem($item23);
$mago->subirNivel();
$inventarioMago->capacidadeLivre();

echo "<hr>";

echo "{$barbaro->getNickname()}<br>";
$barbaro->coletarItem($item1);
$barbaro->coletarItem($item5);
$barbaro->coletarItem($item7);
$barbaro->soltarItem($item5);
$barbaro->coletarItem($item7);
$inventarioBarbaro->capacidadeLivre();


echo "<hr>";

echo "{$bardo->getNickname()}<br>";
$bardo->coletarItem($item23);
$bardo->coletarItem($item13);
$bardo->coletarItem($item15);
$bardo->coletarItem($item6);
$bardo->subirNivel();
$inventarioBardo->capacidadeLivre();
$bardo->subirNivel();
echo "<hr>";

echo "{$ranger->getNickname()}<br>";
$ranger->coletarItem($item4);
$ranger->coletarItem($item11);
$ranger->coletarItem($item3);
$inventarioRanger->capacidadeLivre();
echo "<hr>";