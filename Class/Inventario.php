<?php

require_once('Player.php');
require_once('Item.php');
require_once('Ataque.php');
require_once('Defesa.php');
require_once('Magia.php');

class Inventario {
    private int $capacidadeMaxima;
    private array $itens;

    public function __construct(int $capacidadeMaxima) {
        $this->setCapacidadeMaxima($capacidadeMaxima);
    }

    public function setCapacidadeMaxima($capacidadeMaxima): void {
        $this->capacidadeMaxima = $capacidadeMaxima;
    }

    public function getCapacidadeMaxima(): int {
        return $this->capacidadeMaxima;
    }

    public function  adicionar(Item $nome) {

    }

    public function remover(Item $nome) {

    }

    public function capacidadeLivre() {

    }
}
