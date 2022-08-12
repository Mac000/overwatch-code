<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class YamahaBikesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** YBR 125 **/
        DB::table('products')->insert([
            'name' => 'ybr125',
            'formatted_name' => 'YBR 125',
            'data' => json_encode([
                'variants' => [
                    'metallic_black' => [
                        'formatted_name' => 'Metallic Black',
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.yamaha-motor.com.pk/360-ybr-125/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.specs') => [
                                'url' => 'https://www.yamaha-motor.com.pk/technical-specifications-ybr125/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.performance') => [
                                'url' => 'https://www.yamaha-motor.com.pk/performance-ybr125/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.design') => [
                                'url' => 'https://www.yamaha-motor.com.pk/design-ybr125/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.comfort') => [
                                'url' => 'https://www.yamaha-motor.com.pk/comfort-ybr125/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                        ],
                        'files' => [
                            config('app.files_keys.brochure') => [
                                'url' => 'https://www.yamaha-motor.com.pk/wp-content/uploads/2021/04/Yamaha-YBR125-2021-Brochure.pdf',
                                'name' => 'ybr125_brochure.pdf',
                            ],
                        ],
                        'price' => '300000',
                    ],
                    'vivid_cocktail_red' => [
                        'formatted_name' => 'Vivid Cocktail Red',
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.yamaha-motor.com.pk/360-ybr-125/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.specs') => [
                                'url' => 'https://www.yamaha-motor.com.pk/technical-specifications-ybr125/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.performance') => [
                                'url' => 'https://www.yamaha-motor.com.pk/performance-ybr125/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.design') => [
                                'url' => 'https://www.yamaha-motor.com.pk/design-ybr125/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.comfort') => [
                                'url' => 'https://www.yamaha-motor.com.pk/comfort-ybr125/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                        ],
                        'files' => [
                            config('app.files_keys.brochure') => [
                                'url' => 'https://www.yamaha-motor.com.pk/wp-content/uploads/2021/04/Yamaha-YBR125-2021-Brochure.pdf',
                                'name' => 'ybr125_brochure.pdf',
                            ],
                        ],
                        'price' => '300000',
                    ],
                    'racing_blue' => [
                        'formatted_name' => 'Racing Blue',
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.yamaha-motor.com.pk/360-ybr-125/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.specs') => [
                                'url' => 'https://www.yamaha-motor.com.pk/technical-specifications-ybr125/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.performance') => [
                                'url' => 'https://www.yamaha-motor.com.pk/performance-ybr125/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.design') => [
                                'url' => 'https://www.yamaha-motor.com.pk/design-ybr125/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.comfort') => [
                                'url' => 'https://www.yamaha-motor.com.pk/comfort-ybr125/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                        ],
                        'files' => [
                            config('app.files_keys.brochure') => [
                                'url' => 'https://www.yamaha-motor.com.pk/wp-content/uploads/2021/04/Yamaha-YBR125-2021-Brochure.pdf',
                                'name' => 'ybr125_brochure.pdf',
                            ],
                        ],
                        'price' => '300000',
                    ],
                ],
                'images' => json_encode([
                    [
                        'name' => '',
                        'featured' => true,
                        'src' => '',
                    ],
                    [
                        'name' => '',
                        'featured' => false,
                        'src' => '',
                    ]
                ]),
                'notes' => '',
                'notes_added_on' => '2022-05-31',
                'has_same_urls' => true, // [true, false]
                'has_same_files' => true, // [true, false]
                'base_price' =>  '300000',
                'currency' =>  'PKR',
                'category' =>  'bike',
                'manufacturer' =>  'Yamaha',
                'watched' =>  true,
            ]),
        ]);

        /** YBR 125-G **/
        DB::table('products')->insert([
            'name' => 'ybr125g',
            'formatted_name' => 'YBR 125 G',
            'data' => json_encode([
                'variants' => [
                    'metallic_black' => [
                        'formatted_name' => 'Metallic Black',
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.yamaha-motor.com.pk/360-ybr-125-g/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.specs') => [
                                'url' => 'https://www.yamaha-motor.com.pk/technical-specifications-ybr125g/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.performance') => [
                                'url' => 'https://www.yamaha-motor.com.pk/performance-ybr125g/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.design') => [
                                'url' => 'https://www.yamaha-motor.com.pk/design-ybr125g/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.comfort') => [
                                'url' => 'https://www.yamaha-motor.com.pk/comfort-ybr125g/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                        ],
                        'files' => [
                            config('app.files_keys.brochure') => [
                                'url' => 'https://www.yamaha-motor.com.pk/wp-content/uploads/2022/03/Yamaha-YBR125G-Flyer.pdf',
                                'name' => 'ybr125_brochure.pdf',
                            ],
                        ],
                        'price' => '232000',
                    ],
                    'vivid_cocktail_red' => [
                        'formatted_name' => 'Vivid Cocktail Red',
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.yamaha-motor.com.pk/360-ybr-125-g/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.specs') => [
                                'url' => 'https://www.yamaha-motor.com.pk/technical-specifications-ybr125g/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.performance') => [
                                'url' => 'https://www.yamaha-motor.com.pk/performance-ybr125g/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.design') => [
                                'url' => 'https://www.yamaha-motor.com.pk/design-ybr125g/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.comfort') => [
                                'url' => 'https://www.yamaha-motor.com.pk/comfort-ybr125g/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                        ],
                        'files' => [
                            config('app.files_keys.brochure') => [
                                'url' => 'https://www.yamaha-motor.com.pk/wp-content/uploads/2022/03/Yamaha-YBR125G-Flyer.pdf',
                                'name' => 'ybr125_brochure.pdf',
                            ],
                        ],
                        'price' => '232000',
                    ],
                    'matt_dark_gray' => [
                        'formatted_name' => 'Matt Dark Gray',
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.yamaha-motor.com.pk/360-ybr-125-g/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.specs') => [
                                'url' => 'https://www.yamaha-motor.com.pk/technical-specifications-ybr125g/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.performance') => [
                                'url' => 'https://www.yamaha-motor.com.pk/performance-ybr125g/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.design') => [
                                'url' => 'https://www.yamaha-motor.com.pk/design-ybr125g/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.comfort') => [
                                'url' => 'https://www.yamaha-motor.com.pk/comfort-ybr125g/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                        ],
                        'files' => [
                            config('app.files_keys.brochure') => [
                                'url' => 'https://www.yamaha-motor.com.pk/wp-content/uploads/2022/03/Yamaha-YBR125G-Flyer.pdf',
                                'name' => 'ybr125_brochure.pdf',
                            ],
                        ],
                        'price' => '315500',
                    ],
                ],
                'images' => json_encode([
                    [
                        'name' => '',
                        'featured' => true,
                        'src' => '',
                    ],
                    [
                        'name' => '',
                        'featured' => false,
                        'src' => '',
                    ]
                ]),
                'notes' => '',
                'notes_added_on' => '2022-08-11',
                'has_same_urls' => true, // [true, false]
                'has_same_files' => true, // [true, false]
                'base_price' =>  '312500',
                'currency' =>  'PKR',
                'category' =>  'bike',
                'manufacturer' =>  'Yamaha',
                'watched' =>  true,
            ]),
        ]);

        /** YB 125-Z **/
        DB::table('products')->insert([
            'name' => 'ybr125z',
            'formatted_name' => 'YBR 125 Z',
            'data' => json_encode([
                'variants' => [
                    'metallic_black' => [
                        'formatted_name' => 'Metallic Black',
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.yamaha-motor.com.pk/360-yb-125-z/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.specs') => [
                                'url' => 'https://www.yamaha-motor.com.pk/technical-specifications-yb125z/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.technology') => [
                                'url' => 'https://www.yamaha-motor.com.pk/advanced-technology-yb125z/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.comfort') => [
                                'url' => 'https://www.yamaha-motor.com.pk/comfort-yb125z/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.convenience') => [
                                'url' => 'https://www.yamaha-motor.com.pk/convenience-yb125z/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                        ],
                        'files' => [
                            config('app.files_keys.brochure') => [
                                'url' => 'https://www.yamaha-motor.com.pk/wp-content/uploads/2022/02/F-Yamaha-YB125Z-A4-Brochure.pdf',
                                'name' => 'ybr125z_brochure.pdf',
                            ],
                        ],
                        'price' => '273000',
                    ],
                    'vivid_cocktail_red' => [
                        'formatted_name' => 'Vivid Cocktail Red',
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.yamaha-motor.com.pk/360-yb-125-z/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.specs') => [
                                'url' => 'https://www.yamaha-motor.com.pk/technical-specifications-yb125z/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.technology') => [
                                'url' => 'https://www.yamaha-motor.com.pk/advanced-technology-yb125z/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.comfort') => [
                                'url' => 'https://www.yamaha-motor.com.pk/comfort-yb125z/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.convenience') => [
                                'url' => 'https://www.yamaha-motor.com.pk/convenience-yb125z/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                        ],
                        'files' => [
                            config('app.files_keys.brochure') => [
                                'url' => 'https://www.yamaha-motor.com.pk/wp-content/uploads/2022/02/F-Yamaha-YB125Z-A4-Brochure.pdf',
                                'name' => 'ybr125z_brochure.pdf',
                            ],
                        ],
                        'price' => '273000',
                    ],
                ],
                'images' => json_encode([
                    [
                        'name' => '',
                        'featured' => true,
                        'src' => '',
                    ],
                    [
                        'name' => '',
                        'featured' => false,
                        'src' => '',
                    ]
                ]),
                'notes' => '',
                'notes_added_on' => '2022-08-11',
                'has_same_urls' => true, // [true, false]
                'has_same_files' => true, // [true, false]
                'base_price' =>  '273000',
                'currency' =>  'PKR',
                'category' =>  'bike',
                'manufacturer' =>  'Yamaha',
                'watched' =>  true,
            ]),
        ]);

        /** YB 125-Z DX **/
        DB::table('products')->insert([
            'name' => 'ybr125zdx',
            'formatted_name' => 'YBR 125-Z DX',
            'data' => json_encode([
                'variants' => [
                    'metallic_black' => [
                        'formatted_name' => 'Metallic Black',
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.yamaha-motor.com.pk/360-yb-125-z-dx/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.specs') => [
                                'url' => 'https://www.yamaha-motor.com.pk/technical-specifications-yb125z-dx/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.technology') => [
                                'url' => 'https://www.yamaha-motor.com.pk/advanced-technology-yb125z-dx/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.comfort') => [
                                'url' => 'https://www.yamaha-motor.com.pk/comfort-yb125z-dx/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.convenience') => [
                                'url' => 'https://www.yamaha-motor.com.pk/convenience-yb125z-dx/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                        ],
                        'files' => [
                            config('app.files_keys.brochure') => [
                                'url' => 'https://www.yamaha-motor.com.pk/wp-content/uploads/2022/02/Yamaha-YB125Z-DX-A4-Brochure.pdf',
                                'name' => 'ybr125z_dx_brochure.pdf',
                            ],
                        ],
                        'price' => '292500',
                    ],
                    'vivid_cocktail_red' => [
                        'formatted_name' => 'Vivid Cocktail Red',
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.yamaha-motor.com.pk/360-yb-125-z-dx/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.specs') => [
                                'url' => 'https://www.yamaha-motor.com.pk/technical-specifications-yb125z-dx/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.technology') => [
                                'url' => 'https://www.yamaha-motor.com.pk/advanced-technology-yb125z-dx/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.comfort') => [
                                'url' => 'https://www.yamaha-motor.com.pk/comfort-yb125z-dx/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.convenience') => [
                                'url' => 'https://www.yamaha-motor.com.pk/convenience-yb125z-dx/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                        ],
                        'files' => [
                            config('app.files_keys.brochure') => [
                                'url' => 'https://www.yamaha-motor.com.pk/wp-content/uploads/2022/02/Yamaha-YB125Z-DX-A4-Brochure.pdf',
                                'name' => 'ybr125z_dx_brochure.pdf',
                            ],
                        ],
                        'price' => '292500',
                    ],
                    'metallic_blue' => [
                        'formatted_name' => 'Metallic Blue',
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.yamaha-motor.com.pk/360-yb-125-z-dx/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.specs') => [
                                'url' => 'https://www.yamaha-motor.com.pk/technical-specifications-yb125z-dx/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.technology') => [
                                'url' => 'https://www.yamaha-motor.com.pk/advanced-technology-yb125z-dx/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.comfort') => [
                                'url' => 'https://www.yamaha-motor.com.pk/comfort-yb125z-dx/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.convenience') => [
                                'url' => 'https://www.yamaha-motor.com.pk/convenience-yb125z-dx/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                        ],
                        'files' => [
                            config('app.files_keys.brochure') => [
                                'url' => 'https://www.yamaha-motor.com.pk/wp-content/uploads/2022/02/Yamaha-YB125Z-DX-A4-Brochure.pdf',
                                'name' => 'ybr125z_dx_brochure.pdf',
                            ],
                        ],
                        'price' => '292500',
                    ],
                ],
                'images' => json_encode([
                    [
                        'name' => '',
                        'featured' => true,
                        'src' => '',
                    ],
                    [
                        'name' => '',
                        'featured' => false,
                        'src' => '',
                    ]
                ]),
                'notes' => '',
                'notes_added_on' => '2022-08-11',
                'has_same_urls' => true, // [true, false]
                'has_same_files' => true, // [true, false]
                'base_price' =>  '292500',
                'currency' =>  'PKR',
                'category' =>  'bike',
                'manufacturer' =>  'Yamaha',
                'watched' =>  true,
            ]),
        ]);
    }
}
