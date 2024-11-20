<?php

require_once('Inventario.php');
require_once('Item.php');
require_once('Ataque.php');
require_once('Defesa.php');
require_once('Magia.php');

class Player {
    private string $nickname;
    private int $nivel;
    private array $inventario = [];

    public function __construct(string $nickname, int $nivel) {
        $this->setNickname($nickname);
        $this->setNivel($nivel);
    }

    public function setNickname($nickname): void {
        $this->nickname = $nickname;
    }

    public function getNickname(): string {
        return $this->nickname;
    }

    public function setNivel($nivel): void {
        $this->nivel = $nivel;
    }

    public function GetNivel(): int {
        return $this->nivel;
    }

    public function coletarItem(Item $name) {

    }

    public function soltarItem(Item $name) {

    }

    public function subirNivel() {
        $this->nivel += 1;
        $capacidadeAtual = $capacidadeMaxima + ($this->nivel * 3);
    }
}
