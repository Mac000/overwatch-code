<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HondaVehiclesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** City 1.2LS */
        DB::table('products')->insert([
            'name' => 'city_1.2ls',
            'formatted_name' => 'Honda City 1.2LS',
            'data' => json_encode([
                'variants' => [
                    '1-2ls_cvt' => [
                        'formatted_name' => '1.2LS CVT',
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.honda.com.pk/city1.2l.php',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                        ],
                        'files' => [
                            config('app.files_keys.brochure') => [
                                'url' => 'https://www.honda.com.pk/forms/Brochure-Honda-City.pdf',
                                'name' => 'hona_city_12ls_brochure',
                            ],
                        ],
                        'price' => '3389000',
                    ],
                ],
                'notes' => '',
                'notes_added_on' => '2022-05-31',
                'has_same_urls' => true, // [true, false]
                'has_same_files' => true, // [true, false]
                'base_price' =>  '3264000',
                'currency' =>  'PKR',
                'category' =>  'vehicle',
                'manufacturer' =>  'Honda',
                'watched' =>  true,
            ]),
        ]);

        /** City 1.5LS */
        DB::table('products')->insert([
            'name' => 'city_1.5ls',
            'formatted_name' => 'Honda City 1.5LS',
            'data' => json_encode([
                'variants' => [
                    '1-5ls_cvt' => [
                        'formatted_name' => '1.5LS CVT',
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.honda.com.pk/city1.5l.php',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                        ],
                        'files' => [
                            config('app.files_keys.brochure') => [
                                'url' => 'https://www.honda.com.pk/forms/Brochure-Honda-City.pdf',
                                'name' => 'honda_city_15ls_brochure',
                            ],
                        ],
                        'price' => '3589000',
                    ],
                ],
                'notes' => 'City 1.5LS is offered in many colors "Carnelian Red, Urban Titanium, Tafetta White, Lunar
                            Silver Metallic, Modern Steel Metallic, Sporty Blue Metallic, Crystal Black Pearl".
                            As per webpage content, there is no specs or performance difference across colors of a variant.',
                'notes_added_on' => '2022-05-31',
                'has_same_urls' => true, // [true, false]
                'has_same_files' => true, // [true, false]
                'base_price' =>  '3589000',
                'currency' =>  'PKR',
                'category' =>  'vehicle',
                'manufacturer' =>  'Honda',
                'watched' =>  true,
            ]),
        ]);

        /** City Aspire */
        DB::table('products')->insert([
            'name' => 'city_aspire_1.5las',
            'formatted_name' => 'City Aspire 1.5LAS',
            'data' => json_encode([
                'variants' => [
                    '1-5las_cvt' => [
                        'formatted_name' => '1.5LAS CVT',
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.honda.com.pk/cityaspire.php',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                        ],
                        'files' => [
                            config('app.files_keys.brochure') => [
                                'url' => 'https://www.honda.com.pk/forms/Brochure-Honda-City.pdf',
                                'name' => 'honda_city_brochure',
                            ],
                        ],
                        'price' => '3749000',
                    ],
                ],
                'notes' => 'City Aspire 1.5LAS is offered in many colors "Carnelian Red, Urban Titanium, Tafetta White, Lunar
                            Silver Metallic, Modern Steel Metallic, Sporty Blue Metallic, Crystal Black Pearl".
                            As per webpage content, there is no specs or performance difference across colors of a variant.',
                'notes_added_on' => '2022-05-31',
                'has_same_urls' => true, // [true, false]
                'has_same_files' => true, // [true, false]
                'base_price' =>  '3729000',
                'currency' =>  'PKR',
                'category' =>  'vehicle',
                'manufacturer' =>  'Honda',
                'watched' =>  true,
            ]),
        ]);

        /** BR-V */
        DB::table('products')->insert([
            'name' => 'br_v',
            'formatted_name' => 'BR-V',
            'data' => json_encode([
                'variants' => [
                    'i_vtec_s' => [
                        'formatted_name' => ' I-VTEC S',
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.honda.com.pk/hondabrv.php',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                        ],
                        'files' => [
                            config('app.files_keys.brochure') => [
                                'url' => 'https://www.honda.com.pk/forms/Brochure-Honda-BRV.pdf',
                                'name' => 'honda_brv_brochure',
                            ],
                        ],
                        'price' => '4249000',
                    ],
                ],
                'notes' => 'BR-V is offered in many colors "Carnelian Red, Urban Titanium, Tafetta White, Lunar
                            Silver Metallic, Modern Steel Metallic, Morning Mist Blue Metallic, Crystal Black Pearl,
                            Meteoroid Gray Metallic.".
                            As per webpage content, there is no specs or performance difference across colors of a variant.',
                'notes_added_on' => '2022-05-31',
                'has_same_urls' => true, // [true, false]
                'has_same_files' => true, // [true, false]
                'base_price' =>  '4249000',
                'currency' =>  'PKR',
                'category' =>  'vehicle',
                'manufacturer' =>  'Honda',
                'watched' =>  true,
            ]),
        ]);

        /** Civic Standard */
        DB::table('products')->insert([
            'name' => 'civic_standard',
            'formatted_name' => 'Civic Standard',
            'data' => json_encode([
                'variants' => [
                    '1-5l' => [
                        'formatted_name' => '1.5L',
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.honda.com.pk/civic_standard.php',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                        ],
                        'files' => [
                            config('app.files_keys.brochure') => [
                                'url' => 'https://www.honda.com.pk/forms/Civic_2022.pdf',
                                'name' => 'honda_civic_standard_brochure',
                            ],
                        ],
                        'price' => '5549000',
                    ],
                ],
                'notes' => 'Civic Standard is offered in many colors "Carnelian Red, Urban Titanium, Tafetta White, Lunar
                            Silver Metallic, Modern Steel Metallic, Morning Mist Blue Metallic, Crystal Black Pearl,
                            Meteoroid Gray Metallic.".
                            As per webpage content, there is no specs or performance difference across colors of a variant.',
                'notes_added_on' => '2022-05-31',
                'has_same_urls' => true, // [true, false]
                'has_same_files' => true, // [true, false]
                'base_price' =>  '5,549,000',
                'currency' =>  'PKR',
                'category' =>  'vehicle',
                'manufacturer' =>  'Honda',
                'watched' =>  true,
            ]),
        ]);

        /** Civic Oriel */
        DB::table('products')->insert([
            'name' => 'civic_oriel',
            'formatted_name' => 'Civic Oriel',
            'data' => json_encode([
                'variants' => [
                    '1-5l' => [
                        'formatted_name' => '1.5L',
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.honda.com.pk/civic_oriel_1.5.php',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                        ],
                        'files' => [
                            config('app.files_keys.brochure') => [
                                'url' => 'https://www.honda.com.pk/forms/Civic_2022.pdf',
                                'name' => 'honda_civic_oriel_brochure',
                            ],
                        ],
                        'price' => '5799000',
                    ],
                ],
                'notes' => 'Civic Oriel is offered in many colors "Carnelian Red, Urban Titanium, Tafetta White, Lunar
                            Silver Metallic, Modern Steel Metallic, Morning Mist Blue Metallic, Crystal Black Pearl,
                            Meteoroid Gray Metallic.".
                            As per webpage content, there is no specs or performance difference across colors of a variant.',
                'notes_added_on' => '2022-05-31',
                'has_same_urls' => true, // [true, false]
                'has_same_files' => true, // [true, false]
                'base_price' =>  '5799000',
                'currency' =>  'PKR',
                'category' =>  'vehicle',
                'manufacturer' =>  'Honda',
                'watched' =>  true,
            ]),
        ]);

        /** Civic RS */
        DB::table('products')->insert([
            'name' => 'civic_rs',
            'formatted_name' => 'Civic RS',
            'data' => json_encode([
                'variants' => [
                    '1-5l' => [
                        'formatted_name' => '1.5L',
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.honda.com.pk/civic_rs_turbo.php',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                        ],
                        'files' => [
                            config('app.files_keys.brochure') => [
                                'url' => 'https://www.honda.com.pk/forms/Civic_2022.pdf',
                                'name' => 'honda_civic_rs_brochure',
                            ],
                        ],
                        'price' => '6649000',
                    ],
                ],
                'notes' => 'Civic RS is offered in many colors "Carnelian Red, Urban Titanium, Tafetta White, Lunar
                            Silver Metallic, Modern Steel Metallic, Morning Mist Blue Metallic, Crystal Black Pearl,
                            Meteoroid Gray Metallic.".
                            As per webpage content, there is no specs or performance difference across colors of a variant.',
                'notes_added_on' => '2022-05-31',
                'has_same_urls' => true, // [true, false]
                'has_same_files' => true, // [true, false]
                'base_price' =>  '6649000',
                'currency' =>  'PKR',
                'category' =>  'vehicle',
                'manufacturer' =>  'Honda',
                'watched' =>  true,
            ]),
        ]);

        /** Honda CR-V */
        DB::table('products')->insert([
            'name' => 'cr-v',
            'formatted_name' => 'CR-V',
            'data' => json_encode([
                'variants' => [
                    config('app.default_variant_key') => [
                        'formatted_name' => 'CR-V',
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.honda.com.pk/hondacrv.php',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                        ],
                        'files' => [
                            config('app.files_keys.brochure') => [
                                'url' => 'https://www.honda.com.pk/forms/Brochure-Honda-CR-V.pdf',
                                'name' => 'honda_crv_brochure',
                            ],
                        ],
                        'price' => 'On Quote',
                    ],
                ],
                'notes' => 'CR-V offers many colors "White Orchid Pearl, Lunar Silver Metallic, Modern Steel Metallic,
                            Crystal Black Pearl, Passion Red Pearl, Carnelian Red Pearl, Dark Olive Metallic, Brilliant Sporty Blue Metallic".
                            Accord does not have any variants. As per webpage content, all colors have same specs and features.',
                'notes_added_on' => '2022-05-29',
                'has_same_urls' => true, // [true, false]
                'has_same_files' => true, // [true, false]
                'base_price' =>  'On Quote',
                'currency' =>  'PKR',
                'category' =>  'vehicle',
                'manufacturer' =>  'Honda',
                'watched' =>  true,
            ]),
        ]);

        /** Honda Accord */
        DB::table('products')->insert([
            'name' => 'accord',
            'formatted_name' => 'Accord',
            'data' => json_encode([
                'variants' => [
                    'cvt' => [
                        'formatted_name' => 'CVT',
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.honda.com.pk/hondaaccord.php',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                        ],
                        'files' => [
                            config('app.files_keys.brochure') => [
                                'url' => 'https://brochure-honda-accord.pdf/',
                                'name' => 'honda_accord_brochure',
                            ],
                        ],
                        'price' => '15499000',
                    ],
                ],
                'notes' => 'Accord offers many colors "Lunar Silver Metallic, Modern Steel Metallic, Platinum White Pearl,
                            Brilliant Sporty Blue Metallic, Crystal Black Pearl". Accord does not have any variants.
                            As per webpage content, all colors have same specs and features.',
                'notes_added_on' => '2022-05-29',
                'has_same_urls' => true, // [true, false]
                'has_same_files' => true, // [true, false]
                'base_price' =>  '15499000',
                'currency' =>  'PKR',
                'category' =>  'vehicle',
                'manufacturer' =>  'Honda',
                'watched' =>  true,
            ]),
        ]);
    }
}
