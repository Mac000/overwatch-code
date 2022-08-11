<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Perhaps I should take keys of data property from a config file so there's only a single place
        // to add or update keys. This way, I can maintain consistency.

        // Keep product names lowercase, use underscores instead of whitespace
        // you can capitalize and trim underscores for display
//        DB::table('products')->insert([
//            'name' => 'ybr125',
//            'data' => json_encode([
//                'pages' => [
//                    config('app.pages_keys.main') => 'https://www.yamaha-motor.com.pk/360-ybr-125/',
//                    config('app.pages_keys.specs') => 'https://www.yamaha-motor.com.pk/technical-specifications-ybr125/',
//                    config('app.pages_keys.performance') => 'https://www.yamaha-motor.com.pk/performance-ybr125/',
//                    config('app.pages_keys.design') => 'https://www.yamaha-motor.com.pk/design-ybr125/',
//                    config('app.pages_keys.comfort') => 'https://www.yamaha-motor.com.pk/comfort-ybr125/',
//                ],
//                'price' =>  '23200000',
//                'currency' =>  'PKR',
//                'category' =>  'bike',
//                'manufacturer' =>  'Yamaha',
//                'watched' =>  true,
//                'recent_snapshot_attempt' => null,
//                'recent_snapshot_at' => null,
//                'recent_snapshot_url' => null,
//            ]),
//        ]);

        DB::table('products')->insert([
            'name' => '',
            'formatted_name' => '',
            'data' => json_encode([
                'variants' => [
                    '' => [
                        'formatted_name' => '',
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => '',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.price') => [],
                            config('app.pages_keys.specs') => [],
                            config('app.pages_keys.exterior') => [],
                            config('app.pages_keys.interior') => [],
                            config('app.pages_keys.performance') => [],
                            config('app.pages_keys.design') => [],
                            config('app.pages_keys.comfort') => [],
                            config('app.pages_keys.technology') => [],
                            config('app.pages_keys.convenience') => [],
                        ],
                        'files' => [
                            config('app.files_keys.brochure') => [
                                'url' => '',
                                'name' => '',
                            ],
                            config('app.files_keys.price') => [
                                'url' => '',
                                'name' => '',
                            ],
                            config('app.files_keys.poster') => [
                                'url' => '',
                                'name' => '',
                            ],
                        ],
                        'price' => '',
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
                'base_price' =>  '',
                'currency' =>  'PKR',
                'category' =>  'vehicle',
                'manufacturer' =>  '',
                'watched' =>  true,
            ]),
        ]);
    }
}
