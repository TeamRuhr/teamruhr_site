<?php

/**
 * Extension Manager/Repository config file for ext "teamruhr_site".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'TeamRuhr Site',
    'description' => 'Site package for teamruhr.de',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-9.5.99',
            'fluid_styled_content' => '8.7.0-9.5.99',
            'rte_ckeditor' => '8.7.0-9.5.99'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Teamruhr\\TeamruhrSite\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Michael Oehlhof',
    'author_email' => 'typo3@oehlhof.de',
    'author_company' => 'TeamRuhr',
    'version' => '1.0.0',
];
