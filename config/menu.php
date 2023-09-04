<?php
return [
    'admin' => [
        'sidebar' => [
            [
                'name' => 'dashboard',
                'route' => 'dashboard',
                'icon' => 'nav-icon fas fa-tachometer-alt',
                'has_submenu' => false,
                'submenu_icon' => '',
                'submenu' => [],
            ],
            [
                'name' => 'properties',
                'route' => 'dashboard',
                'icon' => 'nav-icon fa fa-home',
                'has_submenu' => true,
                'submenu_icon' => 'right fas fa-angle-left',
                'submenu' => [
                    [
                        'name' => 'properties',
                        'route' => 'properties.index',
                        'main_route' => 'properties',
                        'icon' => 'nav-icon fa fa-home',
                        'has_submenu' => false,
                        'submenu_icon' => '',
                        'submenu' => [],
                        
                    ],
                    [
                        'name' => 'developers',
                        'route' => 'developers.index',
                        'main_route' => 'properties',
                        'icon' => 'nav-icon fas fa-user',
                        'has_submenu' => false,
                        'submenu_icon' => '',
                        'submenu' => [],
                    ],
                    [
                        'name' => 'property_types',
                        'route' => 'property-types.index',
                        'main_route' => 'properties',
                        'icon' => 'nav-icon fa fa-home',
                        'has_submenu' => false,
                        'submenu_icon' => '',
                        'submenu' => [],
                    ]
                ],
            ],
            // [
            //     'name' => 'site-setting',
            //     'route' => 'dashboard',
            //     'icon' => 'nav-icon fas fa-bars',
            //     'has_submenu' => true,
            //     'submenu_icon' => 'right fas fa-angle-left',
            //     'submenu' => [
            //         [
            //             'name' => 'pages',
            //             'route' => 'pages.index',
            //             'icon' => 'nav-icon fa fa-file',
            //             'has_submenu' => false,
            //             'submenu_icon' => '',
            //             'submenu' => [],
            //         ],
            //         [
            //             'name' => 'headers',
            //             'route' => 'headers.index',
            //             'icon' => 'nav-icon fa fa-file',
            //             'has_submenu' => false,
            //             'submenu_icon' => '',
            //             'submenu' => [],
            //         ],
            //         [
            //             'name' => 'footers',
            //             'route' => 'footers.index',
            //             'icon' => 'nav-icon fa fa-file',
            //             'has_submenu' => false,
            //             'submenu_icon' => '',
            //             'submenu' => [],
            //         ],
            //]
            [
                'name' => 'blogs',
                'route' => 'blogs.index',
                'icon' => 'nav-icon fa fa-file',
                'has_submenu' => false,
                'submenu_icon' => '',
                'submenu' => [],
            ],
            //     ],
            // ]
            [
                'name' => 'queries',
                'route' => 'queries.index',
                'icon' => 'nav-icon fas fa-tachometer-alt',
                'has_submenu' => false,
                'submenu_icon' => '',
                'submenu' => [],
            ]
        ],
    ],
    
    'guest' => [
        [
            'name' => 'home',
            'route' => 'home',
        ],
        [
            'name' => 'about',
            'route' => 'home',
        ],
        [
            'name' => 'testimonials',
            'route' => 'home',
        ],
        [
            'name' => 'ideas',
            'route' => 'ideas.get',
        ],
        [
            'name' => 'contact_us',
            'route' => 'home',
        ]

    ],
    'auth' => [
        'innovator' => [
            [
                'name' => 'dashboard',
                'route' => 'dashboard',
            ],
            [
                'name' => 'messages',
                'route' => 'messages.index',
            ],
            [
                'name' => 'deals',
                'route' => 'deals.index',
            ],
            [
                'name' => 'ideas',
                'route' => 'ideas.index',
            ],
            [
                'name' => 'revenue',
                'route' => 'revenue.index',
            ]
        ],
        'company' => [
            [
                'name' => 'dashboard',
                'route' => 'dashboard',
            ],
            [
                'name' => 'messages',
                'route' => 'messages.index',
            ],
            [
                'name' => 'deals',
                // 'route' => 'deals.index',
                'route' => 'dashboard',
            ],
            [
                'name' => 'ideas',
                'route' => 'ideas.index',
            ],

        ],
        'admin' => [
            [
                'name' => 'dashboard',
                'route' => 'dashboard',
            ],
            [
                'name' => 'about',
                'route' => 'about',
            ],
            [
                'name' => 'testimonials',
                'route' => 'testimonials',
            ],
            [
                'name' => 'ideas',
                'route' => 'ideas',
            ],
            [
                'name' => 'contact_us',
                'route' => 'contact_us',
            ]


        ],




    ]


];
