<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/spiro_gravgantry_child/user/themes/spiro_helium/gantry/theme.yaml',
    'modified' => 1581544415,
    'data' => [
        'details' => [
            'name' => 'Spiro_Helium'
        ],
        'configuration' => [
            'gantry' => [
                'platform' => 'grav',
                'engine' => 'nucleus'
            ],
            'theme' => [
                'parent' => 'g5_helium',
                'base' => 'gantry-theme://common',
                'file' => 'gantry-theme://include/theme.php',
                'class' => '\\Gantry\\Framework\\Theme'
            ],
            'fonts' => [
                'Raleway' => [
                    '900italic' => 'gantry-theme://fonts/raleway/raleway-blackitalic/raleway-blackitalic-webfont',
                    900 => 'gantry-theme://fonts/raleway/raleway-black/raleway-black-webfont',
                    '700italic' => 'gantry-theme://fonts/raleway/raleway-bold/raleway-bolditalic-webfont',
                    700 => 'gantry-theme://fonts/raleway/raleway-bold/raleway-bold-webfont',
                    '600italic' => 'gantry-theme://fonts/raleway/raleway-semibolditalic/raleway-semibolditalic-webfont',
                    600 => 'gantry-theme://fonts/raleway/raleway-semibold/raleway-semibold-webfont',
                    '500italic' => 'gantry-theme://fonts/raleway/raleway-mediumitalic/raleway-mediumitalic-webfont',
                    500 => 'gantry-theme://fonts/raleway/raleway-medium/raleway-medium-webfont',
                    '400italic' => 'gantry-theme://fonts/raleway/raleway-italic/raleway-italic-webfont',
                    400 => 'gantry-theme://fonts/raleway/raleway-regular/raleway-regular-webfont',
                    '200italic' => 'gantry-theme://fonts/raleway/raleway-lightitalic/raleway-lightitalic-webfont',
                    200 => 'gantry-theme://fonts/raleway/raleway-light/raleway-light-webfont'
                ],
                'Lato' => [
                    '900italic' => 'gantry-theme://fonts/lato/lato-blackitalic/lato-blackitalic-webfont',
                    900 => 'gantry-theme://fonts/lato/lato-black/lato-black-webfont',
                    '700italic' => 'gantry-theme://fonts/lato/lato-bold/lato-bolditalic-webfont',
                    700 => 'gantry-theme://fonts/lato/lato-bold/lato-bold-webfont',
                    '400italic' => 'gantry-theme://fonts/lato/lato-italic/lato-italic-webfont',
                    400 => 'gantry-theme://fonts/lato/lato-regular/lato-regular-webfont',
                    '200italic' => 'gantry-theme://fonts/lato/lato-lightitalic/lato-lightitalic-webfont',
                    200 => 'gantry-theme://fonts/lato/lato-light/lato-light-webfont'
                ]
            ],
            'css' => [
                'compiler' => '\\Gantry\\Component\\Stylesheet\\ScssCompiler',
                'target' => 'gantry-theme://css-compiled',
                'paths' => [
                    0 => 'gantry-theme://scss',
                    1 => 'gantry-engine://scss'
                ],
                'files' => [
                    0 => 'helium',
                    1 => 'helium-grav',
                    2 => 'custom'
                ],
                'persistent' => [
                    0 => 'helium',
                    1 => 'helium-grav'
                ],
                'overrides' => [
                    0 => 'custom'
                ]
            ],
            'dependencies' => [
                'gantry' => '5.4.0'
            ],
            'section-variations' => [
                'Padding Variations' => [
                    'section-vertical-paddings' => 'Section Vertical Paddings',
                    'section-horizontal-paddings' => 'Section Horizontal Paddings',
                    'section-vertical-paddings-large' => 'Large Vertical Paddings',
                    'section-horizontal-paddings-large' => 'Large Horizontal Paddings',
                    'section-vertical-paddings-small' => 'Small Vertical Paddings',
                    'section-horizontal-paddings-small' => 'Small Horizontal Paddings'
                ],
                'Utility' => [
                    'nomarginall' => 'No Margin',
                    'nopaddingall' => 'No Padding'
                ]
            ],
            'block-variations' => [
                'Title Variations' => [
                    'title1' => 'Title 1',
                    'title2' => 'Title 2',
                    'title-gradient' => 'Title Gradient',
                    'title-outline' => 'Title Outline'
                ],
                'Box Variations' => [
                    'box1' => 'Box 1',
                    'box2' => 'Box 2',
                    'box-gradient' => 'Box Gradient',
                    'box-outline' => 'Box Outline'
                ],
                'Effects' => [
                    'spaced' => 'Spaced',
                    'shadow' => 'Shadow',
                    'rounded' => 'Rounded'
                ],
                'Utility' => [
                    'center' => 'Center',
                    'title-center' => 'Centered Title',
                    'equal-height' => 'Equal Height',
                    'disabled' => 'Disabled',
                    'align-right' => 'Align Right',
                    'align-left' => 'Align Left',
                    'nomarginall' => 'No Margin',
                    'nopaddingall' => 'No Padding'
                ]
            ]
        ],
        'admin' => [
            'styles' => [
                'core' => [
                    0 => 'base',
                    1 => 'accent',
                    2 => 'font'
                ],
                'section' => [
                    0 => 'navigation',
                    1 => 'header',
                    2 => 'intro',
                    3 => 'features',
                    4 => 'utility',
                    5 => 'above',
                    6 => 'testimonials',
                    7 => 'expanded',
                    8 => 'main',
                    9 => 'sidebar',
                    10 => 'footer',
                    11 => 'offcanvas'
                ],
                'configuration' => [
                    0 => 'breakpoints'
                ]
            ]
        ]
    ]
];
