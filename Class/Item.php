<?php

class Item {
    private string $name;
    private int $tamanho;
    private string $classe;

    public function __construct(string $name, int $tamanho, string $classe){
        $this->setName($name);
        $this->setTamanho($tamanho);
        $this->setClasse($classe);
    }

    public function setName(string $name): void{
        if (empty($name)){
            $this->name = "Nome do item";
        } else {
            $this->name = $name;
        }
    }

    public function getName(): string{
        return $this->name;
    }

    public function setTamanho(int $tamanho): void{
        if($tamanho<0){
            $this->tamanho = 0;
        } else {
            $this->tamanho = $tamanho;
        }
    }

    public function getTamanho(): int {
        return $this->tamanho;
    }

    public function setClasse(string $classe): void{
        if(empty($classe)){
            $this->classe = "Classe do item";
        } else{
            $this->classe = $classe;
        }
    }

    public function getClasse(): string {
        return $this->classe;
    }
}