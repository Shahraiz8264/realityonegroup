<?php 

return [

    'assets' => [
        'images' => 'images/',
        'css' => 'css/',
        'js' => 'js/',
        'js_scripts' => 'js/scripts/',
        'plugins' => 'plugins/',
        'fonts' => 'fonts/',
        'layouts' => 'layouts.',
        'home_pages' => 'homes.',
        'pages' => 'pages.',
        'logo'=>'images/logo.png',
        'image-not-found'=>'images/image-not-found.png',

    ],
    'constants' => [
        'experience' => '10',
        'warranty' => '2',
        'currency' => 'PKR', 
        'display-limit' => 4,
    ],
    'currencies' => [
        'PKR' => [
            'name' => 'PKR',
            'symbol' => '',
        ],
        'USD' => [
            'name' => 'USD',
            'symbol' => '$',
        ],
    ],
    'menus' => [
        'pages' => [
            [
                'name' => 'home',
                'link' => 'home',
                'is_main' => true,
                'class' => 'menu-item',
                'type' => 'page',
                'link-class' => 'menu-link active',
                'has_submenu' => true,
                'submenu' => []
            ],
            [
                'name' => 'buy_rent',
                'link' => 'properties.index',
                'is_main' => false,
                'type' => 'link',
                'class' => 'menu-item',
                'link-class' => 'menu-link',
                'has_submenu' => false,
                'submenu' => []
            ],
            [
                'name' => 'about_us',
                'link' => 'about-us',
                'is_main' => false,
                'type' => 'page',
                'class' => 'menu-item',
                'link-class' => 'menu-link',
                'has_submenu' => false,
                'submenu' => []
            ],
            [
                'name' => 'our_projects',
                'link' => 'projects.index',
                'is_main' => false,
                'type' => 'lin',
                'class' => 'menu-item',
                'link-class' => 'menu-link',
                'has_submenu' => true,
                'submenu' =>[
                    // [
                    //     'text' => 'Prime Valley',
                    //     'link' => str_replace(' ','-','Prime Valley'),
                    //     'route' => 'projects.get'
                    // ],
                    [
                        'text' => 'Capital Smart City',
                        'link' =>  str_replace(' ','-','Capital Smart City'),
                        'route' => 'projects.get'
                    ],
                    [
                        'text' => 'Kingdom Valley',
                        'link' =>  str_replace(' ','-','Kingdom Valley'),
                        'route' => 'projects.get'
                    ],
                    [
                        'text' => 'Lahore Smart City',
                        'link' =>  str_replace(' ','-','Lahore Smart City'),
                        'route' => 'projects.get'
                    ],
                    [
                        'text' => 'New Metro City',
                        'link' =>  str_replace(' ','-','New Metro City'),
                        'route' => 'projects.get'
                    ],
                    [
                        'text' => 'Nova City',
                        'link' => str_replace(' ','-','Nova City'),
                        'route' => 'projects.get'
                    ],
                    [
                        'text' => 'Park View City',
                        'link' =>  str_replace(' ','-','Park View City'),
                        'route' => 'projects.get'
                    ],
                    [
                        'text' => 'Eighteen',
                        'link' =>  str_replace(' ','-','Eighteen'),
                        'route' => 'projects.get'
                    ],
                    // [
                    //     'text' => 'Sialkot Motorway City',
                    //     'link' =>  str_replace(' ','-','Sialkot Motorway City'),
                    //     'route' => 'projects.get'
                    // ],
                ]
            ],
            [
                'name' => 'services',
                'link' => 'services',
                'is_main' => false,
                'type' => 'page',
                'class' => 'menu-item',
                'link-class' => 'menu-link',
                'has_submenu' => true,
                'submenu' => [
                    [
                        'text' => 'Financial Advisory',
                        'link' => 'financial-advisory',
                        'route' => 'site-pages'
                    ],
                ]
            ],
            
            [
                'name' => 'book_now',
                'link' => 'contact-us',
                'is_main' => false,
                'type' => 'page',
                'class' => 'menu-item book-now-btn',
                'link-class' => 'btn btn-primary',
                'has_submenu' => true,
                'submenu' => []
            ],
            // [
            //     'name' => 'geo_location',
            //     'link' => 'contact-us',
            //     'is_main' => false,
            //     'type' => 'page',
            //     'class' => 'menu-item book-now-btn',
            //     'link-class' => 'btn btn-primary',
            //     'has_submenu' => true,
            //     'submenu' => []
            // ],
            
            
        ],

    ],
    'contacts' => [
        'phone' => ["+92 333 0596 566"],
        'email' => ["Info@realityonegroup.pk"],
        'copyright' => "© 2022 Calgary Painting Crew. All rights reserved.",
        'name' => "Calgary Painting",
        'map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3318.3614135870826!2d73.08473401550481!3d33.725469380696005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfbf807254c203%3A0x3bb822ce92ad00f3!2s33%20Buland%20Markaz!5e0!3m2!1sen!2s!4v1676399849880!5m2!1sen!2s',
        'address'   => "328 40 Ave NE Calgary,AB T2E 2M7",
        'developer' => 'K13.ca',
        'social' => [
            'instagram' => [
                'url' => 'https://www.instagram.com/realityonegroup.pk',
                'icon' => 'fa fa-instagram',
            ],
            'facebook' => [
                'url' => 'https://www.facebook.com/realityonegroup.pk',
                'icon' => 'fa fa-facebook',
            ],
            'whatsapp' => [
                'url' => 'https://en.wh.ms/92333 0596 566',
                'icon' => 'fa fa-whatsapp',
            ],
            'youtube' => [
                'url' => 'https://www.youtube.com/channel/UCyPyPzHl3loIt3QZilpkRUQ',
                'icon' => 'fa fa-youtube',
            ],
         
        ]
       

    ],
    'footer-menu1' => [
        [
            'text' => 'home',
            'link' => 'home'
        ],
        [
            'text' => 'about_us',
            'link' => 'about-us'
        ],
        [
            'text' => 'services',
            'link' => 'services'
        ],
        // [
        //     'text' => 'videos',
        //     'link' => 'javascript:void(0)'
        // ],
        // [
        //     'text' => 'blog',
        //     'link' => 'javascript:void(0)'
        // ],
        [
            'text' => 'contact',
            'link' => 'contact-us'
        ],
        // [
        //     'text' => 'privacy_policy',
        //     'link' => 'javascript:void(0)'
        // ],
    ],
    'footer-menu2' => [

        [
            'text' => 'Capital Smart City',
            'link' =>  str_replace(' ','-','Capital Smart City')
        ],
        [
            'text' => 'Kingdom Valley',
            'link' =>  str_replace(' ','-','Kingdom Valley')
        ],
        [
            'text' => 'Lahore Smart City',
            'link' =>  str_replace(' ','-','Lahore Smart City')
        ],
        [
            'text' => 'New Metro City',
            'link' =>  str_replace(' ','-','New Metro City')
        ],
        [
            'text' => 'Nova City',
            'link' => str_replace(' ','-','Nova City')
        ],
        [
            'text' => 'Park View City',
            'link' =>  str_replace(' ','-','Park View City')
        ],
        [
            'text' => 'Eighteen',
            'link' => str_replace(' ','-','Eighteen')
        ],
    ],

    'galleries' => [
        
        [   
            'class' => 'even items',
            'images' => [
                [
                    'thumbnail' => 'img/thumbs/90-113.jpg',
                    'image' => 'assests/amenities/about1.jpeg',
                    'title' => '',
                ],
                [
                    'thumbnail' => 'img/thumbs/42-29.jpg',
                    'image' => 'assests/amenities/about2.jpeg',
                    'title' => '',
                ]
                
            ]
           
        ],
        [   
            'class' => 'odd items',
            'images' => [
                [
                    'thumbnail' => 'img/thumbs/90-113.jpg',
                    'image' => 'assests/amenities/about3.jpeg',
                    'title' => '',
                ],
                [
                    'thumbnail' => 'img/thumbs/42-29.jpg',
                    'image' => 'assests/amenities/about4.jpeg',
                    'title' => '',
                ]
                
            ]
           
        ],
        [   
            'class' => 'even items',
            'images' => [
                [
                    'thumbnail' => 'img/thumbs/90-113.jpg',
                    'image' => 'assests/amenities/about5.jpeg',
                    'title' => 'Commerical Area',
                ],
                [
                    'thumbnail' => 'img/thumbs/42-29.jpg',
                    'image' => 'assests/amenities/about6.jpeg',
                    'title' => '',
                ]
                
            ]
           
        ],
        [   
            'class' => 'odd items',
            'images' => [
                [
                    'thumbnail' => 'img/thumbs/90-113.jpg',
                    'image' => 'assests/amenities/about7.jpeg',
                    'title' => '',
                ],
                [
                    'thumbnail' => 'img/thumbs/42-29.jpg',
                    'image' => 'assests/amenities/about8.jpeg',
                    'title' => '',
                ]
                
            ]
           
        ],
        [   
            'class' => 'even items',
            'images' => [
                [
                    'thumbnail' => 'img/thumbs/90-113.jpg',
                    'image' => 'assests/amenities/about1.jpeg',
                    'title' => '',
                ],
                [
                    'thumbnail' => 'img/thumbs/42-29.jpg',
                    'image' => 'assests/amenities/about2.jpeg',
                    'title' => '',
                ]
                
            ]
           
        ],
        [   
            'class' => 'odd items',
            'images' => [
                [
                    'thumbnail' => 'img/thumbs/90-113.jpg',
                    'image' => 'assests/amenities/about3.jpeg',
                    'title' => '',
                ],
                [
                    'thumbnail' => 'img/thumbs/42-29.jpg',
                    'image' => 'assests/amenities/about4.jpeg',
                    'title' => '',
                ]
                
            ]
           
        ],
        [   
            'class' => 'even items',
            'images' => [
                [
                    'thumbnail' => 'img/thumbs/90-113.jpg',
                    'image' => 'assests/amenities/about5.jpeg',
                    'title' => '',
                ],
                [
                    'thumbnail' => 'img/thumbs/42-29.jpg',
                    'image' => 'assests/amenities/about6.jpeg',
                    'title' => '',
                ]
                
            ]
           
        ],
   
    ],

    'how-to-purchase' => [
        'heading' => '<span>How To Purchase</span> Your Property?',
        'sections' => [
            [
                'heading' => strtoupper('Always do your research'),
                'image' => 'pc1.png',
                'description' => "Make sure you are aware of the latest real estate news and trend along with the market conditions that may affect your capital to make an informed decision about your investment. ",
            ],
            [
                'heading' => strtoupper('Find the right agent'),
                'image' => 'pc2.png',
                'description' => "Look for an agent who can introduce you to the potential property with transparency. Reality One Group offers industry experts who you can trust with your investments and get desired results.",
            ],
            [
                'heading' => strtoupper('Land assessment and negotiation'),
                'image' => 'pc3.png',
                'description' => "Ensure a real-time visit to the site with a land surveyor to get the best location for construction. Reality One Group offers the best sales agents to negotiate your favorite price. ",
            ],
            [
                'heading' => strtoupper('Token money and pay bank order'),
                'image' => 'pc4.png',
                'description' => "Always start the transaction with the partial token money and keep the bank in the loop to ensure a smooth and evidence-based process.",
            ],
        ]
    ],

    'reviews' => [
        'heading' => 'What Our Clients <span>Say About Us</span>',
        'sections' => [
            [
                'name' => 'Zafar Hussain',
                'image' => 'slider-img.png',
                'review' => "I recently approached Reality One Group and had an amazing experience. Their agents are knowledgeable and professional, and they helped me find the perfect home for my family. I highly recommend them.",
            ],
            [
                'name' => 'Muzzamil Khan',
                'image' => 'slider-img.png',
                'review' => "I was extremely impressed with Reality One Group and the service they provided. They were always available to answer my questions and made the process of buying a home as stress-free as possible. I would definitely use them again in the future.",
            ],
            [
                'name' => 'Zakir Khan',
                'image' => 'slider-img.png',
                'review' => "I had a great experience with Reality One Group. The agent I worked with was very responsive and always had my best interests in mind. I appreciated their honesty and integrity throughout the process.",
            ],
            [
                'name' => 'Muzzamil Khan',
                'image' => 'slider-img.png',
                'review' => "I was very happy with the service I received from Reality One Group. They were very patient with me as I navigated the complex process of buying a home for the first time. I would definitely recommend them to others.",
            ],
            [
                'name' => 'Muzzamil Khan',
                'image' => 'slider-img.png',
                'review' => "I was extremely pleased with the immediate and transparent response from sales agents. Their agents were knowledgeable, professional, and always went above and beyond to help me find the perfect home. I will be sure to use them again in the future for any real estate needs.",
            ],
        ]
    ],
    'financial-advisory' => [
        'sections' => [
            [
                'heading' => 'Real Estate Merger and Acquisitions ',
                'image' => 'advisory.png',
                'description' => "Mergers are rewarding, but an entry into a new market can be financially challenging too. At Reality One Group, we provide you with holistic financial consultations pertaining to the investment strategies involved in setting up production centers, initiating distribution channels, managing the old and new storage places, buying new machinery and equipment, and locating financially stable land. "
            ]
            
        ]
    ]




];