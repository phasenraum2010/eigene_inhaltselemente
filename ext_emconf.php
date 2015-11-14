<?php

$EM_CONF[$_EXTKEY] = array(
    'title' => 'Eigene Inhaltselemente',
    'description' => 'Eigene Inhaltselemente',
    'category' => 'misc',
    'state' => 'beta',
    'author' => 'Thomas Woehlke',
    'clearCacheOnLoad' => 1,
    'version' => '0.0.1',
    'constraints' => array(
        'depends' => array(
            'typo3' => '7.6.*',
            'vhs' => '2.3.* ',
            'introduction ' => '2.3.*',
        ),
        'conflicts' => array(
        ),
        'suggests' => array(
        ),
    ),
);
