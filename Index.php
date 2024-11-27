<?php

require_once('./class/Player.php');
require_once('./class/Inventario.php');
require_once('./class/Item.php');
require_once('./class/Ataque.php');
require_once('./class/Defesa.php');
require_once('./class/Magia.php');

//Itens de Ataque
$item1 = new Ataque('Espada Longa');
$item2 = new Ataque('Machado de batalha');
$item3 = new Ataque('Espada curta');
$item4 = new Ataque('Arco e flecha');
$item5 = new Ataque('Lança');
$item6 = new Ataque('Adaga afiada');
$item7 = new Ataque('Clava');
$item8 = new Ataque('Machado de guerra');

//Itens de Defesa
$item9 = new Defesa('Armadura de couro');
$item10 = new Defesa('Escudo');
$item11 = new Defesa('Armadura de ferro');
$item12 = new Defesa('Elmo');
$item13 = new Defesa('Capa mágica');
$item14 = new Defesa('Escudo de madeira');
$item15 = new Defesa('Botas resistentes');
$item16 = new Defesa('Escudo de ferro');

//Itens de Magia
$item17 = new Magia('Grimório');
$item18 = new Magia('Poção de mana');
$item19 = new Magia('Pergaminho de fogo');
$item20 = new Magia('Elixir de cura');
$item21 = new Magia('Poção de invisibilidade');
$item22 = new Magia('Bastão do mago');
$item23 = new Magia('Orbe de luz');
$item6 = new Magia('Poção de vida');

//Criação de personagens 
$mago = new Player("Elrond");
$barbaro = new Player ("Kruk");
$bardo = new Player ("Lyra");
$ranger = new Player ("Thorne");

echo "{$mago->getNickname()}<br>";
$mago->coletarItem($item17);
$mago->coletarItem($item18);
$mago->coletarItem($item23);
$mago->coletarItem($item13);
$mago->coletarItem($item6);
$mago->soltarItem($item23);
$mago->getInventario()->capacidadeLivre();
$mago->subirNivel();
$mago->getInventario()->capacidadeLivre();

echo "<hr>";

echo "{$barbaro->getNickname()}<br>";
$barbaro->coletarItem($item1);
$barbaro->coletarItem($item5);
$barbaro->coletarItem($item7);
$barbaro->soltarItem($item5);
$barbaro->coletarItem($item7);
$barbaro->getInventario()->capacidadeLivre();

echo "<hr>";

echo "{$bardo->getNickname()}<br>";
$bardo->coletarItem($item23);
$bardo->coletarItem($item13);
$bardo->coletarItem($item15);
$bardo->coletarItem($item6);
$bardo->subirNivel();
$bardo->getInventario()->capacidadeLivre();
$bardo->subirNivel();
$bardo->getInventario()->capacidadeLivre();
echo "<hr>";

echo "{$ranger->getNickname()}<br>";
$ranger->coletarItem($item4);
$ranger->coletarItem($item11);
$ranger->coletarItem($item3);
$ranger->getInventario()->capacidadeLivre();
echo "<hr>";