<?php

require_once('Inventario.php');
require_once('Item.php');
require_once('Ataque.php');
require_once('Defesa.php');
require_once('Magia.php');

class Player {
    private string $nickname;
    private int $nivel;
    private Inventario $inventario;

    public function __construct(string $nickname, int $nivel, Inventario $inventario) {
        $this->setNickname($nickname);
        $this->setNivel($nivel);
        $this->setInventario($inventario);
    }

    public function setNickname(string $nickname): void {
        if(empty($nickname)){
            $this->nickname = "Nickname do player";
        } else {
            $this->nickname = $nickname;
        }
    }

    public function getNickname(): string {
        return $this->nickname;
    }

    public function setNivel(int $nivel): void {
        if($nivel<=0){
            $this->nivel = 1;
        } else {
            $this->nivel = $nivel;
        } 
    }

    public function GetNivel(): int {
        return $this->nivel;
    }

    public function setInventario(Inventario $inventario){
        $this->inventario = $inventario;
    }

    public function getInventario(){
        return $this->inventario;
    }

    public function coletarItem(Item $item) {
        
        $this->inventario->adicionar($item);
        
    }

    public function soltarItem(Item $item) {
        $this->inventario->remover($item);
    }

    public function subirNivel() {
        $this->nivel += 1;
        $this->inventario->setCapacidadeMaxima($this->inventario->getCapacidadeMaxima() + ($this->nivel * 3));
        echo "Parabéns! Você subiu para o nível {$this->getNivel()}! Capacidade Máxima do inventário atualizada para {$this->inventario->getCapacidadeMaxima()}.<br>";
    }
}
