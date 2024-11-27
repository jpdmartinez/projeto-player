<?php

require_once('Player.php');
require_once('Item.php');
require_once('Ataque.php');
require_once('Defesa.php');
require_once('Magia.php');

class Inventario {
    private int $capacidadeMaxima;
    private array $itens = [];

    public function __construct() {
        $this->setCapacidadeMaxima(20);
    }

    public function setCapacidadeMaxima($capacidadeMaxima): void {
        if($capacidadeMaxima<20){
            $this->capacidadeMaxima = 20;
        } else {
            $this->capacidadeMaxima = $capacidadeMaxima;
        }
    }

    public function getCapacidadeMaxima(): int {
        return $this->capacidadeMaxima;
    }

    public function  adicionar(Item $item) {
        if (($this->espacoUtilizado() + 
            $item->getTamanho()) <= $this->capacidadeMaxima) {
                array_push($this->itens, $item);
                echo "Item {$item->getName()} adicionado com sucesso. <br>";
            } else {
                echo "Invetário cheio! Impossível adicionar o item {$item->getName()}.<br>";
            }
    }

    public function remover(Item $item) {
        foreach ($this->itens as $indice => $valor) {
            if($valor->getName() == $item->getName()) {
                unset($this->itens[$indice]);
                echo "Item {$item->getName()} removido com sucesso!<br>";               
            }       
            $this->itens = array_values($this->itens);
        }
    }

    public function espacoUtilizado(): int{
        $espacoUtilizado = 0;
        foreach($this->itens as $item){
            $espacoUtilizado += $item->getTamanho();
        }

        return $espacoUtilizado;
    }

    public function capacidadeLivre() {
        $capacidadeLivre = $this->capacidadeMaxima - $this->espacoUtilizado();
        echo "A capacidade livre é de: {$capacidadeLivre} <br>";
    }
}
