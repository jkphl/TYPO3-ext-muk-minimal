<?php

$EM_CONF['muk_minimal'] = [
    'title'            => 'Minimal TYPO3 demo extension for MUK CMS lectures',
    'description'      => '',
    'category'         => 'plugin',
    'author'           => 'Joschi Kuphal',
    'author_email'     => 'joschi@tollwerk.de',
    'state'            => 'alpha',
    'uploadfolder'     => 0,
    'createDirs'       => '',
    'clearCacheOnLoad' => 0,
    'version'          => '0.1.0',
    'constraints'      => [
        'depends'   => [
            'typo3' => '11.0.0-11.99.99',
        ],
        'conflicts' => [],
        'suggests'  => [],
    ],
];
