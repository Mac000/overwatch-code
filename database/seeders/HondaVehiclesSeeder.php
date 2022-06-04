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
            'data' => json_encode([
                'variants' => [
                    'mt' => [
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.honda.com.pk/city1.2l.php',
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
                                'url' => 'https://www.honda.com.pk/forms/Brochure-Honda-City.pdf',
                                'name' => 'hona_city_12ls_brochure',
                            ],
                            config('app.files_keys.price') => [],
                            config('app.files_keys.poster') => [],
                        ],
                        'price' => '3264000',
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

        /**  */
        DB::table('products')->insert([
            'name' => '',
            'data' => json_encode([
                'variants' => [
                    '' => [
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
                'notes' => 'City 1.2LS is offered in many colors "Carnelian Red, Urban Titanium, Tafetta White, Lunar
                            Silver Metallic, Modern Steel Metallic, Sporty Blue Metallic, Crystal Black Pearl".
                            As per webpage content, there is no specs or performance difference across colors of a variant.',
                'notes_added_on' => '2022-05-31',
                'has_same_urls' => true, // [true, false]
                'has_same_files' => true, // [true, false]
                'base_price' =>  '',
                'currency' =>  'PKR',
                'category' =>  'vehicle',
                'manufacturer' =>  'Honda',
                'watched' =>  true,
            ]),
        ]);

        /** City 1.5LS */
        DB::table('products')->insert([
            'name' => 'city_1.5ls',
            'data' => json_encode([
                'variants' => [
                    'cvt' => [
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.honda.com.pk/city1.5l.php',
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
                                'url' => 'https://www.honda.com.pk/forms/Brochure-Honda-City.pdf',
                                'name' => 'honda_city_15ls_brochure',
                            ],
                            config('app.files_keys.price') => [],
                            config('app.files_keys.poster') => [],
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
            'data' => json_encode([
                'variants' => [
                    'mt' => [
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.honda.com.pk/cityaspire.php',
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
                                'url' => 'https://www.honda.com.pk/forms/Brochure-Honda-City.pdf',
                                'name' => 'honda_city_brochure',
                            ],
                            config('app.files_keys.price') => [],
                            config('app.files_keys.poster') => [],
                        ],
                        'price' => '3729000',
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
            'data' => json_encode([
                'variants' => [
                    'i_vtec_s' => [
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.honda.com.pk/hondabrv.php',
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
                                'url' => 'https://www.honda.com.pk/forms/Brochure-Honda-BRV.pdf',
                                'name' => 'honda_brv_brochure',
                            ],
                            config('app.files_keys.price') => [],
                            config('app.files_keys.poster') => [],
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
            'data' => json_encode([
                'variants' => [
                    '1.5l' => [
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.honda.com.pk/civic_standard.php',
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
                                'url' => 'https://www.honda.com.pk/forms/Civic_2022.pdf',
                                'name' => 'honda_civic_standard_brochure',
                            ],
                            config('app.files_keys.price') => [],
                            config('app.files_keys.poster') => [],
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

        /** Civic Ories */
        DB::table('products')->insert([
            'name' => 'civic_oriel',
            'data' => json_encode([
                'variants' => [
                    '1.5ls' => [
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.honda.com.pk/civic_oriel_1.5.php',
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
                                'url' => 'https://www.honda.com.pk/forms/Civic_2022.pdf',
                                'name' => 'honda_civic_oriel_brochure',
                            ],
                            config('app.files_keys.price') => [],
                            config('app.files_keys.poster') => [],
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

        /**  */
        DB::table('products')->insert([
            'name' => 'civic_rs',
            'data' => json_encode([
                'variants' => [
                    '1.5l' => [
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.honda.com.pk/civic_rs_turbo.php',
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
                                'url' => 'https://www.honda.com.pk/forms/Civic_2022.pdf',
                                'name' => 'honda_civic_rs_brochure',
                            ],
                            config('app.files_keys.price') => [],
                            config('app.files_keys.poster') => [],
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
            'data' => json_encode([
                'variants' => [
                    'crv' => [
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.honda.com.pk/hondacrv.php',
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
                                'url' => 'https://www.honda.com.pk/forms/Brochure-Honda-CR-V.pdf',
                                'name' => 'honda_crv_brochure',
                            ],
                            config('app.files_keys.price') => [],
                            config('app.files_keys.poster') => [],
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
            'data' => json_encode([
                'variants' => [
                    'accord' => [
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.honda.com.pk/hondaaccord.php',
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
                                'url' => 'https://brochure-honda-accord.pdf/',
                                'name' => 'honda_accord_brochure',
                            ],
                            config('app.files_keys.price') => [],
                            config('app.files_keys.poster') => [],
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
