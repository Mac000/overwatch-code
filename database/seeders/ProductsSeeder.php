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
            'name' => 'ybr125',
            'data' => json_encode([
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
                'variants' => [
                    'metallic_black' => [
                        'price' => '232000',
                    ],
                    'vivid_cocktail_red' => [
                        'price' => '232000',
                    ],
                    'matt_dark_gray' => [
                        'price' => '232000',
                    ]
                ],
                'base_price' =>  '232000',
                'currency' =>  'PKR',
                'category' =>  'bike',
                'manufacturer' =>  'Yamaha',
                'watched' =>  true,
            ]),
        ]);

        DB::table('products')->insert([
            'name' => 'ybr125g',
            'data' => json_encode([
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
                'variants' => [
                    'metallic_black' => [
                        'price' => '242000',
                    ],
                    'vivid_cocktail_red' => [
                        'price' => '242000',
                    ],
                    'matt_dark_gray' => [
                        'price' => '245000',
                    ]
                ],
                'base_price' =>  '242000',
                'currency' =>  'PKR',
                'category' =>  'bike',
                'manufacturer' =>  'Yamaha',
                'watched' =>  true,
            ]),
        ]);


//        DB::table('products')->insert([
//            'name' => '',
//            'data' => json_encode([
//                'pages' => [
//                    config('app.pages_keys.main') => [
//                        'url' => '',
//                        'recent_snapshot_attempt' => null,
//                        'recent_snapshot_attempted_at' => null,
//                    ],
//                    config('app.pages_keys.specs') => [],
//                    config('app.pages_keys.performance') => [],
//                    config('app.pages_keys.design') => [],
//                    config('app.pages_keys.comfort') => [],
//                ],
//                'price' =>  '',
//                'currency' =>  'PKR',
//                'category' =>  '',
//                'manufacturer' =>  '',
//                'watched' =>  true,
//            ]),
//        ]);
    }
}
