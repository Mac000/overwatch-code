<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProtonVehiclesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** Proton Saga */
        DB::table('products')->insert([
            'name' => 'saga',
            'formatted_name' => 'Saga',
            'data' => json_encode([
                'variants' => [
                    'mt' => [
                        'formatted_name' => 'MT',
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.proton.com.pk/saga',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                        ],
                        'files' => [
                            config('app.files_keys.brochure') => [],
                        ],
                        'price' => '2349000',
                    ],
                    'at' => [
                        'formatted_name' => 'AT',
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.proton.com.pk/saga',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                        ],
                        'files' => [
                            config('app.files_keys.brochure') => [],
                        ],
                        'price' => '2499000',
                    ],
                    'ace' => [
                        'formatted_name' => 'ACE',
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.proton.com.pk/saga',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                        ],
                        'files' => [
                            config('app.files_keys.brochure') => [],
                        ],
                        'price' => '2619000',
                    ],
                ],
                'notes' => 'Proton Saga is offered in many colors "Rosewood Maroon, Ruby Red, Snow White, Jet Gray,
                            Armour Silver, Quartz Black". Saga has three variants "MT, AT, Ace".
                            As per webpage content, specs and performance is same across all colors of a variant.',
                'notes_added_on' => '2022-05-30',
                'has_same_urls' => true, // [true, false]
                'has_same_files' => true, // [true, false]
                'base_price' =>  '2349000',
                'currency' =>  'PKR',
                'category' =>  'vehicle',
                'manufacturer' =>  'Proton',
                'watched' =>  true,
            ]),
        ]);

        /** X70 */
        DB::table('products')->insert([
            'name' => 'x70',
            'formatted_name' => 'X70',
            'data' => json_encode([
                'variants' => [
                    'executive_awd' => [
                        'formatted_name' => 'Executive AWD',
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.proton.com.pk/x70',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                        ],
                        'files' => [
                            config('app.files_keys.brochure') => [],
                        ],
                        'price' => '5400000',
                    ],
                    'premium_fwd' => [
                        'formatted_name' => 'Premium FWD',
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.proton.com.pk/x70',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                        ],
                        'files' => [
                            config('app.files_keys.brochure') => [],
                        ],
                        'price' => '5750000',
                    ],
                ],
                'notes' => 'Proton X70 is offered in many colors "Space Gray, Ruby Red, Snow White, Jet Gray,
                            Armour Silver". X70 has two variants "Executive AWD, Premium FWD".
                            As per webpage content, specs and performance is same across all colors of a variant.',
                'notes_added_on' => '2022-05-30',
                'has_same_urls' => true, // [true, false]
                'has_same_files' => true, // [true, false]
                'base_price' =>  '5400000',
                'currency' =>  'PKR',
                'category' =>  'vehicle',
                'manufacturer' =>  'Proton',
                'watched' =>  true,
            ]),
        ]);
    }
}
