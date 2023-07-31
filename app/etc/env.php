<?php
return [
    'queue' => [
        'consumers_wait_for_messages' => 1
    ],
    'remote_storage' => [
        'driver' => 'file'
    ],
    'cache' => [
        'graphql' => [
            'id_salt' => '3MhlGNZZMgcuSyfCyrnpEjTfYxlBMpPc'
        ],
        'frontend' => [
            'default' => [
                'id_prefix' => '297_'
            ],
            'page_cache' => [
                'id_prefix' => '297_'
            ]
        ],
        'allow_parallel_generation' => false
    ],
    'backend' => [
        'frontName' => 'admin'
    ],
    'crypt' => [
        'key' => '8110fdc7bd884d3cb9439597703731b9'
    ],
    'db' => [
        'table_prefix' => '',
        'connection' => [
            'default' => [
                'host' => 'localhost',
                'dbname' => 'magento2',
                'username' => 'root',
                'password' => 'Password@123',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1',
                'driver_options' => [
                    1014 => false
                ]
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'default',
    'session' => [
        'save' => 'files'
    ],
    'lock' => [
        'provider' => 'db'
    ],
    'directories' => [
        'document_root_is_pub' => true
    ],
    'cache_types' => [
        'config' => 0,
        'layout' => 0,
        'block_html' => 0,
        'collections' => 0,
        'reflection' => 0,
        'db_ddl' => 0,
        'compiled_config' => 1,
        'eav' => 0,
        'customer_notification' => 0,
        'config_integration' => 0,
        'config_integration_api' => 0,
        'full_page' => 0,
        'config_webservice' => 0,
        'translate' => 0
    ],
    'downloadable_domains' => [
        'sonal.magento.com'
    ],
    'install' => [
        'date' => 'Fri, 07 Jul 2023 10:08:24 +0000'
    ]
];
