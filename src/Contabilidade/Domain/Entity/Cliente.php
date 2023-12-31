<?php

namespace Desafio\Contabilidade\Domain\Entity;

use Error;

class Cliente {
    private string $nome;
    private int $idade;
    private string $cpf;
    private $boletosEmAtraso;
    private $boletos;

    function setNome(string $n) {
        if (strlen($n) < 5) {
            throw new Error("Nome precisa ter no mínimo 5 caracteres!");
        }

        $this->nome = $n;
    }

    function getNome() {
        return $this->nome;
    }

    function setIdade(int $i) {
        if ($i < 18) {
            throw new Error("Idade precisa ser no mínimo 18!");
        }

        $this->idade = $i;
    }

    function getIdade() {
        return $this->idade;
    }

    function setCpf(int $c) {
        $cpfLength = strlen((string)$c);
        if ($cpfLength !== 11) {
            throw new Error("CPF precisa ter exatamente 11 digitos");
        }

        $this->cpf = $c;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getBoletosEmAtraso() {
        return $this->boletosEmAtraso;
    }

    function getBoletos() {
        return $this->boletos;
    }


}

?>