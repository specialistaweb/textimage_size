<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Text Media/Image size',
    'description' => 'Changes the split between image and text (default 50% / 50%) of the bootstrap_package content elements Text & Media, Text & Images and Images: the image can take 1 to 11 twelfths of the width.',
    'category' => 'fe',
    'version' => '5.0.0',
    'state' => 'stable',
    'author' => 'Giulia Tuveri',
    'author_email' => 'gt@specialistaweb.it',
    'author_company' => 'Specialistaweb',
    'constraints' => [
        'depends' => [
            'php' => '8.1.0-8.5.99',
            'typo3' => '12.4.0-14.4.99',
            'bootstrap_package' => '13.0.0-16.99.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
