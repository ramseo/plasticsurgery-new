<?php

return [
   'app' => [
       'title' => 'General',
       'desc'  => 'All the general settings for application.',
       'icon'  => 'fas fa-cube',

       'elements' => [
        //    [
        //        'type'  => 'text', // input fields type
        //        'data'  => 'string', // data type, string, int, boolean
        //        'name'  => 'app_name', // unique name for field
        //        'label' => 'App Name', // you know what label it is
        //        'rules' => 'required|min:2|max:50', // validation rule of laravel
        //        'class' => '', // any class for input
        //        'value' => 'wed.in', // default value if you want
        //    ]
        //    ,
        //    [
        //        'type'  => 'text', // input fields type
        //        'data'  => 'string', // data type, string, int, boolean
        //        'name'  => 'footer_text', // unique name for field
        //        'label' => 'Footer Text', // you know what label it is
        //        'rules' => 'required|min:2', // validation rule of laravel
        //        'class' => '', // any class for input
        //        'value' => '<a href="https://wed.in/">Built with ♥</a>', // default value if you want
        //    ],
           [
               'type'  => 'checkbox', // input fields type
               'data'  => 'text', // data type, string, int, boolean
               'name'  => 'show_copyright', // unique name for field
               'label' => 'Show Copyright', // you know what label it is
               'rules' => '', // validation rule of laravel
               'class' => '', // any class for input
               'value' => '1', // default value if you want
           ],
           [
            'type'  => 'text', // input fields type
            'data'  => 'string', // data type, string, int, boolean
            'name'  => 'copyright_text', // unique name for field
            'label' => 'Copyright Text', // you know what label it is
            'rules' => '', // validation rule of laravel
            'class' => '', // any class for input
            'value' => '', // default value if you want
        ],
       ],
   ],
    'email' => [
        'title' => 'Email & Contacts',
        'desc'  => 'Email settings',
        'icon'  => 'fas fa-envelope',

        'elements' => [
            [
                'type'  => 'email', // input fields type
                'data'  => 'string', // data type, string, int, boolean
                'name'  => 'email', // unique name for field
                'label' => 'Email', // you know what label it is
                'rules' => '', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '', //info@example.com default value if you want
            ],
            [
                'type'  => 'email', // input fields type
                'data'  => 'string', // data type, string, int, boolean
                'name'  => 'support_email', // unique name for field
                'label' => 'Support Email', // you know what label it is
                'rules' => '', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '', //info@example.com default value if you want
            ],
            [
                'type'  => 'email', // input fields type
                'data'  => 'string', // data type, string, int, boolean
                'name'  => 'vendor_support_email', // unique name for field
                'label' => 'Support Email (For Vendors)', // you know what label it is
                'rules' => '', //required|email validation rule of laravel
                'class' => '', // any class for input
                'value' => '', //info@example.com default value if you want
            ],
            [
                'type'  => 'text', // input fields type
                'data'  => 'string', // data type, string, int, boolean
                'name'  => 'support_telephone', // unique name for field
                'label' => 'Support Phone', // you know what label it is
                'rules' => '', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '', //info@example.com default value if you want
            ],
            [
                'type'  => 'text', // input fields type
                'data'  => 'string', // data type, string, int, boolean
                'name'  => 'vendor_support_telephone', // unique name for field
                'label' => 'Support Phone (For Vendors)', // you know what label it is
                'rules' => '', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '', //info@example.com default value if you want
            ],
        ],

    ],
    'social' => [
        'title' => 'Social Profiles',
        'desc'  => 'Link of all the social profiles.',
        'icon'  => 'fas fa-users',

        'elements' => [
            [
                'type'  => 'text', // input fields type
                'data'  => 'string', // data type, string, int, boolean
                'name'  => 'facebook_url', // unique name for field
                'label' => 'Facebook Page URL', // you know what label it is
                'rules' => '', // required|nullable|max:191 validation rule of laravel
                'class' => '', // any class for input
                'value' => '#', // default value if you want
            ],
            [
                'type'  => 'text', // input fields type
                'data'  => 'string', // data type, string, int, boolean
                'name'  => 'twitter_url', // unique name for field
                'label' => 'Twitter Profile URL', // you know what label it is
                'rules' => '', // required|nullable|max:191 validation rule of laravel
                'class' => '', // any class for input
                'value' => '#', // default value if you want
            ],
            [
                'type'  => 'text', // input fields type
                'data'  => 'string', // data type, string, int, boolean
                'name'  => 'instagram_url', // unique name for field
                'label' => 'Instagram Account URL', // you know what label it is
                'rules' => '', //required|nullable|max:191 validation rule of laravel
                'class' => '', // any class for input
                'value' => '#', // default value if you want
            ],
           [
               'type'  => 'text', // input fields type
               'data'  => 'string', // data type, string, int, boolean
               'name'  => 'linkedin_url', // unique name for field
               'label' => 'LinkedIn URL', // you know what label it is
               'rules' => 'required|nullable|max:191', // validation rule of laravel
               'class' => '', // any class for input
               'value' => '#', // default value if you want
           ],
            [
                'type'  => 'text', // input fields type
                'data'  => 'string', // data type, string, int, boolean
                'name'  => 'youtube_url', // unique name for field
                'label' => 'Youtube Channel URL', // you know what label it is
                'rules' => '', //required|nullable|max:191 validation rule of laravel
                'class' => '', // any class for input
                'value' => '#', // default value if you want
            ],
            [
                'type'  => 'text', // input fields type
                'data'  => 'string', // data type, string, int, boolean
                'name'  => 'pinterest_url', // unique name for field
                'label' => 'Pinterest', // you know what label it is
                'rules' => '', //required|nullable|max:191 validation rule of laravel
                'class' => '', // any class for input
                'value' => '#', // default value if you want
            ],
        ],

    ],
    'meta' => [
        'title' => 'Meta ',
        'desc'  => 'Application Meta Data',
        'icon'  => 'fas fa-globe-asia',

        'elements' => [
            [
                'type'  => 'text', // input fields type
                'data'  => 'text', // data type, string, int, boolean
                'name'  => 'meta_site_name', // unique name for field
                'label' => 'Meta Site Name', // you know what label it is
                'rules' => '', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '', // default value if you want
            ],
            [
                'type'  => 'text', // input fields type
                'data'  => 'text', // data type, string, int, boolean
                'name'  => 'meta_description', // unique name for field
                'label' => 'Meta Description', // you know what label it is
                'rules' => '', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '', // default value if you want
            ],
            [
                'type'  => 'text', // input fields type
                'data'  => 'text', // data type, string, int, boolean
                'name'  => 'meta_keyword', // unique name for field
                'label' => 'Meta Keyword', // you know what label it is
                'rules' => '', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '', // default value if you want
            ],
            [
                'type'  => 'text', // input fields type
                'data'  => 'text', // data type, string, int, boolean
                'name'  => 'meta_image', // unique name for field
                'label' => 'Meta Image', // you know what label it is
                'rules' => '', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '', //img/default_banner.jpg default value if you want
            ],
//            [
//                'type'  => 'text', // input fields type
//                'data'  => 'text', // data type, string, int, boolean
//                'name'  => 'meta_fb_app_id', // unique name for field
//                'label' => 'Meta Facebook App Id', // you know what label it is
//                'rules' => '', // validation rule of laravel
//                'class' => '', // any class for input
//                'value' => '', // default value if you want
//            ],
//            [
//                'type'  => 'text', // input fields type
//                'data'  => 'text', // data type, string, int, boolean
//                'name'  => 'meta_twitter_site', // unique name for field
//                'label' => 'Meta Twitter Site Account', // you know what label it is
//                'rules' => '', // validation rule of laravel
//                'class' => '', // any class for input
//                'value' => '', // default value if you want
//            ],
//            [
//                'type'  => 'text', // input fields type
//                'data'  => 'text', // data type, string, int, boolean
//                'name'  => 'meta_twitter_creator', // unique name for field
//                'label' => 'Meta Twitter Creator Account', // you know what label it is
//                'rules' => '', // validation rule of laravel
//                'class' => '', // any class for input
//                'value' => '', // default value if you want
//            ],
        ],
    ],
    'analytics' => [
        'title' => 'Analytics',
        'desc'  => 'Application Analytics',
        'icon'  => 'fas fa-chart-line',

        'elements' => [
            [
                'type'  => 'textarea', // input fields type
                'data'  => 'string', // data type, string, int, boolean
                'name'  => 'google_analytics', // unique name for field
                'label' => 'Google Analytics', // you know what label it is
                'rules' => '', // validation rule of laravel
                'class' => '', // any class for input
                // 'value' => '123', // any class for input
                'value' => '', // default value if you want
                'help'     => 'Paste the tracking code in this field.', // Help text for the input field.
                'display'  => 'raw', // Help text for the input field.
            ],
        ],

    ],
    'home' => [
        'title' => 'Homepage',
        'desc'  => 'Contents',
        'icon'  => 'fas fa-chart-line',

        'elements' => [
                        [
                'type'  => 'text', // input fields type
                'data'  => 'text', // data type, string, int, boolean
                'name'  => 'homepage_title', // unique name for field
                'label' => 'Homepage Title', // you know what label it is
                'rules' => '', // validation rule of laravel
                'class' => '', // any class for input
                'value' => 'Turn your dream wedding into reality', // default value if you want
            ],
            [
                'type'  => 'text', // input fields type
                'data'  => 'text', // data type, string, int, boolean
                'name'  => 'homepage_sub_title', // unique name for field
                'label' => 'Homepage Sub Title', // you know what label it is
                'rules' => '', // validation rule of laravel
                'class' => '', // any class for input
                'value' => 'Choose your wedding style with the best vendors all across India', // default value if you want
            ],
            [
                'type'  => 'textarea', // input fields type
                'data'  => 'string', // data type, string, int, boolean
                'name'  => 'about_us', // unique name for field
                'label' => 'About Us', // you know what label it is
                'rules' => '', // validation rule of laravel
                'class' => '', // any class for input
                'value' => ' Wed.in is a platform for all Indian Brides and Grooms where we provide all wedding vendors at one place for easy interaction, making choices easy by choosing among the best. It saves your valuable time as you can see all the top rated vendors and make personal calls or meet them and discuss every detail with them all on a single platform.
                            <br>
                            <br>
                            <br>
                            We are a team of dedicated people who make every possible effort to provide you with the best services to satisfy you. We create memories for couples and make their wedding of dreams come true. We bring smiles to their faces by creating what they truly desire and make their special day marvelous.', // default value if you want
                'help'     => '', // Help text for the input field.
                'display'  => 'raw', // Help text for the input field.
            ],
            [
                'type'  => 'text', // input fields type
                'data'  => 'text', // data type, string, int, boolean
                'name'  => 'about_link', // unique name for field
                'label' => 'About Link', // you know what label it is
                'rules' => '', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '', // default value if you want
            ],
        ],

    ],
    'vendor' => [
        'title' => 'Vendor',
        'desc'  => 'Vendor Config',
        'icon'  => 'fas fa-chart-line',

        'elements' => [
            [
                'type'  => 'text', // input fields type
                'data'  => 'text', // data type, string, int, boolean
                'name'  => 'vendor_max_album', // unique name for field
                'label' => 'how many album require.', // you know what label it is
                'rules' => '', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '', // default value if you want
            ],
            [
                'type'  => 'text', // input fields type
                'data'  => 'text', // data type, string, int, boolean
                'name'  => 'vendor_max_image_album', // unique name for field
                'label' => 'how many image require in each album.', // you know what label it is
                'rules' => '', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '', // default value if you want
            ],
        ],

    ],
    'misc' => [
        'title' => 'Miscellaneous',
        'desc'  => 'Miscellaneous',
        'icon'  => 'fas fa-chart-line',

        'elements' => [
            [
                'type'  => 'textarea', // input fields type
                'data'  => 'string', // data type, string, int, boolean
                'name'  => 'footer_tagline', // unique name for field
                'label' => 'Footer Tagline', // you know what label it is
                'rules' => '', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '', // default value if you want
                'help'     => '', // Help text for the input field.
                'display'  => 'raw', // Help text for the input field.
            ],
            [
                'type'  => 'textarea', // input fields type
                'data'  => 'string', // data type, string, int, boolean
                'name'  => 'footer_about_us', // unique name for field
                'label' => 'Footer About Us Content', // you know what label it is
                'rules' => '', // validation rule of laravel
                'class' => '', // any class for input
                'value' => '', // default value if you want
                'help'     => '', // Help text for the input field.
                'display'  => 'raw', // Help text for the input field.
            ],
        ],

    ],
];
