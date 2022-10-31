<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MgVehiclesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** HS */
        DB::table('products')->insert([
            'name' => 'mg_hs',
            'formatted_name' => 'MG HS',
            'data' => json_encode([
                'variants' => [
                    config('app.default_variant_key') => [
                        'formatted_name' => 'MG HS',
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://mgmotors.com.pk/MG-HS',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                        ],
                        'files' => [],
                        'price' => config('app.price_not_available.na'),
                    ],
                ],
                'notes' => '',
                'notes_added_on' => '2022-05-31',
                'has_same_urls' => true, // [true, false]
                'has_same_files' => true, // [true, false]
                'base_price' =>  config('app.price_not_available.na'),
                'currency' =>  'PKR',
                'category' =>  'vehicle',
                'manufacturer' =>  'MG',
                'watched' =>  true,
            ]),
        ]);

        /** ZS */
        DB::table('products')->insert([
            'name' => 'mg_zs',
            'formatted_name' => 'MG ZS',
            'data' => json_encode([
                'variants' => [
                    config('app.default_variant_key') => [
                        'formatted_name' => 'MG ZS',
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://mgmotors.com.pk/MG-ZS',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                        ],
                        'files' => [],
                        'price' => config('app.price_not_available.na'),
                    ],
                ],
                'notes' => '',
                'notes_added_on' => '2022-05-31',
                'has_same_urls' => true, // [true, false]
                'has_same_files' => true, // [true, false]
                'base_price' =>  config('app.price_not_available.na'),
                'currency' =>  'PKR',
                'category' =>  'vehicle',
                'manufacturer' =>  'MG',
                'watched' =>  true,
            ]),
        ]);

        /** ZS-EV */
        DB::table('products')->insert([
            'name' => 'mg_zs_ev',
            'formatted_name' => 'MG ZS EV',
            'data' => json_encode([
                'variants' => [
                    config('app.default_variant_key') => [
                        'formatted_name' => 'MG ZS EV',
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://mgmotors.com.pk/MG-ZS-EV',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                        ],
                        'files' => [],
                        'price' => config('app.price_not_available.na'),
                    ],
                ],
                'notes' => '',
                'notes_added_on' => '2022-05-31',
                'has_same_urls' => true, // [true, false]
                'has_same_files' => true, // [true, false]
                'base_price' =>  config('app.price_not_available.na'),
                'currency' =>  'PKR',
                'category' =>  'vehicle',
                'manufacturer' =>  'MG',
                'watched' =>  true,
            ]),
        ]);

        /** HS-PHEV */
        DB::table('products')->insert([
            'name' => 'mg_hs_phev',
            'formatted_name' => 'MG HS PHEV',
            'data' => json_encode([
                'variants' => [
                    config('app.default_variant_key') => [
                        'formatted_name' => 'MG HS PHEV',
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://mgmotors.com.pk/MG-HS-PHEV',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                        ],
                        'files' => [],
                        'price' => config('app.price_not_available.na'),
                    ],
                ],
                'notes' => '',
                'notes_added_on' => '2022-05-31',
                'has_same_urls' => true, // [true, false]
                'has_same_files' => true, // [true, false]
                'base_price' =>  config('app.price_not_available.na'),
                'currency' =>  'PKR',
                'category' =>  'vehicle',
                'manufacturer' =>  'MG',
                'watched' =>  true,
            ]),
        ]);
    }
}
