<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'D:/xampp/htdocs/tmdthihi/user/plugins/gantry5/engines/nucleus/particles/search.yaml',
    'modified' => 1512364782,
    'data' => [
        'name' => 'Search',
        'description' => 'Search Particle for Grav SimpleSearch plugin',
        'type' => 'particle',
        'icon' => 'fa-search',
        'dependencies' => [
            'platform' => [
                'grav' => [
                    'plugin' => [
                        'simplesearch' => true
                    ]
                ]
            ]
        ],
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable search particles.',
                    'default' => true
                ]
            ]
        ]
    ]
];
