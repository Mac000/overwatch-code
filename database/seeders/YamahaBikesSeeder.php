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

        /** YBR 125-G **/
        DB::table('products')->insert([
            'name' => 'ybr125g',
            'formatted_name' => 'YBR 125G',
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

        /** YB 125-Z **/
        DB::table('products')->insert([
            'name' => 'ybz125',
            'formatted_name' => 'YB 125-Z',
            'data' => json_encode([
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
                'variants' => [
                    'metallic_black' => [
                        'price' => '210500',
                    ],
                    'vivid_cocktail_red' => [
                        'price' => '210500',
                    ],
                ],
                'base_price' =>  '210500',
                'currency' =>  'PKR',
                'category' =>  'bike',
                'manufacturer' =>  'Yamaha',
                'watched' =>  true,
            ]),
        ]);

        /** YB 125-Z DX **/
        DB::table('products')->insert([
            'name' => 'ybz125dx',
            'formatted_name' => 'YBZ 125 DX',
            'data' => json_encode([
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
                'variants' => [
                    'metallic_blue' => [
                        'price' => '226000',
                    ],
                    'metallic_black' => [
                        'price' => '226000',
                    ],
                    'vivid_cocktail_red' => [
                        'price' => '226000',
                    ],
                ],
                'base_price' =>  '226000',
                'currency' =>  'PKR',
                'category' =>  'bike',
                'manufacturer' =>  'Yamaha',
                'watched' =>  true,
            ]),
        ]);
    }
}
