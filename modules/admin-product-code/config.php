<?php

return [
    '__name' => 'admin-product-code',
    '__version' => '0.0.1',
    '__git' => 'git@github.com:getmim/admin-product-code.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'http://iqbalfn.com/'
    ],
    '__files' => [
        'modules/admin-product-code' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'product-code' => NULL
            ]
        ],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [],
        'files' => []
    ],
    'libForm' => [
        'forms' => [
            'admin.product.edit' => [
                'code_private' => [
                    'label' => 'Code Private',
                    'type' => 'text',
                    'position' => 'right',
                    'rules' => [
                        'text' => true
                    ]
                ],
                'code_sku' => [
                    'label' => 'Code SKU',
                    'type' => 'text',
                    'position' => 'right',
                    'rules' => [
                        'text' => true
                    ]
                ]
            ]
        ]
    ]
];
