<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitedVehiclesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** Bravo */
        DB::table('products')->insert([
            'name' => 'bravi',
            'data' => json_encode([
                'variants' => [
                    'bravo' => [
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://unitedcars.com.pk/united-bravo-car/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.specs') => [],
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
                            config('app.files_keys.poster') => [],
                        ],
                        'price' => '1339000',
                    ],
                ],
                'notes' => 'No color and brochure information available on webpage.',
                'notes_added_on' => '2022-05-31',
                'has_same_urls' => true, // [true, false]
                'has_same_files' => true, // [true, false]
                'base_price' =>  '1339000',
                'currency' =>  'PKR',
                'category' =>  'vehicle',
                'manufacturer' =>  'United',
                'watched' =>  true,
            ]),
        ]);

        /** Alpha */
        DB::table('products')->insert([
            'name' => 'alpha',
            'data' => json_encode([
                'variants' => [
                    'alpha' => [
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://unitedcars.com.pk/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.specs') => [],
                            config('app.pages_keys.performance') => [],
                            config('app.pages_keys.design') => [],
                            config('app.pages_keys.comfort') => [],
                            config('app.pages_keys.technology') => [],
                            config('app.pages_keys.convenience') => [],
                        ],
                        'files' => [
                            config('app.files_keys.brochure') => [],
                            config('app.files_keys.poster') => [],
                        ],
                        'price' => '1559000',
                    ],
                ],
                'notes' => 'No color and brochure information available on webpage.',
                'notes_added_on' => '2022-05-31',
                'has_same_urls' => true, // [true, false]
                'has_same_files' => true, // [true, false]
                'base_price' =>  '1559000',
                'currency' =>  'PKR',
                'category' =>  'vehicle',
                'manufacturer' =>  'United',
                'watched' =>  true,
            ]),
        ]);
    }
}
