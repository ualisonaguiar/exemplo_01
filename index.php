<?php
require_once 'Exemplo.php';

$exemplo = new Exemplo();

$arrMock = [
    [
        'usuario' => 1,
        'pontuacao' => 'Ponto 1',
        'tempo' => 110,
    ],
    [
        'usuario' => 1,
        'pontuacao' => 'Ponto 2',
        'tempo' => 120,
    ],
    [
        'usuario' => 1,
        'pontuacao' => 'Ponto 3',
        'tempo' => 130,
    ],
    [
        'usuario' => 1,
        'pontuacao' => 'Ponto 4',
        'tempo' => 140,
    ],
    [
        'usuario' => 1,
        'pontuacao' => 'Ponto 5',
        'tempo' => 150,
    ],
    [
        'usuario' => 1,
        'pontuacao' => 'Ponto 6',
        'tempo' => 160,
    ],
    [
        'usuario' => 1,
        'pontuacao' => 'Ponto 7',
        'tempo' => 170,
    ],
    [
        'usuario' => 1,
        'pontuacao' => 'Ponto 8',
        'tempo' => 180,
    ],
    [
        'usuario' => 1,
        'pontuacao' => 'Ponto 9',
        'tempo' => 190,
    ],
    [
        'usuario' => 1,
        'pontuacao' => 'Ponto 10',
        'tempo' => 200,
    ],
    [
        'usuario' => 1,
        'pontuacao' => 'Ponto 11',
        'tempo' => 211,
    ],
    [
        'usuario' => 1,
        'pontuacao' => 'Ponto 12',
        'tempo' => 212,
    ],
    [
        'usuario' => 1,
        'pontuacao' => 'Ponto 13',
        'tempo' => 213,
    ],
    [
        'usuario' => 1,
        'pontuacao' => 'Ponto 14',
        'tempo' => 214,
    ],
    [
        'usuario' => 1,
        'pontuacao' => 'Ponto 15',
        'tempo' => 215,
    ],
];

foreach ($arrMock as $arrInfoMock) {
    $exemplo->registrarPontuacao($arrInfoMock['usuario'], $arrInfoMock['pontuacao'], $arrInfoMock['tempo']);
}
echo 'Fim do exemplo';