<?php

require_once('Player.php');
require_once('Item.php');
require_once('Ataque.php');
require_once('Defesa.php');
require_once('Magia.php');

class Inventario {
    private int $capacidadeMaxima;
    private array $itens = [];
    private int $capacidadeAtual = 0;

    public function __construct(int $capacidadeMaxima) {
        $this->setCapacidadeMaxima($capacidadeMaxima);
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
        if ($item->getClasse() == "Ataque") {
            if (($this->capacidadeAtual + 7) <= $this->capacidadeMaxima) {
                array_push($this->itens, $item);
                echo "Item {$item->getName()} adicionado com sucesso. <br>";
                $this->capacidadeAtual += 7;
            } else {
                echo "Invetário cheio! Impossível adicionar o item {$item->getName()}.<br>";
            }
        } elseif ($item->getClasse() == "Defesa") {
            if (($this->capacidadeAtual + 4) <= $this->capacidadeMaxima) {
                array_push($this->itens, $item);
                echo "Item {$item->getName()} adicionado com sucesso. <br>";
                $this->capacidadeAtual += 4;
            } else {
                echo "Invetário cheio! Impossível adicionar o item {$item->getName()}.<br>";
            }
        } elseif ($item->getClasse() == "Magia") {
            if (($this->capacidadeAtual + 2) <= $this->capacidadeMaxima) {
                array_push($this->itens, $item);
                echo "Item {$item->getName()} adicionado com sucesso. <br>";
                $this->capacidadeAtual += 2;
            } else {
                echo "Invetário cheio! Impossível adicionar o item {$item->getName()}.<br>";
            }
        }
    }

    public function remover(Item $item) {
        foreach ($this->itens as $indice => $valor) {
            if($valor->getName() == $item->getName()) {
                unset($this->itens[$indice]);
                echo "Item {$item->getName()} removido com sucesso!<br>";
                if ($item->getClasse() == "Ataque"){
                    $this->capacidadeAtual -=7;
                } elseif ($item->getClasse() == "Defesa") {
                    $this->capacidadeAtual -=4;
                } elseif ($item->getClasse() == "Magia"){
                    $this->capacidadeAtual -=2;
                }
            }       
            $this->itens = array_values($this->itens);
        }
    }

    public function capacidadeLivre() {
        $capacidadeLivre = $this->capacidadeMaxima - $this->capacidadeAtual;
        echo "A capacidade livre é de: {$capacidadeLivre} <br>";
    }
}
