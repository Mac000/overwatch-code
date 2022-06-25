<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HyundaiVehiclesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** Sonata */
        DB::table('products')->insert([
            'name' => 'sonata',
            'formatted_name' => 'SONATA',
            'data' => json_encode([
                'variants' => [
                    '2-5' => [
                        'formatted_name' => '2.5',
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.hyundai-nishat.com/sonata',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.exterior') => [
                                'url' => 'https://www.hyundai-nishat.com/SonataExterior',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.interior') => [
                                'url' => 'https://www.hyundai-nishat.com/SonataInterior',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.performance') => [
                                'url' => 'https://www.hyundai-nishat.com/SonataPerformance',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.price') => [
                                'url' => 'https://www.hyundai-nishat.com/assets/hyundai/pdf/Hyundai-price-list-Hyundai-SonataNew-(HNMPL).jpeg',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                        ],
                        'files' => [
                            config('app.files_keys.brochure') => [
                                'url' => 'https://www.hyundai-nishat.com/sonata/download_brochure_sonata',
                                'name' => 'hyundai_sonata_brochure',
                            ],
                            config('app.files_keys.price') => [
                                'url' => 'https://www.hyundai-nishat.com/assets/hyundai/pdf/Hyundai-price-list-Hyundai-SonataNew-(HNMPL).jpeg',
                                'name' => 'hyundai_sonata_price',
                            ],
                        ],
                        'price' => '7849000',
                    ],
                ],
                'notes' => 'Hyundai Sonata is offered in many colors "Hampton Gray, Metallic Silver, Polar White,
                            Diamond Black Metallic, Oxford Blue". As per webpage content, there is no specs or performance
                            difference between colors of a variant',
                'notes_added_on' => '2022-05-31',
                'has_same_urls' => true, // [true, false]
                'has_same_files' => true, // [true, false]
                'base_price' =>  '6699900',
                'currency' =>  'PKR',
                'category' =>  'vehicle',
                'manufacturer' =>  'Hyundai',
                'watched' =>  true,
            ]),
        ]);

        /** Elantra */
        DB::table('products')->insert([
            'name' => 'elantra',
            'formatted_name' => 'ELANTRA',
            'data' => json_encode([
                'variants' => [
                    '1-6' => [
                        'formatted_name' => '1.6 MPi Engine, 6-Speed A/T',
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.hyundai-nishat.com/elantra',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.price') => [
                                'url' => 'https://www.hyundai-nishat.com/assets/hyundai/images/elantra/Elantra-1.6-Price-List-15-New.jpg',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.exterior') => [
                                'url' => 'https://www.hyundai-nishat.com/elantraExterior',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.interior') => [
                                'url' => 'https://www.hyundai-nishat.com/elantraInterior',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.performance') => [
                                'url' => 'https://www.hyundai-nishat.com/ElantraPerformance',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                        ],
                        'files' => [
                            config('app.files_keys.brochure') => [
                                'url' => 'https://www.hyundai-nishat.com/elantra/download_brochure_Elantra_1_6_GL',
                                'name' => 'hyundai_elantra_16_gls_brochure',
                            ],
                            config('app.files_keys.price') => [
                                'url' => 'https://www.hyundai-nishat.com/assets/hyundai/images/elantra/Elantra-1.6-Price-List-15-New.jpg',
                                'name' => 'hyundai_elantra_price',
                            ],
                        ],
                        'price' => '4299000',
                    ],
                    '2-0' => [
                        'formatted_name' => '2.0 MPi Engine, 6-Speed A/T',
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.hyundai-nishat.com/elantra',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.price') => [
                                'url' => 'https://www.hyundai-nishat.com/assets/hyundai/images/elantra/Elantra-1.6-Price-List-15-New.jpg',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.exterior') => [
                                'url' => 'https://www.hyundai-nishat.com/elantraExterior',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.interior') => [
                                'url' => 'https://www.hyundai-nishat.com/elantraInterior',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.performance') => [
                                'url' => 'https://www.hyundai-nishat.com/ElantraPerformance',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                        ],
                        'files' => [
                            config('app.files_keys.brochure') => [
                                'url' => 'https://www.hyundai-nishat.com/elantra/download_brochure_Elantra_2_0_GLS',
                                'name' => 'hyundai_elantra_20_gls_brochure',
                            ],
                            config('app.files_keys.price') => [
                                'url' => 'https://www.hyundai-nishat.com/assets/hyundai/images/elantra/Elantra-1.6-Price-List-15-New.jpg',
                                'name' => 'hyundai_elantra_price',
                            ],
                        ],
                        'price' => '4949000',
                    ],
                ],
                'notes' => 'N/A',
                'notes_added_on' => '2022-05-31',
                'has_same_urls' => true, // [true, false]
                'has_same_files' => false, // [true, false]
                'base_price' =>  '4299000',
                'currency' =>  'PKR',
                'category' =>  'vehicle',
                'manufacturer' =>  'Hyundai',
                'watched' =>  true,
            ]),
        ]);

        /** Tuscon */
        DB::table('products')->insert([
            'name' => 'tuscon',
            'formatted_name' => 'TUCSON',
            'data' => json_encode([
                'variants' => [
                    '2-0l_mpi_awd_at_6_speed' => [
                        'formatted_name' => 'TUCSON 2.0L MPi, AWD A/T, 6-Speed',
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.hyundai-nishat.com/tucson',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.price') => [
                                'url' => 'https://www.hyundai-nishat.com/assets/hyundai/images/tucson/Hyundai-price-list-Hyundai-TucsonNew-(HNMPL).jpg',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.exterior') => [
                                'url' => 'https://www.hyundai-nishat.com/tucson_exterior',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.interior') => [
                                'url' => 'https://www.hyundai-nishat.com/tucson_interior',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.performance') => [
                                'url' => 'https://www.hyundai-nishat.com/tucson_performance',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                        ],
                        'files' => [
                            config('app.files_keys.brochure') => [
                                'url' => 'https://www.hyundai-nishat.com/tucson/download_brochure_tucson',
                                'name' => 'hyundai_tuscon_brochure',
                            ],
                            config('app.files_keys.price') => [
                                'url' => 'https://www.hyundai-nishat.com/assets/hyundai/images/tucson/Hyundai-price-list-Hyundai-TucsonNew-(HNMPL).jpg',
                                'name' => 'hyundai_tuscon_price',
                            ],
                        ],
                        'price' => '6299000',
                    ],
                ],
                'notes' => 'N/A',
                'notes_added_on' => '2022-05-31',
                'has_same_urls' => true, // [true, false]
                'has_same_files' => true, // [true, false]
                'base_price' =>  '5799000',
                'currency' =>  'PKR',
                'category' =>  'vehicle',
                'manufacturer' =>  'Hyundai',
                'watched' =>  true,
            ]),
        ]);

        /** Santa FE */
        DB::table('products')->insert([
            'name' => 'santa_fe',
            'formatted_name' => 'SANTA FE',
            'data' => json_encode([
                'variants' => [
                    config('app.default_variant_key') => [
                        'formatted_name' => 'SANTA FE',
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.hyundai-nishat.com/santafe',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.exterior') => [
                                'url' => 'https://www.hyundai-nishat.com/santafe_exterior',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.interior') => [
                                'url' => 'https://www.hyundai-nishat.com/santafe_interior',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.performance') => [
                                'url' => 'https://www.hyundai-nishat.com/santafe_performance',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                        ],
                        'files' => [
                            config('app.files_keys.brochure') => [
                                'url' => 'https://www.hyundai-nishat.com/santafe/download_brochure_santafe',
                                'name' => 'hyundai_santa_fe_brochure',
                            ],
                        ],
                        'price' => 'N/A',
                    ],
                ],
                'notes' => 'Price is not available on official webpage',
                'notes_added_on' => '2022-05-31',
                'has_same_urls' => true, // [true, false]
                'has_same_files' => true, // [true, false]
                'base_price' =>  'N/A',
                'currency' =>  'PKR',
                'category' =>  'vehicle',
                'manufacturer' =>  'Hyundai',
                'watched' =>  true,
            ]),
        ]);

        /** Ioniq */
        DB::table('products')->insert([
            'name' => 'ioniq',
            'formatted_name' => 'IONIQ',
            'data' => json_encode([
                'variants' => [
                    config('app.default_variant_key') => [
                        'formatted_name' => 'IONIQ',
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.hyundai-nishat.com/ioniq',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.exterior') => [
                                'url' => 'https://www.hyundai-nishat.com/ioniq_exterior',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.interior') => [
                                'url' => 'https://www.hyundai-nishat.com/ioniq_interior',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.performance') => [
                                'url' => 'https://www.hyundai-nishat.com/ioniq_performance',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                        ],
                        'files' => [
                            config('app.files_keys.brochure') => [
                                'url' => 'https://www.hyundai-nishat.com/ioniq/download_brochure_Ioniq',
                                'name' => 'hyundai_ioniq_brochure',
                            ],
                        ],
                        'price' => 'N/A',
                    ],
                ],
                'notes' => 'Price not available on official webpage',
                'notes_added_on' => '2022-05-31',
                'has_same_urls' => true, // [true, false]
                'has_same_files' => true, // [true, false]
                'base_price' =>  'N/A',
                'currency' =>  'PKR',
                'category' =>  'vehicle',
                'manufacturer' =>  'Hyundai',
                'watched' =>  true,
            ]),
        ]);

        /** Staria */
        DB::table('products')->insert([
            'name' => 'staria',
            'formatted_name' => 'STARIA',
            'data' => json_encode([
                'variants' => [
                    'hgs' => [
                        'formatted_name' => 'HGS',
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.hyundai-nishat.com/staria',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.price') => [
                                'url' => 'https://www.hyundai-nishat.com/assets/hyundai/pdf/staria-price-list.jpg',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.exterior') => [
                                'url' => 'https://www.hyundai-nishat.com/staria_exterior',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.interior') => [
                                'url' => 'https://www.hyundai-nishat.com/staria_interior',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.performance') => [
                                'url' => 'https://www.hyundai-nishat.com/staria_performance',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                        ],
                        'files' => [
                            config('app.files_keys.brochure') => [
                                'url' => 'https://www.hyundai-nishat.com/staria/download_brochure_staria',
                                'name' => 'hyundai_staria_brochure',
                            ],
                        ],
                        'price' => '9299000',
                    ],
                ],
                'notes' => 'N/A',
                'notes_added_on' => '2022-05-31',
                'has_same_urls' => true, // [true, false]
                'has_same_files' => true, // [true, false]
                'base_price' =>  '9299000',
                'currency' =>  'PKR',
                'category' =>  'vehicle',
                'manufacturer' =>  'Hyundai',
                'watched' =>  true,
            ]),
        ]);

        /** Porter H100 */
        DB::table('products')->insert([
            'name' => 'porter_h100',
            'formatted_name' => 'H100',
            'data' => json_encode([
                'variants' => [
                    'highdeck' => [
                        'formatted_name' => 'High-Deck',
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.hyundai-nishat.com/h100',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.price') => [
                                'url' => 'https://www.hyundai-nishat.com/assets/hyundai/pdf/Hyundai-price-list-H-100New-(HNMPL).jpeg',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.exterior') => [
                                'url' => 'https://www.hyundai-nishat.com/h100_exterior',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.interior') => [
                                'url' => 'https://www.hyundai-nishat.com/h100_interior',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.performance') => [
                                'url' => 'https://www.hyundai-nishat.com/h100_performance',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                        ],
                        'files' => [
                            config('app.files_keys.brochure') => [
                                'url' => 'https://www.hyundai-nishat.com/h100/download_brochure_h100',
                                'name' => 'hyundai_porter_h100_brochure',
                            ],
                            config('app.files_keys.price') => [
                                'url' => 'https://www.hyundai-nishat.com/assets/hyundai/pdf/Hyundai-price-list-H-100New-(HNMPL).jpeg',
                                'name' => 'hyundai_porter_h100_price',
                            ],
                        ],
                        'price' => '2949000',
                    ],
                ],
                'notes' => 'Hyundai Porter H100 is offered in 3 variants "High Deck, Flat Deck, Deckless". Price difference
                            between three variants is 20k as per the time of writing',
                'notes_added_on' => '2022-05-31',
                'has_same_urls' => true, // [true, false]
                'has_same_files' => true, // [true, false]
                'base_price' =>  '2909000',
                'currency' =>  'PKR',
                'category' =>  'vehicle',
                'manufacturer' =>  'Hyundai',
                'watched' =>  true,
            ]),
        ]);

        /** Grand Starex */
        DB::table('products')->insert([
            'name' => 'grand_starex',
            'formatted_name' => 'GRAND STAREX',
            'data' => json_encode([
                'variants' => [
                    config('app.default_variant_key') => [
                        'formatted_name' => 'GRAND STAREX',
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.hyundai-nishat.com/h1',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.exterior') => [
                                'url' => 'https://www.hyundai-nishat.com/h1_exterior',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.interior') => [
                                'url' => 'https://www.hyundai-nishat.com/h1_interior',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.performance') => [
                                'url' => 'https://www.hyundai-nishat.com/h1_performance',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                        ],
                        'files' => [
                            config('app.files_keys.brochure') => [
                                'url' => 'https://www.hyundai-nishat.com/assets/hyundai/pdf/STAREX-Brochure.pdf',
                                'name' => 'hyundai_grand_starex_brochure',
                            ],
                        ],
                        'price' => 'N/A',
                    ],
                ],
                'notes' => 'Price not available on official webpage',
                'notes_added_on' => '2022-05-31',
                'has_same_urls' => true, // [true, false]
                'has_same_files' => true, // [true, false]
                'base_price' =>  'N/A',
                'currency' =>  'PKR',
                'category' =>  'vehicle',
                'manufacturer' =>  'Hyundai',
                'watched' =>  true,
            ]),
        ]);
    }
}
