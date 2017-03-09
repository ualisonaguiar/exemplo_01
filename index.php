<?php
require_once 'Exemplo.php';

$exemplo = new Exemplo();

$arrMock = [
    [
        'id_usuario' => 1,
        'pontuacao' => [
            'nu_ponto_01' => 'Ponto 01'
        ],
    ],
    [
        'id_usuario' => 1,
        'pontuacao' => [
            'nu_ponto_01' => 'Ponto 11',
            'nu_ponto_02' => 'Ponto 02',
        ]
    ],
    [
        'id_usuario' => 1,
        'pontuacao' => [
            'nu_ponto_01' => 'Ponto 12',
            'nu_ponto_02' => 'Ponto 11',
            'nu_ponto_03' => 'Ponto 03',
        ]
    ],
    [
        'id_usuario' => 1,
        'pontuacao' => [
            'nu_ponto_01' => 'Ponto 13',
            'nu_ponto_02' => 'Ponto 12',
            'nu_ponto_03' => 'Ponto 11',
            'nu_ponto_04' => 'Ponto 04',
        ]
    ],
    [
        'id_usuario' => 1,
        'pontuacao' => [
            'nu_ponto_01' => 'Ponto 14',
            'nu_ponto_02' => 'Ponto 13',
            'nu_ponto_03' => 'Ponto 12',
            'nu_ponto_04' => 'Ponto 11',
            'nu_ponto_05' => 'Ponto 05',
        ]
    ],
    [
        'id_usuario' => 1,
        'pontuacao' => [
            'nu_ponto_01' => 'Ponto 15',
            'nu_ponto_02' => 'Ponto 14',
            'nu_ponto_03' => 'Ponto 13',
            'nu_ponto_04' => 'Ponto 12',
            'nu_ponto_05' => 'Ponto 11',
            'nu_ponto_06' => 'Ponto 06',
        ]
    ],
    [
        'id_usuario' => 1,
        'pontuacao' => [
            'nu_ponto_01' => 'Ponto 16',
            'nu_ponto_02' => 'Ponto 15',
            'nu_ponto_03' => 'Ponto 14',
            'nu_ponto_04' => 'Ponto 13',
            'nu_ponto_05' => 'Ponto 12',
            'nu_ponto_06' => 'Ponto 11',
            'nu_ponto_07' => 'Ponto 07',
        ],
    ],
    [
        'id_usuario' => 1,
        'pontuacao' => [
            'nu_ponto_01' => 'Ponto 17',
            'nu_ponto_02' => 'Ponto 16',
            'nu_ponto_03' => 'Ponto 15',
            'nu_ponto_04' => 'Ponto 14',
            'nu_ponto_05' => 'Ponto 13',
            'nu_ponto_06' => 'Ponto 12',
            'nu_ponto_07' => 'Ponto 11',
            'nu_ponto_08' => 'Ponto 08',
        ],
    ],
    [
        'id_usuario' => 1,
        'pontuacao' => [
            'nu_ponto_01' => 'Ponto 18',
            'nu_ponto_02' => 'Ponto 17',
            'nu_ponto_03' => 'Ponto 16',
            'nu_ponto_04' => 'Ponto 15',
            'nu_ponto_05' => 'Ponto 14',
            'nu_ponto_06' => 'Ponto 13',
            'nu_ponto_07' => 'Ponto 12',
            'nu_ponto_08' => 'Ponto 11',
            'nu_ponto_09' => 'Ponto 09',
        ],
    ],
    [
        'id_usuario' => 1,
        'pontuacao' => [
            'nu_ponto_01' => 'Ponto 19',
            'nu_ponto_02' => 'Ponto 18',
            'nu_ponto_03' => 'Ponto 17',
            'nu_ponto_04' => 'Ponto 16',
            'nu_ponto_05' => 'Ponto 15',
            'nu_ponto_06' => 'Ponto 14',
            'nu_ponto_07' => 'Ponto 13',
            'nu_ponto_08' => 'Ponto 12',
            'nu_ponto_09' => 'Ponto 11',
            'nu_ponto_10' => 'Ponto 10'
        ],
    ],
    [
        'id_usuario' => 2,
        'pontuacao' => [
            'nu_ponto_01' => 'Ponto 01'
        ],
    ],
    [
        'id_usuario' => 2,
        'pontuacao' => [
            'nu_ponto_01' => 'Ponto 11',
            'nu_ponto_02' => 'Ponto 02',
        ]
    ],
    [
        'id_usuario' => 2,
        'pontuacao' => [
            'nu_ponto_01' => 'Ponto 12',
            'nu_ponto_02' => 'Ponto 11',
            'nu_ponto_03' => 'Ponto 03',
        ]
    ],
    [
        'id_usuario' => 2,
        'pontuacao' => [
            'nu_ponto_01' => 'Ponto 13',
            'nu_ponto_02' => 'Ponto 12',
            'nu_ponto_03' => 'Ponto 11',
            'nu_ponto_04' => 'Ponto 04',
        ]
    ],
    [
        'id_usuario' => 2,
        'pontuacao' => [
            'nu_ponto_01' => 'Ponto 14',
            'nu_ponto_02' => 'Ponto 13',
            'nu_ponto_03' => 'Ponto 12',
            'nu_ponto_04' => 'Ponto 11',
            'nu_ponto_05' => 'Ponto 05',
        ]
    ],
    [
        'id_usuario' => 2,
        'pontuacao' => [
            'nu_ponto_01' => 'Ponto 15',
            'nu_ponto_02' => 'Ponto 14',
            'nu_ponto_03' => 'Ponto 13',
            'nu_ponto_04' => 'Ponto 12',
            'nu_ponto_05' => 'Ponto 11',
            'nu_ponto_06' => 'Ponto 06',
        ]
    ],
    [
        'id_usuario' => 2,
        'pontuacao' => [
            'nu_ponto_01' => 'Ponto 16',
            'nu_ponto_02' => 'Ponto 15',
            'nu_ponto_03' => 'Ponto 14',
            'nu_ponto_04' => 'Ponto 13',
            'nu_ponto_05' => 'Ponto 12',
            'nu_ponto_06' => 'Ponto 11',
            'nu_ponto_07' => 'Ponto 07',
        ],
    ],
    [
        'id_usuario' => 2,
        'pontuacao' => [
            'nu_ponto_01' => 'Ponto 17',
            'nu_ponto_02' => 'Ponto 16',
            'nu_ponto_03' => 'Ponto 15',
            'nu_ponto_04' => 'Ponto 14',
            'nu_ponto_05' => 'Ponto 13',
            'nu_ponto_06' => 'Ponto 12',
            'nu_ponto_07' => 'Ponto 11',
            'nu_ponto_08' => 'Ponto 08',
        ],
    ],
    [
        'id_usuario' => 2,
        'pontuacao' => [
            'nu_ponto_01' => 'Ponto 18',
            'nu_ponto_02' => 'Ponto 17',
            'nu_ponto_03' => 'Ponto 16',
            'nu_ponto_04' => 'Ponto 15',
            'nu_ponto_05' => 'Ponto 14',
            'nu_ponto_06' => 'Ponto 13',
            'nu_ponto_07' => 'Ponto 12',
            'nu_ponto_08' => 'Ponto 11',
            'nu_ponto_09' => 'Ponto 09',
        ],
    ],
    [
        'id_usuario' => 2,
        'pontuacao' => [
            'nu_ponto_01' => 'Ponto 19',
            'nu_ponto_02' => 'Ponto 18',
            'nu_ponto_03' => 'Ponto 17',
            'nu_ponto_04' => 'Ponto 16',
            'nu_ponto_05' => 'Ponto 15',
            'nu_ponto_06' => 'Ponto 14',
            'nu_ponto_07' => 'Ponto 13',
            'nu_ponto_08' => 'Ponto 12',
            'nu_ponto_09' => 'Ponto 11',
            'nu_ponto_10' => 'Ponto 10'
        ],
    ],
    [
        'id_usuario' => 3,
        'pontuacao' => [
            'nu_ponto_01' => 'Ponto 01'
        ],
    ],
    [
        'id_usuario' => 3,
        'pontuacao' => [
            'nu_ponto_01' => 'Ponto 11',
            'nu_ponto_02' => 'Ponto 02',
        ]
    ],
    [
        'id_usuario' => 3,
        'pontuacao' => [
            'nu_ponto_01' => 'Ponto 12',
            'nu_ponto_02' => 'Ponto 11',
            'nu_ponto_03' => 'Ponto 03',
        ]
    ],
    [
        'id_usuario' => 3,
        'pontuacao' => [
            'nu_ponto_01' => 'Ponto 13',
            'nu_ponto_02' => 'Ponto 12',
            'nu_ponto_03' => 'Ponto 11',
            'nu_ponto_04' => 'Ponto 04',
        ]
    ],
    [
        'id_usuario' => 3,
        'pontuacao' => [
            'nu_ponto_01' => 'Ponto 14',
            'nu_ponto_02' => 'Ponto 13',
            'nu_ponto_03' => 'Ponto 12',
            'nu_ponto_04' => 'Ponto 11',
            'nu_ponto_05' => 'Ponto 05',
        ]
    ],
    [
        'id_usuario' => 3,
        'pontuacao' => [
            'nu_ponto_01' => 'Ponto 15',
            'nu_ponto_02' => 'Ponto 14',
            'nu_ponto_03' => 'Ponto 13',
            'nu_ponto_04' => 'Ponto 12',
            'nu_ponto_05' => 'Ponto 11',
            'nu_ponto_06' => 'Ponto 06',
        ]
    ],
    [
        'id_usuario' => 3,
        'pontuacao' => [
            'nu_ponto_01' => 'Ponto 16',
            'nu_ponto_02' => 'Ponto 15',
            'nu_ponto_03' => 'Ponto 14',
            'nu_ponto_04' => 'Ponto 13',
            'nu_ponto_05' => 'Ponto 12',
            'nu_ponto_06' => 'Ponto 11',
            'nu_ponto_07' => 'Ponto 07',
        ],
    ],
    [
        'id_usuario' => 3,
        'pontuacao' => [
            'nu_ponto_01' => 'Ponto 17',
            'nu_ponto_02' => 'Ponto 16',
            'nu_ponto_03' => 'Ponto 15',
            'nu_ponto_04' => 'Ponto 14',
            'nu_ponto_05' => 'Ponto 13',
            'nu_ponto_06' => 'Ponto 12',
            'nu_ponto_07' => 'Ponto 11',
            'nu_ponto_08' => 'Ponto 08',
        ],
    ],
    [
        'id_usuario' => 3,
        'pontuacao' => [
            'nu_ponto_01' => 'Ponto 18',
            'nu_ponto_02' => 'Ponto 17',
            'nu_ponto_03' => 'Ponto 16',
            'nu_ponto_04' => 'Ponto 15',
            'nu_ponto_05' => 'Ponto 14',
            'nu_ponto_06' => 'Ponto 13',
            'nu_ponto_07' => 'Ponto 12',
            'nu_ponto_08' => 'Ponto 11',
            'nu_ponto_09' => 'Ponto 09',
        ],
    ],
    [
        'id_usuario' => 3,
        'pontuacao' => [
            'nu_ponto_01' => 'Ponto 19',
            'nu_ponto_02' => 'Ponto 18',
            'nu_ponto_03' => 'Ponto 17',
            'nu_ponto_04' => 'Ponto 16',
            'nu_ponto_05' => 'Ponto 15',
            'nu_ponto_06' => 'Ponto 14',
            'nu_ponto_07' => 'Ponto 13',
            'nu_ponto_08' => 'Ponto 12',
            'nu_ponto_09' => 'Ponto 11',
            'nu_ponto_10' => 'Ponto 10'
        ],
    ],
];

foreach ($arrMock as $arrInfoMock) {
    $exemplo->registrarPontuacao($arrInfoMock['id_usuario'], $arrInfoMock['pontuacao']);
}