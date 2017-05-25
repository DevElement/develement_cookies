<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'GET params to cookies',
    'description' => 'Saves GET params to cookies, fully configurable',
    'category' => 'frontend',
    'version' => '1.0.0',
    'state' => 'stable',
    'clearCacheOnLoad' => true,
    'author' => 'Jesper Paardekooper',
    'author_email' => 'j.paardekooper@develement.nl',
    'author_company' => 'DevElement',
    'constraints' => [
        'depends' => [
            'typo3' => '6.2.0-8.99.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'autoload' => [
        'psr-4' => [
            'DevElement\\DevelementCookies\\' => 'Classes'
        ]
    ],
];
