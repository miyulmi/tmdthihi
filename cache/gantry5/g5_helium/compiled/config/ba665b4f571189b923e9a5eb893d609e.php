<?php
return [
    '@class' => 'Gantry\\Component\\Config\\CompiledConfig',
    'timestamp' => 1512356509,
    'checksum' => 'eef31399d068afc1a66d7233a27688fb',
    'files' => [
        'user/data/gantry5/themes/g5_helium/config/index' => [
            'assignments' => [
                'file' => 'user/data/gantry5/themes/g5_helium/config/index/assignments.yaml',
                'modified' => 1512356060
            ],
            'index' => [
                'file' => 'user/data/gantry5/themes/g5_helium/config/index/index.yaml',
                'modified' => 1512355876
            ],
            'layout' => [
                'file' => 'user/data/gantry5/themes/g5_helium/config/index/layout.yaml',
                'modified' => 1512355876
            ]
        ]
    ],
    'data' => [
        'assignments' => [
            'page' => [
                0 => [
                    'login' => true
                ]
            ],
            'language' => [
                
            ],
            'type' => [
                
            ]
        ],
        'index' => [
            'name' => 'index',
            'timestamp' => 1512355876,
            'version' => 7,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/default.png',
                'name' => 'default',
                'timestamp' => 1468340932
            ],
            'positions' => [
                'sidebar' => 'Sidebar'
            ],
            'sections' => [
                'navigation' => 'Navigation',
                'intro' => 'Intro',
                'features' => 'Features',
                'utility' => 'Utility',
                'above' => 'Above',
                'testimonials' => 'Testimonials',
                'expanded' => 'Expanded',
                'header' => 'Header',
                'mainbar' => 'Mainbar',
                'sidebar' => 'Sidebar',
                'footer' => 'Footer',
                'offcanvas' => 'Offcanvas'
            ],
            'particles' => [
                'logo' => [
                    'logo-9999' => 'Logo / Image',
                    'logo-9015' => 'Logo / Image'
                ],
                'menu' => [
                    'menu-6816' => 'Menu'
                ],
                'social' => [
                    'social-9043' => 'Social'
                ],
                'position' => [
                    'position-position-1815' => 'Sidebar'
                ],
                'copyright' => [
                    'copyright-9355' => 'Copyright'
                ],
                'horizontalmenu' => [
                    'horizontalmenu-4206' => 'Horizontal Menu'
                ],
                'totop' => [
                    'totop-2129' => 'To Top'
                ],
                'mobile-menu' => [
                    'mobile-menu-1783' => 'Mobile-menu'
                ],
                'custom' => [
                    'custom-9790' => 'Header',
                    'custom-8653' => 'Content'
                ]
            ],
            'inherit' => [
                'default' => [
                    'navigation' => 'navigation',
                    'sidebar' => 'sidebar',
                    'footer' => 'footer',
                    'offcanvas' => 'offcanvas',
                    'logo-9999' => 'logo-9608',
                    'menu-6816' => 'menu-6409',
                    'social-9043' => 'social-3171',
                    'position-position-1815' => 'position-position-3949',
                    'logo-9015' => 'logo-9571',
                    'copyright-9355' => 'copyright-1736',
                    'horizontalmenu-4206' => 'horizontalmenu-9034',
                    'totop-2129' => 'totop-8670',
                    'mobile-menu-1783' => 'mobile-menu-5697'
                ],
                'full_width' => [
                    'header' => 'header',
                    'intro' => 'intro',
                    'features' => 'features',
                    'utility' => 'utility',
                    'above' => 'above',
                    'testimonials' => 'testimonials',
                    'expanded' => 'expanded',
                    'mainbar' => 'mainbar',
                    'custom-9790' => 'custom-9029',
                    'custom-8653' => 'custom-7890'
                ]
            ]
        ],
        'layout' => [
            'version' => 2,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/default.png',
                'name' => 'default',
                'timestamp' => 1468340932
            ],
            'layout' => [
                'navigation' => [
                    
                ],
                'header' => [
                    
                ],
                'intro' => [
                    
                ],
                'features' => [
                    
                ],
                'utility' => [
                    
                ],
                'above' => [
                    
                ],
                'testimonials' => [
                    
                ],
                'expanded' => [
                    
                ],
                '/container-main/' => [
                    0 => [
                        0 => [
                            'mainbar 75' => [
                                
                            ]
                        ],
                        1 => [
                            'sidebar 25' => [
                                
                            ]
                        ]
                    ]
                ],
                'footer' => [
                    
                ],
                'offcanvas' => [
                    
                ]
            ],
            'structure' => [
                'navigation' => [
                    'type' => 'section',
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'attributes',
                            1 => 'children'
                        ]
                    ]
                ],
                'header' => [
                    'inherit' => [
                        'outline' => 'full_width',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'intro' => [
                    'type' => 'section',
                    'inherit' => [
                        'outline' => 'full_width',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'features' => [
                    'type' => 'section',
                    'inherit' => [
                        'outline' => 'full_width',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'utility' => [
                    'type' => 'section',
                    'inherit' => [
                        'outline' => 'full_width',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'above' => [
                    'type' => 'section',
                    'inherit' => [
                        'outline' => 'full_width',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'testimonials' => [
                    'type' => 'section',
                    'inherit' => [
                        'outline' => 'full_width',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'expanded' => [
                    'type' => 'section',
                    'inherit' => [
                        'outline' => 'full_width',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'mainbar' => [
                    'type' => 'section',
                    'subtype' => 'main',
                    'inherit' => [
                        'outline' => 'full_width',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'sidebar' => [
                    'type' => 'section',
                    'subtype' => 'aside',
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'block',
                            1 => 'attributes',
                            2 => 'children'
                        ]
                    ]
                ],
                'container-main' => [
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'footer' => [
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'children',
                            1 => 'attributes'
                        ]
                    ]
                ],
                'offcanvas' => [
                    'inherit' => [
                        'outline' => 'default',
                        'include' => [
                            0 => 'children',
                            1 => 'attributes'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
