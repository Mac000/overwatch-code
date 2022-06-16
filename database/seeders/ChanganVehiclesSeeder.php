<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChanganVehiclesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** Alsvin */
        DB::table('products')->insert([
            'name' => 'alsvin',
            'formatted_name' => 'Alsvin',
            'data' => json_encode([
                'variants' => [
                    'comfort_1-37l_mt' => [
                        'formatted_name' => 'Comfort 1.37L MT',
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://changan.com.pk/alsvin',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                        ],
                        'files' => [
                            config('app.files_keys.brochure') => [
                                'url' => 'https://changan.com.pk/upload/Alsvin-Brochure.pdf',
                                'name' => 'changan_alsvin_brochure',
                            ],
                        ],
                        'price' => '2894000',
                    ],
                    'dct_comfort_1.5l' => [
                        'formatted_name' => 'DCT Comfort 1.5L',
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://changan.com.pk/alsvin',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                        ],
                        'files' => [
                            config('app.files_keys.brochure') => [
                                'url' => 'https://changan.com.pk/upload/Alsvin-Brochure.pdf',
                                'name' => 'changan_alsvin_brochure',
                            ],
                        ],
                        'price' => '3149000',
                    ],
                    'lumiere' => [
                        'formatted_name' => 'Lumiere',
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://changan.com.pk/alsvin',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                        ],
                        'files' => [
                            config('app.files_keys.brochure') => [
                                'url' => 'https://changan.com.pk/upload/Alsvin-Brochure.pdf',
                                'name' => 'changan_alsvin_brochure',
                            ],
                        ],
                        'price' => '3344000',
                    ],
                ],
                'notes' => 'Changan Alsvin is offered in many colors "Galaxy Black, Space Gray, Lunar Silver, Stellar White
                            Nebula Blue, Cosmic Red". As per webpage content, There is no performance or specs difference
                            between colors of a variant.',
                'notes_added_on' => '2022-05-30',
                'has_same_urls' => true, // [true, false]
                'has_same_files' => true, // [true, false]
                'base_price' =>  '2894000',
                'currency' =>  'PKR',
                'category' =>  'vehicle',
                'manufacturer' =>  'Changan',
                'watched' =>  true,
            ]),
        ]);

        /** Oshan X7 */
        DB::table('products')->insert([
            'name' => 'oshan_x7',
            'formatted_name' => 'Oshan X7',
            'data' => json_encode([
                'variants' => [
                    'comfort' => [
                        'formatted_name' => 'Comfort',
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://changan.com.pk/oshan-x7/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                        ],
                        'files' => [
                            config('app.files_keys.brochure') => [
                                'url' => 'https://changan.com.pk/upload/Oshan-X7-Brochure.pdf',
                                'name' => 'changan_oshanx7_brochure',
                            ],
                        ],
                        'price' => '6050000',
                    ],
                    'future_sense' => [
                        'formatted_name' => 'FutureSense',
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://changan.com.pk/oshan-x7/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                        ],
                        'files' => [
                            config('app.files_keys.brochure') => [
                                'url' => 'https://changan.com.pk/upload/Oshan-X7-Brochure.pdf',
                                'name' => 'changan_oshanx7_brochure',
                            ],
                        ],
                        'price' => '6350000',
                    ],
                ],
                'notes' => 'Changan Oshan X7 is offered in many colors "Cosmic Red, Orion Blue, Space Gray, Lunar Silver,
                            Stellar White". As per webpage content, There is no performance or specs difference
                            between colors of a variant.',
                'notes_added_on' => '2022-05-30',
                'has_same_urls' => true, // [true, false]
                'has_same_files' => true, // [true, false]
                'base_price' =>  '6050000',
                'currency' =>  'PKR',
                'category' =>  'vehicle',
                'manufacturer' =>  'Changan',
                'watched' =>  true,
            ]),
        ]);

        /** Karvaan */
        DB::table('products')->insert([
            'name' => 'karvaan',
            'formatted_name' => 'Karvaan',
            'data' => json_encode([
                'variants' => [
                    'standard' => [
                        'formatted_name' => 'Standard',
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://changan.com.pk/karvaan-mpv/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                        ],
                        'files' => [
                            config('app.files_keys.brochure') => [
                                'url' => 'https://changan.com.pk/upload/Karvaan-Brochure.pdf',
                                'name' => 'changan_karvaan_brochure',
                            ],
                        ],
                        'price' => '2069000',
                    ],
                    'plus' => [
                        'formatted_name' => 'Plus',
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://changan.com.pk/karvaan-mpv/',
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
                                'url' => 'https://changan.com.pk/upload/Karvaan-Brochure.pdf',
                                'name' => 'changan_karvaan_brochure',
                            ],
                        ],
                        'price' => '6350000',
                    ],
                ],
                'notes' => 'Changan Karvaan is offered in many colors "Black, Gray,Silver, White".
                            As per webpage content, There is no performance or specs difference between colors of a variant.',
                'notes_added_on' => '2022-05-31',
                'has_same_urls' => true, // [true, false]
                'has_same_files' => true, // [true, false]
                'base_price' =>  '2069000',
                'currency' =>  'PKR',
                'category' =>  'vehicle',
                'manufacturer' =>  'Changan',
                'watched' =>  true,
            ]),
        ]);

        /** M9 Sherpa */
        DB::table('products')->insert([
            'name' => 'm9_sherpa',
            'formatted_name' => 'M9 Sherpa',
            'data' => json_encode([
                'variants' => [
                    'power_carry' => [
                        'formatted_name' => 'Power Carry',
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://changan.com.pk/m9-sherpa/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                        ],
                        'files' => [
                            config('app.files_keys.brochure') => [
                                'url' => 'https://changan.com.pk/upload/M9-Sherpa-Brochure.pdf',
                                'name' => 'changan_m9_sherpa_brochure',
                            ],
                        ],
                        'price' => '1784000',
                    ],
                ],
                'notes' => 'Changan M9 Sherpa is offered in only White color. As per webpage content, There is no
                            performance or specs difference between colors of a variant.',
                'notes_added_on' => '2022-05-31',
                'has_same_urls' => true, // [true, false]
                'has_same_files' => true, // [true, false]
                'base_price' =>  '1784000',
                'currency' =>  'PKR',
                'category' =>  'vehicle',
                'manufacturer' =>  'Changan',
                'watched' =>  true,
            ]),
        ]);
    }
}
