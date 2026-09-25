<?php

class Contador
{
    private int $contagem;



    public function __construct(int $valor = 0)
    {
        $this->contagem = $valor;
    }


    public function adicionarContagem(){
        $this->contagem ++;
    }



    /**
     * Get the value of contagem
     */
    public function getContagem(): int
    {
        return $this->contagem;
    }

    /**
     * Set the value of contagem
     */
    public function setContagem(int $contagem): self
    {
        $this->contagem = $contagem;

        return $this;
    }
}