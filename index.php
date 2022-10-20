<?php

Kirby::plugin('werbeagentur-maikbartz/kirby-block-expansion', [
    'blueprints' => [
        'blocks/accordion' => __DIR__ . '/blueprints/blocks/accordion.yml',
        'blocks/alert' => __DIR__ . '/blueprints/blocks/alert.yml',
        'blocks/descriptionList' => __DIR__ . '/blueprints/blocks/descriptionList.yml',
        'blocks/button' => __DIR__ . '/blueprints/blocks/button.yml',
        'blocks/video2' => __DIR__ . '/blueprints/blocks/video2.yml',
        'files/video2'  => __DIR__ . '/blueprints/files/video2.yml'
        // more blueprints
    ],
    'snippets' => [
        'blocks/accordion' => __DIR__ . '/snippets/blocks/accordion.php',
        'blocks/alert' => __DIR__ . '/snippets/blocks/alert.php',
        'blocks/descriptionList' => __DIR__ . '/snippets/blocks/descriptionList.php',
        'blocks/button' => __DIR__ . '/snippets/blocks/button.php',
        'blocks/video2' => __DIR__ . '/snippets/blocks/video2.php',
        // more snippets
    ],
    'translations' => [
        'en' => [
            'field.blocks.accordion.name' => 'Accordion',
            'field.blocks.alert.name' => 'Alert',
            'field.blocks.descriptionList.name' => 'Description list',
            'field.blocks.button.name' => 'Button',
            'field.blocks.video2.name' => 'Video',
            // more block names
        ],
        'de' => [
            'field.blocks.accordion.name' => 'Akkordion',
            'field.blocks.alert.name' => 'Alarmierung',
            'field.blocks.descriptionList.name' => 'Beschreibung Liste',
            'field.blocks.button.name' => 'Schaltfläche',
            'field.blocks.video2.name' => 'Video',
            // more block names

        ],
        // more languages
    ]
]);