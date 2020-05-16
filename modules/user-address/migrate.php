<?php

return [
    'UserAddress\\Model\\UserAddress' => [
        'fields' => [
            'id' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => TRUE,
                    'primary_key' => TRUE,
                    'auto_increment' => TRUE
                ],
                'index' => 1000
            ],
            'user' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => TRUE,
                    'null' => FALSE
                ],
                'index' => 2000
            ],
            'country' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => TRUE
                ],
                'index' => 3000
            ],
            'state' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => TRUE
                ],
                'index' => 4000
            ],
            'city' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => TRUE
                ],
                'index' => 5000
            ],
            'district' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => TRUE
                ],
                'index' => 6000
            ],
            'village' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => TRUE
                ],
                'index' => 7000
            ],
            'zipcode' => [
                'type' => 'INT',
                'attrs' => [
                    'unsigned' => TRUE
                ],
                'index' => 8000
            ],
            'street' => [
                'type' => 'TEXT',
                'attrs' => [],
                'index' => 9000
            ],
            'updated' => [
                'type' => 'TIMESTAMP',
                'attrs' => [
                    'default' => 'CURRENT_TIMESTAMP',
                    'update' => 'CURRENT_TIMESTAMP'
                ],
                'index' => 10000
            ],
            'created' => [
                'type' => 'TIMESTAMP',
                'attrs' => [
                    'default' => 'CURRENT_TIMESTAMP'
                ],
                'index' => 11000
            ]
        ]
    ]
];