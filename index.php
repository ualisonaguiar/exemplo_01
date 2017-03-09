<?php
require_once 'Exemplo.php';

$exemplo = new Exemplo();

$arrMock = [
    [
        'usuario' => 1,
        'pontuacao' => 'Ponto 1'
    ],
    [
        'usuario' => 1,
        'pontuacao' => 'Ponto 2'
    ],
    [
        'usuario' => 1,
        'pontuacao' => 'Ponto 3'
    ],
    [
        'usuario' => 1,
        'pontuacao' => 'Ponto 4'
    ],
    [
        'usuario' => 1,
        'pontuacao' => 'Ponto 5'
    ],
    [
        'usuario' => 1,
        'pontuacao' => 'Ponto 6'
    ],
    [
        'usuario' => 1,
        'pontuacao' => 'Ponto 7'
    ],
    [
        'usuario' => 1,
        'pontuacao' => 'Ponto 8'
    ],
    [
        'usuario' => 1,
        'pontuacao' => 'Ponto 9'
    ],
    [
        'usuario' => 1,
        'pontuacao' => 'Ponto 10'
    ],
    [
        'usuario' => 1,
        'pontuacao' => 'Ponto 11'
    ],
    [
        'usuario' => 1,
        'pontuacao' => 'Ponto 12'
    ],
    [
        'usuario' => 1,
        'pontuacao' => 'Ponto 13'
    ],
    [
        'usuario' => 1,
        'pontuacao' => 'Ponto 14'
    ],
    [
        'usuario' => 1,
        'pontuacao' => 'Ponto 15'
    ],
];

foreach ($arrMock as $arrInfoMock) {
    $exemplo->registrarPontuacao($arrInfoMock['usuario'], $arrInfoMock['pontuacao']);
}