<?php

require_once "vendor/autoload.php";

use Desafio\Academia\Domain\Entity\Aluno;

$aluno = new Aluno();

$aluno->setNome("wesley");
echo $aluno->getNome();

$aluno->setIdade(19);
echo $aluno->getIdade();

$aluno->setCpf(19264738291);
echo $aluno->getCpf();