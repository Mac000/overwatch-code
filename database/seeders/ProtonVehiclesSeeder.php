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
            'data' => json_encode([
                'variants' => [
                    'mt' => [
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.proton.com.pk/saga',
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
                        ],
                        'price' => '2349000',
                    ],
                    'at' => [
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.proton.com.pk/saga',
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
                        ],
                        'price' => '2499000',
                    ],
                    'ace' => [
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.proton.com.pk/saga',
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
            'data' => json_encode([
                'variants' => [
                    'executive_awd' => [
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.proton.com.pk/x70',
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
                        ],
                        'price' => '5400000',
                    ],
                    'premium_fwd' => [
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.proton.com.pk/x70',
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
