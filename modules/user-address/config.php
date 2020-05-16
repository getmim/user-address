<?php

return [
    '__name' => 'user-address',
    '__version' => '0.0.1',
    '__git' => 'git@github.com:getmim/user-address.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'http://iqbalfn.com/'
    ],
    '__files' => [
        'modules/user-address' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'lib-address' => NULL
            ],
            [
                'lib-formatter' => NULL
            ]
        ],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [
            'UserAddress\\Model' => [
                'type' => 'file',
                'base' => 'modules/user-address/model'
            ]
        ],
        'files' => []
    ],
    'libFormatter' => [
        'formats' => [
            'user-address' => [
                'id' => [
                    'type' => 'number'
                ],
                'user' => [
                    'type' => 'object',
                    'model' => [
                        'name'  => 'LibUser\\Library\\Fetcher',
                        'field' => 'id',
                        'type'  => 'number'
                    ],
                    'format' => 'user'
                ],
                'country' => [
                    'type' => 'object',
                    'model' => [
                        'name' => 'LibAddress\\Model\\AddrCountry',
                        'field' => 'id',
                        'type' => 'number'
                    ],
                    'format' => 'addr-country'
                ],
                'state' => [
                    'type' => 'object',
                    'model' => [
                        'name' => 'LibAddress\\Model\\AddrState',
                        'field' => 'id',
                        'type' => 'number'
                    ],
                    'format' => 'addr-state'
                ],
                'city' => [
                    'type' => 'object',
                    'model' => [
                        'name' => 'LibAddress\\Model\\AddrCity',
                        'field' => 'id',
                        'type' => 'number'
                    ],
                    'format' => 'addr-city'
                ],
                'district' => [
                    'type' => 'object',
                    'model' => [
                        'name' => 'LibAddress\\Model\\AddrDistrict',
                        'field' => 'id',
                        'type' => 'number'
                    ],
                    'format' => 'addr-district'
                ],
                'village' => [
                    'type' => 'object',
                    'model' => [
                        'name' => 'LibAddress\\Model\\AddrVillage',
                        'field' => 'id',
                        'type' => 'number'
                    ],
                    'format' => 'addr-village'
                ],
                'zipcode' => [
                    'type' => 'object',
                    'model' => [
                        'name' => 'LibAddress\\Model\\AddrZipcode',
                        'field' => 'id',
                        'type' => 'number'
                    ],
                    'format' => 'addr-zipcode'
                ],
                'street' => [
                    'type' => 'text'
                ],
                'updated' => [
                    'type' => 'date'
                ],
                'created' => [
                    'type' => 'date'
                ]
            ]
        ]
    ]
];