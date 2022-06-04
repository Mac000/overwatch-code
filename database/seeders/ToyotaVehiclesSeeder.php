<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ToyotaVehiclesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** Corolla X 1.8 */
        DB::table('products')->insert([
            'name' => 'corolla_x_18',
            'formatted_name' => 'Corolla X 1.8',
            'data' => json_encode([
                'variants' => [
                    'altis_grande_cvt-i_1.8_black_interior' => [
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.toyota-indus.com/corolla-x/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.specs') => [],
                            config('app.pages_keys.performance') => [],
                            config('app.pages_keys.design') => [],
                            config('app.pages_keys.comfort') => [],
                            config('app.pages_keys.technology') => [],
                            config('app.pages_keys.convenience') => [],
                            config('app.pages_keys.price') => [],
                            config('app.pages_keys.exterior') => [],
                            config('app.pages_keys.interior') => [],
                        ],
                        'files' => [
                            config('app.files_keys.brochure') => [
                                'url' => 'https://www.toyota-indus.com/wp-content/themes/toyotaindus/page-templates/pdf/corolla-x-brochure.pdf',
                                'name' => 'toyota_corolla_x_1.8_brochure',
                            ],
                            config('app.files_keys.poster') => [],
                        ],
                        'price' => '4899000',
                    ],
                    'corolla_at_1.6se' => [
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.toyota-indus.com/corolla-x/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.specs') => [],
                            config('app.pages_keys.performance') => [],
                            config('app.pages_keys.design') => [],
                            config('app.pages_keys.comfort') => [],
                            config('app.pages_keys.technology') => [],
                            config('app.pages_keys.convenience') => [],
                            config('app.pages_keys.price') => [],
                            config('app.pages_keys.exterior') => [],
                            config('app.pages_keys.interior') => [],
                        ],
                        'files' => [
                            config('app.files_keys.brochure') => [
                                'url' => 'https://www.toyota-indus.com/wp-content/themes/toyotaindus/page-templates/pdf/Corolla16-Final-Brochure.pdf',
                                'name' => 'toyota_corolla_x_1.6_brochure',
                            ],
                            config('app.files_keys.poster') => [],
                        ],
                        'price' => '4509000',
                    ],
                ],
                'notes' => 'Corolla X is offered in two main variants (1.8 & 1.6). All Variants are offered in Many Colors
                            "Phantom Brown, Strong Blue, Super White, Silver Metallic, Graphite Gray, Attitude Black".
                            As per webpage content, specs and performance is same across all colors of a variant.',
                'notes_added_on' => '2022-05-29',
                'has_same_urls' => true, // [true, false]
                'has_same_files' => true, // [true, false]
                'base_price' =>  '3909000',
                'currency' =>  'PKR',
                'category' =>  'vehicle',
                'manufacturer' =>  'Toyota',
                'watched' =>  true,
            ]),
        ]);

        /** Yaris */
        DB::table('products')->insert([
            'name' => 'yaris',
            'formatted_name' => '',
            'data' => json_encode([
                'variants' => [
                    '1.5l_ativ_x_cvt' => [
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.toyota-indus.com/yaris/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.specs') => [],
                            config('app.pages_keys.performance') => [],
                            config('app.pages_keys.design') => [],
                            config('app.pages_keys.comfort') => [],
                            config('app.pages_keys.technology') => [],
                            config('app.pages_keys.convenience') => [],
                            config('app.pages_keys.price') => [],
                            config('app.pages_keys.exterior') => [],
                            config('app.pages_keys.interior') => [],
                        ],
                        'files' => [
                            config('app.files_keys.brochure') => [
                                'url' => 'https://www.toyota-indus.com/wp-content/uploads/brochure/yaris-v2.pdf',
                                'name' => 'toyota_yaris_brochure',
                            ],
                            config('app.files_keys.price') => [],
                            config('app.files_keys.poster') => [],
                        ],
                        'price' => '3659000',
                    ],
                ],
                'notes' => 'Yaris is offered in 6 variants. Yaris has plenty of colors as well "Attitude Black, Orange MT,
                            Gray Graphite, Super White, Dorado Gold, Phantom Brown, Dark Blue Mica MT, Red Mica MT,
                            Strong Blue, Silver Metallic".
                            As per webpage content, specs and performance is same across all colors of a variant.',
                'notes_added_on' => '2022-05-29',
                'has_same_urls' => true, // [true, false]
                'has_same_files' => true, // [true, false]
                'base_price' =>  '3039000',
                'currency' =>  'PKR',
                'category' =>  'vehicle',
                'manufacturer' =>  'Toyota',
                'watched' =>  true,
            ]),
        ]);

        /** Prius */
        DB::table('products')->insert([
            'name' => 'prius',
            'formatted_name' => 'Prius',
            'data' => json_encode([
                'variants' => [
                    '' => [
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.toyota-indus.com/prius',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.specs') => [],
                            config('app.pages_keys.performance') => [],
                            config('app.pages_keys.design') => [],
                            config('app.pages_keys.comfort') => [],
                            config('app.pages_keys.technology') => [],
                            config('app.pages_keys.convenience') => [],
                            config('app.pages_keys.price') => [],
                            config('app.pages_keys.exterior') => [],
                            config('app.pages_keys.interior') => [],
                        ],
                        'files' => [
                            config('app.files_keys.brochure') => [
                                'url' => 'https://www.toyota-indus.com/brochures/Toyota%20Prius%20Brochure%202017%20(IMC).pdf',
                                'name' => 'toyota_prius_brochure',
                            ],
                            config('app.files_keys.price') => [],
                            config('app.files_keys.poster') => [],
                        ],
                        'price' => '14649000',
                    ],
                ],
                'notes' => 'Prius is offered in many Colors "Attitude Black Mica, Dark Blue Mica, Gray Metallic, Emotional
                            Red, Super White, White Pearl, Silver Metallic".
                            As per webpage content, specs and performance is same across all colors of a variant.',
                'notes_added_on' => '2022-05-29',
                'has_same_urls' => true, // [true, false]
                'has_same_files' => true, // [true, false]
                'base_price' =>  '14649000',
                'currency' =>  'PKR',
                'category' =>  'vehicle',
                'manufacturer' =>  'Toyota',
                'watched' =>  true,
            ]),
        ]);

        /** Camry */
        DB::table('products')->insert([
            'name' => 'camry hybrid',
            'data' => json_encode([
                'variants' => [
                    'camry_hybrid' => [
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.toyota-indus.com/camry-hybrid/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.specs') => [],
                            config('app.pages_keys.performance') => [],
                            config('app.pages_keys.design') => [],
                            config('app.pages_keys.comfort') => [],
                            config('app.pages_keys.technology') => [],
                            config('app.pages_keys.convenience') => [],
                            config('app.pages_keys.price') => [],
                            config('app.pages_keys.exterior') => [],
                            config('app.pages_keys.interior') => [],
                        ],
                        'files' => [
                            config('app.files_keys.brochure') => [
                                'url' => 'https://www.toyota-indus.com/wp-content/themes/toyotaindus/page-templates/pdf/Toyota%20Camry%20Hybrid%20Brochure.pdf',
                                'name' => 'toyota_camry_brochure',
                            ],
                            config('app.files_keys.price') => [],
                            config('app.files_keys.poster') => [],
                        ],
                        'price' => '23319000',
                    ],
                ],
                'notes' => 'Camry is offered in many exterior colors "Platinum White Pearl, Attitude Black, Emotional Red,
                            Silver, Dark Blue, Graphite". Camry is offered in two interior colors "Black, Beige". As per
                            webpage content, specs and performance is same across all colors.',
                'notes_added_on' => '2022-05-29',
                'has_same_urls' => true, // [true, false]
                'has_same_files' => true, // [true, false]
                'base_price' =>  '23319000',
                'currency' =>  'PKR',
                'category' =>  'vehicle',
                'manufacturer' =>  'Toyota',
                'watched' =>  true,
            ]),
        ]);

        /** Corolla Cross */
        DB::table('products')->insert([
            'name' => 'corolla cross',
            'data' => json_encode([
                'variants' => [
                    'corolla_cross_premium_hybrid' => [
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => '',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.specs') => [],
                            config('app.pages_keys.performance') => [],
                            config('app.pages_keys.design') => [],
                            config('app.pages_keys.comfort') => [],
                            config('app.pages_keys.technology') => [],
                            config('app.pages_keys.convenience') => [],
                            config('app.pages_keys.price') => [],
                            config('app.pages_keys.exterior') => [],
                            config('app.pages_keys.interior') => [],
                        ],
                        'files' => [
                            config('app.files_keys.brochure') => [
                                'url' => 'https://www.toyota-indus.com/wp-content/themes/toyotaindus/page-templates/img/corolla-cross/pdf/Corolla%20Cross%20Brochure.pdf',
                                'name' => 'toyota_corolla_cross_brochure',
                            ],
                            config('app.files_keys.poster') => [],
                        ],
                        'price' => '13419000',
                    ],
                    'corolla_cross_smart_hybrid' => [
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => '',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.specs') => [],
                            config('app.pages_keys.performance') => [],
                            config('app.pages_keys.design') => [],
                            config('app.pages_keys.comfort') => [],
                            config('app.pages_keys.technology') => [],
                            config('app.pages_keys.convenience') => [],
                            config('app.pages_keys.price') => [],
                            config('app.pages_keys.exterior') => [],
                            config('app.pages_keys.interior') => [],
                        ],
                        'files' => [
                            config('app.files_keys.brochure') => [
                                'url' => 'https://www.toyota-indus.com/wp-content/themes/toyotaindus/page-templates/img/corolla-cross/pdf/Corolla%20Cross%20Brochure.pdf',
                                'name' => 'toyota_corolla_cross_brochure',
                            ],
                            config('app.files_keys.poster') => [],
                        ],
                        'price' => '13099000',
                    ],
                    'corolla_cross_hybrid' => [
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => '',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.specs') => [],
                            config('app.pages_keys.performance') => [],
                            config('app.pages_keys.design') => [],
                            config('app.pages_keys.comfort') => [],
                            config('app.pages_keys.technology') => [],
                            config('app.pages_keys.convenience') => [],
                            config('app.pages_keys.price') => [],
                            config('app.pages_keys.exterior') => [],
                            config('app.pages_keys.interior') => [],
                        ],
                        'files' => [
                            config('app.files_keys.brochure') => [
                                'url' => 'https://www.toyota-indus.com/wp-content/themes/toyotaindus/page-templates/img/corolla-cross/pdf/Corolla%20Cross%20Brochure.pdf',
                                'name' => 'toyota_corolla_cross_brochure',
                            ],
                            config('app.files_keys.poster') => [],
                        ],
                        'price' => '12249000',
                    ],
                ],
                'notes' => 'Corolla Cross is offered in many colors "Celestite Gray Metallic, Attitude Black Mica,
                            Nebula Blue, Graphite Metallic, Metal Stream Metallic, Red Mica Metallic, Platinum White Pearl".
                            As per webpage content, specs and performance is same across all colors of a variant.',
                'notes_added_on' => '2022-05-29',
                'has_same_urls' => true, // [true, false]
                'has_same_files' => true, // [true, false]
                'base_price' =>  '12249000',
                'currency' =>  'PKR',
                'category' =>  'vehicle',
                'manufacturer' =>  'Toyota',
                'watched' =>  true,
            ]),
        ]);


        /** Rush */
        DB::table('products')->insert([
            'name' => 'rush',
            'formatted_name' => 'Rush',
            'data' => json_encode([
                'variants' => [
                    'g_at' => [
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.toyota-indus.com/rush/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.specs') => [],
                            config('app.pages_keys.performance') => [],
                            config('app.pages_keys.design') => [],
                            config('app.pages_keys.comfort') => [],
                            config('app.pages_keys.technology') => [],
                            config('app.pages_keys.convenience') => [],
                            config('app.pages_keys.price') => [],
                            config('app.pages_keys.exterior') => [],
                            config('app.pages_keys.interior') => [],
                        ],
                        'files' => [
                            config('app.files_keys.brochure') => [
                                'url' => 'https://www.toyota-indus.com/wp-content/uploads/brochure/Toyota%20Rush%20Brochure.pdf',
                                'name' => 'toyota_rush_brochure',
                            ],
                            config('app.files_keys.price') => [],
                            config('app.files_keys.poster') => [],
                        ],
                        'price' => '8329000',
                    ],
                ],
                'notes' => 'As per webpage content, specs and performance is same across all colors of a variant.',
                'notes_added_on' => '2022-05-29',
                'has_same_urls' => true, // [true, false]
                'has_same_files' => true, // [true, false]
                'base_price' =>  '8009000',
                'currency' =>  'PKR',
                'category' =>  'vehicle',
                'manufacturer' =>  'Toyota',
                'watched' =>  true,
            ]),
        ]);

        /** Fortuner */
        DB::table('products')->insert([
            'name' => 'fortuner',
            'formatted_name' => 'Fortuner',
            'data' => json_encode([
                'variants' => [
                    'sigma_4' => [
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.toyota-indus.com/fortuner/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.specs') => [],
                            config('app.pages_keys.performance') => [],
                            config('app.pages_keys.design') => [],
                            config('app.pages_keys.comfort') => [],
                            config('app.pages_keys.technology') => [],
                            config('app.pages_keys.convenience') => [],
                            config('app.pages_keys.price') => [],
                            config('app.pages_keys.exterior') => [],
                            config('app.pages_keys.interior') => [],
                        ],
                        'files' => [
                            config('app.files_keys.brochure') => [
                                'url' => 'https://www.toyota-indus.com/wp-content/themes/toyotaindus/page-templates/fortuner_v2/Fortuner-Brochure-2021-Final-YQ.pdf',
                                'name' => 'toyota_fortuner_brochure',
                            ],
                            config('app.files_keys.price') => [],
                            config('app.files_keys.poster') => [],
                        ],
                        'price' => '12039000',
                    ],
                ],
                'notes' => 'Fortuner is offered in many colors "040 White, 8E9 Strong Blue, 218 Attitude Black, 1G3 Graphite,
                            4W9 Phantom Brown, 1D4 Silver Mettalic, 785 Dark Teal Mica".
                            As per webpage content, specs and performance is same across all colors of a variant.',
                'notes_added_on' => '2022-05-29',
                'has_same_urls' => true, // [true, false]
                'has_same_files' => true, // [true, false]
                'base_price' =>  '9959000',
                'currency' =>  'PKR',
                'category' =>  'vehicle',
                'manufacturer' =>  'Toyota',
                'watched' =>  true,
            ]),
        ]);

        /** Fortuner Legender */
        DB::table('products')->insert([
            'name' => 'fortuner_legender',
            'formatted_name' => 'Fortuner Legender',
            'data' => json_encode([
                'variants' => [
                    'legender' => [
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.toyota-indus.com/fortuner-legender/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.specs') => [],
                            config('app.pages_keys.performance') => [],
                            config('app.pages_keys.design') => [],
                            config('app.pages_keys.comfort') => [],
                            config('app.pages_keys.technology') => [],
                            config('app.pages_keys.convenience') => [],
                            config('app.pages_keys.price') => [],
                            config('app.pages_keys.exterior') => [],
                            config('app.pages_keys.interior') => [],
                        ],
                        'files' => [
                            config('app.files_keys.brochure') => [
                                'url' => 'https://www.toyota-indus.com/wp-content/themes/toyotaindus/page-templates/fortuner_v2/Fortuner-Brochure-2021-Final-YQ.pdf',
                                'name' => 'toyota_fortuner_legender_brochure',
                            ],
                            config('app.files_keys.price') => [],
                            config('app.files_keys.poster') => [],
                        ],
                        'price' => '12679000',
                    ],
                ],
                'notes' => 'Fortuner Legender is offered in many colors "040 White, 218 Attitude Black, 1G3 Graphite,
                            4W9 Phantom Brown, 1D4 Silver Mettalic"
                            As per webpage content, specs and performance is same across all colors of a variant.',
                'notes_added_on' => '2022-05-29',
                'has_same_urls' => true, // [true, false]
                'has_same_files' => true, // [true, false]
                'base_price' =>  '12679000',
                'currency' =>  'PKR',
                'category' =>  'vehicle',
                'manufacturer' =>  'Toyota',
                'watched' =>  true,
            ]),
        ]);

        /** Hilux Revo */
        DB::table('products')->insert([
            'name' => 'hilux_revo',
            'formatted_name' => 'Hilux Revo',
            'data' => json_encode([
                'variants' => [
                    'v_at' => [
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.toyota-indus.com/revo/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.specs') => [],
                            config('app.pages_keys.performance') => [],
                            config('app.pages_keys.design') => [],
                            config('app.pages_keys.comfort') => [],
                            config('app.pages_keys.technology') => [],
                            config('app.pages_keys.convenience') => [],
                            config('app.pages_keys.price') => [],
                            config('app.pages_keys.exterior') => [],
                            config('app.pages_keys.interior') => [],
                        ],
                        'files' => [
                            config('app.files_keys.brochure') => [
                                'url' => 'https://www.toyota-indus.com/wp-content/themes/toyotaindus/page-templates/revo_2021/Revo-Brochure-Low.pdf',
                                'name' => 'toyota_hilux_brochure',
                            ],
                            config('app.files_keys.price') => [],
                            config('app.files_keys.poster') => [],
                        ],
                        'price' => '9229000',
                    ],
                ],
                'notes' => 'Hilux Revo is offered in many colors "Super White, Attitude Black, Graphite,
                            Dark Teal Mica, Silver Mettalic"
                            As per webpage content, specs and performance is same across all colors of a variant.',
                'notes_added_on' => '2022-05-29',
                'has_same_urls' => true, // [true, false]
                'has_same_files' => true, // [true, false]
                'base_price' =>  '7989000',
                'currency' =>  'PKR',
                'category' =>  'vehicle',
                'manufacturer' =>  'Toyota',
                'watched' =>  true,
            ]),
        ]);

        /** Hilux Revo Rocco */
        DB::table('products')->insert([
            'name' => 'hilux_revo_rocco',
            'formatted_name' => 'Hilux Revo Rocco',
            'data' => json_encode([
                'variants' => [
                    'rocco' => [
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.toyota-indus.com/revo-rocco/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.specs') => [],
                            config('app.pages_keys.performance') => [],
                            config('app.pages_keys.design') => [],
                            config('app.pages_keys.comfort') => [],
                            config('app.pages_keys.technology') => [],
                            config('app.pages_keys.convenience') => [],
                            config('app.pages_keys.price') => [],
                            config('app.pages_keys.exterior') => [],
                            config('app.pages_keys.interior') => [],
                        ],
                        'files' => [
                            config('app.files_keys.brochure') => [
                                'url' => 'https://www.toyota-indus.com/wp-content/themes/toyotaindus/page-templates/revo_2021/Revo-Brochure-Low.pdf',
                                'name' => 'toyota_hilux_brochure',
                            ],
                            config('app.files_keys.price') => [],
                            config('app.files_keys.poster') => [],
                        ],
                        'price' => '9729000',
                    ],
                ],
                'notes' => 'Hilux Revo is offered in many colors "Super White, Attitude Black, Graphite,
                            Dark Teal Mica, Silver Mettalic"
                            As per webpage content, specs and performance is same across all colors of a variant.',
                'notes_added_on' => '2022-05-29',
                'has_same_urls' => true, // [true, false]
                'has_same_files' => true, // [true, false]
                'base_price' =>  '9729000',
                'currency' =>  'PKR',
                'category' =>  'vehicle',
                'manufacturer' =>  'Toyota',
                'watched' =>  true,
            ]),
        ]);

        /** Hilux E */
        DB::table('products')->insert([
            'name' => 'hilux_e',
            'formatted_name' => 'Hilux E',
            'data' => json_encode([
                'variants' => [
                    'standard' => [
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.toyota-indus.com/hilux-e/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.specs') => [],
                            config('app.pages_keys.performance') => [],
                            config('app.pages_keys.design') => [],
                            config('app.pages_keys.comfort') => [],
                            config('app.pages_keys.technology') => [],
                            config('app.pages_keys.convenience') => [],
                            config('app.pages_keys.price') => [],
                            config('app.pages_keys.exterior') => [],
                            config('app.pages_keys.interior') => [],
                        ],
                        'files' => [
                            config('app.files_keys.brochure') => [],
                            config('app.files_keys.price') => [],
                            config('app.files_keys.poster') => [],
                        ],
                        'price' => '7359000',
                    ],
                ],
                'notes' => 'Neither Brochure nor color info is available on official web page',
                'notes_added_on' => '2022-05-29',
                'has_same_urls' => true, // [true, false]
                'has_same_files' => true, // [true, false]
                'base_price' =>  '7359000',
                'currency' =>  'PKR',
                'category' =>  'vehicle',
                'manufacturer' =>  'Toyota',
                'watched' =>  true,
            ]),
        ]);

        /** Hilux Single Cabin */
        DB::table('products')->insert([
            'name' => 'hilux_single_cabin',
            'formatted_name' => 'Hilux Single Cabin',
            'data' => json_encode([
                'variants' => [
                    '4x4' => [
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.toyota-indus.com/single-cabin/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.specs') => [],
                            config('app.pages_keys.performance') => [],
                            config('app.pages_keys.design') => [],
                            config('app.pages_keys.comfort') => [],
                            config('app.pages_keys.technology') => [],
                            config('app.pages_keys.convenience') => [],
                            config('app.pages_keys.price') => [],
                            config('app.pages_keys.exterior') => [],
                            config('app.pages_keys.interior') => [],
                        ],
                        'files' => [
                            config('app.files_keys.brochure') => [
                                'url' => 'https://www.toyota-indus.com/wp-content/uploads/2018/10/FinalHilux4x2-2021.pdf',
                                'name' => 'toyota_hilux_single_cabin_brochure',
                            ],
                            config('app.files_keys.price') => [],
                            config('app.files_keys.poster') => [],
                        ],
                        'price' => '6379000',
                    ],
                ],
                'notes' => 'Deatiled info including colors is not available on official webpage.',
                'notes_added_on' => '2022-05-29',
                'has_same_urls' => true, // [true, false]
                'has_same_files' => true, // [true, false]
                'base_price' =>  '4469000',
                'currency' =>  'PKR',
                'category' =>  'vehicle',
                'manufacturer' =>  'Toyota',
                'watched' =>  true,
            ]),
        ]);

        /** Land Cruiser Prado */
        DB::table('products')->insert([
            'name' => 'land_cruiser_prado',
            'formatted_name' => 'Land Cruiser Prado',
            'data' => json_encode([
                'variants' => [
                    '4.0_petrol_at' => [
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.toyota-indus.com/land-cruiser-prado/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.specs') => [],
                            config('app.pages_keys.performance') => [],
                            config('app.pages_keys.design') => [],
                            config('app.pages_keys.comfort') => [],
                            config('app.pages_keys.technology') => [],
                            config('app.pages_keys.convenience') => [],
                            config('app.pages_keys.price') => [],
                            config('app.pages_keys.exterior') => [],
                            config('app.pages_keys.interior') => [],
                        ],
                        'files' => [
                            config('app.files_keys.brochure') => [],
                            config('app.files_keys.price') => [],
                            config('app.files_keys.poster') => [],
                        ],
                        'price' => '41410000',
                    ],
                ],
                'notes' => 'Detailed info including Colors is not available on official webpage.',
                'notes_added_on' => '2022-05-29',
                'has_same_urls' => true, // [true, false]
                'has_same_files' => true, // [true, false]
                'base_price' =>  '27930000',
                'currency' =>  'PKR',
                'category' =>  'vehicle',
                'manufacturer' =>  'Toyota',
                'watched' =>  true,
            ]),
        ]);

        /** Hiace Deluxe*/
        DB::table('products')->insert([
            'name' => 'hiace_deluxe',
            'formatted_name' => 'Hiace Deluxe',
            'data' => json_encode([
                'variants' => [
                    'luxury_wagon_2.8l_high' => [
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.toyota-indus.com/hiace-deluxe/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.specs') => [],
                            config('app.pages_keys.performance') => [],
                            config('app.pages_keys.design') => [],
                            config('app.pages_keys.comfort') => [],
                            config('app.pages_keys.technology') => [],
                            config('app.pages_keys.convenience') => [],
                            config('app.pages_keys.price') => [],
                            config('app.pages_keys.exterior') => [],
                            config('app.pages_keys.interior') => [],
                        ],
                        'files' => [
                            config('app.files_keys.brochure') => [],
                            config('app.files_keys.price') => [],
                            config('app.files_keys.poster') => [],
                        ],
                        'price' => '12879000',
                    ],
                ],
                'notes' => 'As per webpage content, specs and performance is same across all colors of a variant.',
                'notes_added_on' => '2022-05-29',
                'has_same_urls' => true, // [true, false]
                'has_same_files' => true, // [true, false]
                'base_price' =>  '7979000',
                'currency' =>  'PKR',
                'category' =>  'vehicle',
                'manufacturer' =>  'Toyota',
                'watched' =>  true,
            ]),
        ]);

        /** Hiace */
        DB::table('products')->insert([
            'name' => 'hiace',
            'formatted_name' => 'Hiace',
            'data' => json_encode([
                'variants' => [
                    'high_roof_dual_ac_gasoline' => [
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.toyota-indus.com/hiace/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.specs') => [],
                            config('app.pages_keys.performance') => [],
                            config('app.pages_keys.design') => [],
                            config('app.pages_keys.comfort') => [],
                            config('app.pages_keys.technology') => [],
                            config('app.pages_keys.convenience') => [],
                            config('app.pages_keys.price') => [],
                            config('app.pages_keys.exterior') => [],
                            config('app.pages_keys.interior') => [],
                        ],
                        'files' => [
                            config('app.files_keys.brochure') => [
                                'url' => 'https://www.toyota-indus.com/wp-content/themes/toyotaindus/page-templates/pdf/hiace.pdf',
                                'name' => 'toyota_hiace_brochure',
                            ],
                            config('app.files_keys.price') => [],
                            config('app.files_keys.poster') => [],
                        ],
                        'price' => '8419000',
                    ],
                ],
                'notes' => '',
                'notes_added_on' => '2022-05-29',
                'has_same_urls' => true, // [true, false]
                'has_same_files' => true, // [true, false]
                'base_price' =>  '5690000',
                'currency' =>  'PKR',
                'category' =>  'vehicle',
                'manufacturer' =>  'Toyota',
                'watched' =>  true,
            ]),
        ]);

        /** Coaster */
        DB::table('products')->insert([
            'name' => 'coaster',
            'data' => json_encode([
                'variants' => [
                    'coaster' => [
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.toyota-indus.com/coaster/',
                                'recent_snapshot_attempt' => null,
                                'recent_snapshot_attempted_at' => null,
                            ],
                            config('app.pages_keys.specs') => [],
                            config('app.pages_keys.performance') => [],
                            config('app.pages_keys.design') => [],
                            config('app.pages_keys.comfort') => [],
                            config('app.pages_keys.technology') => [],
                            config('app.pages_keys.convenience') => [],
                            config('app.pages_keys.price') => [],
                            config('app.pages_keys.exterior') => [],
                            config('app.pages_keys.interior') => [],
                        ],
                        'files' => [
                            config('app.files_keys.brochure') => [
                                'url' => 'https://www.toyota-indus.com/wp-content/themes/toyotaindus/page-templates/pdf/coaster.pdf',
                                'name' => 'toyota_coaster_brochure',
                            ],
                            config('app.files_keys.poster') => [],
                        ],
                        'price' => '16149000',
                    ],
                ],
                'notes' => 'Coaster is offered in many colors "White, Two Tone WHITE & TURQUOISE, Two Tone WHITE & LAVENDER,
                            Two Tone LAVENDER BLUE & WHITE, Two Tone WHITE & BEIGE". As per webpage content, specs and performance
                            is same across all colors.',
                'notes_added_on' => '2022-05-29',
                'has_same_urls' => true, // [true, false]
                'has_same_files' => true, // [true, false]
                'base_price' =>  '16149000',
                'currency' =>  'PKR',
                'category' =>  'vehicle',
                'manufacturer' =>  'Toyota',
                'watched' =>  true,
            ]),
        ]);
    }
}
