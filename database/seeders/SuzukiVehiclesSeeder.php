<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuzukiVehiclesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** Alto */
        DB::table('products')->insert([
            'name' => 'alto',
            'formatted_name' => 'Alto',
            'data' => json_encode([
                'variants' => [
                    'vxl-ags' => [
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.suzukipakistan.com/automobile-detail?automobile=49r4xpn9fhdksr54wt6assjtma',
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
                                'url' => 'https://www.suzukipakistan.com/media/Brochure%20Automobile/Alto%20Brochure%20Apr%2022.pdf',
                                'name' => 'suzuki_alto_brochure',
                            ],
                            config('app.files_keys.price') => [],
                            config('app.files_keys.poster') => [],
                        ],
                        'price' => '1951000',
                    ],
                ],
                'notes' => '',
                'notes_added_on' => '2022-05-31',
                'has_same_urls' => true, // [true, false]
                'has_same_files' => true, // [true, false]
                'base_price' =>  '1475000',
                'currency' =>  'PKR',
                'category' =>  'vehicle',
                'manufacturer' =>  'Suzuki',
                'watched' =>  true,
            ]),
        ]);

        /** WagonR */
        DB::table('products')->insert([
            'name' => 'wagonr',
            'formatted_name' => 'WagonR',
            'data' => json_encode([
                'variants' => [
                    'ags' => [
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.suzukipakistan.com/automobile-detail?automobile=4vhxh5bqhe90xr45rb0cf76v4y',
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
                                'url' => 'https://www.suzukipakistan.com/media/Brochure%20Automobile/wagonr%20Brochure%20Apr%2022.pdf',
                                'name' => 'suzuki_wagonr_brochure',
                            ],
                            config('app.files_keys.price') => [],
                            config('app.files_keys.poster') => [],
                        ],
                        'price' => '2399000',
                    ],
                ],
                'notes' => '',
                'notes_added_on' => '2022-05-31',
                'has_same_urls' => true, // [true, false]
                'has_same_files' => true, // [true, false]
                'base_price' =>  '2084000',
                'currency' =>  'PKR',
                'category' =>  'vehicle',
                'manufacturer' =>  'Suzuki',
                'watched' =>  true,
            ]),
        ]);

        /** Cultus */
        DB::table('products')->insert([
            'name' => 'cultus',
            'formatted_name' => 'Cultus',
            'data' => json_encode([
                'variants' => [
                    'ags' => [
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.suzukipakistan.com/automobile-detail?automobile=40v88tj36k3dpt2a2ykmwgmx5z',
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
                                'url' => 'https://www.suzukipakistan.com/media/Brochure%20Automobile/Cultus%20Brochure%20Apr%2022.pdf',
                                'name' => 'suzuki_cultus_brochure',
                            ],
                            config('app.files_keys.price') => [],
                            config('app.files_keys.poster') => [],
                        ],
                        'price' => '2762000',
                    ],
                ],
                'notes' => '',
                'notes_added_on' => '2022-05-31',
                'has_same_urls' => true, // [true, false]
                'has_same_files' => true, // [true, false]
                'base_price' =>  '2330000',
                'currency' =>  'PKR',
                'category' =>  'vehicle',
                'manufacturer' =>  'Suzuki',
                'watched' =>  true,
            ]),
        ]);

        /** Swift */
        DB::table('products')->insert([
            'name' => 'swift',
            'formatted_name' => 'Swift',
            'data' => json_encode([
                'variants' => [
                    'glx_cvt' => [
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.suzukipakistan.com/automobile-detail?automobile=4md2qbat3vn9dya6ve93h1k059',
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
                                'url' => 'https://www.suzukipakistan.com/media/products/New%20Swift/Brochure/PRINT-SUZUKI-REDUCE%20Size%20(Final).pdf',
                                'name' => 'suzuki_cultus_brochure',
                            ],
                            config('app.files_keys.price') => [],
                            config('app.files_keys.poster') => [],
                        ],
                        'price' => '3298000',
                    ],
                ],
                'notes' => '',
                'notes_added_on' => '2022-05-31',
                'has_same_urls' => true, // [true, false]
                'has_same_files' => true, // [true, false]
                'base_price' =>  '2774000',
                'currency' =>  'PKR',
                'category' =>  'vehicle',
                'manufacturer' =>  'Suzuki',
                'watched' =>  true,
            ]),
        ]);

        /** Jimmy */
        DB::table('products')->insert([
            'name' => 'jimmy',
            'formatted_name' => 'Jimmy',
            'data' => json_encode([
                'variants' => [
                    'ga_mt' => [
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.suzukipakistan.com/automobile-detail?automobile=4ax7c9h2sn3ec4brxpnvvbh5cm',
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
                                'url' => 'https://www.suzukipakistan.com/media/Brochure%20Automobile/Jimny%20Brochure%20Apr%2022.pdf',
                                'name' => 'suzuki_jimmy_brochure',
                            ],
                            config('app.files_keys.price') => [],
                            config('app.files_keys.poster') => [],
                        ],
                        'price' => '6049000',
                    ],
                ],
                'notes' => '',
                'notes_added_on' => '2022-05-31',
                'has_same_urls' => true, // [true, false]
                'has_same_files' => true, // [true, false]
                'base_price' =>  '6049000',
                'currency' =>  'PKR',
                'category' =>  'vehicle',
                'manufacturer' =>  'Suzuki',
                'watched' =>  true,
            ]),
        ]);

        /** APV */
        DB::table('products')->insert([
            'name' => 'apv',
            'formatted_name' => 'APV',
            'data' => json_encode([
                'variants' => [
                    '1-5l' => [
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.suzukipakistan.com/automobile-detail?automobile=4g8z3sa64t3ahvhs7y7rgtebx7',
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
                                'url' => 'https://www.suzukipakistan.com/media/Brochure%20Automobile/APV%20Flyer%20Apr%2022.pdf',
                                'name' => 'suzuki_apv_brochure',
                            ],
                            config('app.files_keys.price') => [],
                            config('app.files_keys.poster') => [],
                        ],
                        'price' => '6290000',
                    ],
                ],
                'notes' => '',
                'notes_added_on' => '2022-05-31',
                'has_same_urls' => true, // [true, false]
                'has_same_files' => true, // [true, false]
                'base_price' =>  '6290000',
                'currency' =>  'PKR',
                'category' =>  'vehicle',
                'manufacturer' =>  'Suzuki',
                'watched' =>  true,
            ]),
        ]);

        /** Bolan */
        DB::table('products')->insert([
            'name' => 'bolan',
            'formatted_name' => 'Bolan',
            'data' => json_encode([
                'variants' => [
                    'ac' => [
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.suzukipakistan.com/automobile-detail?automobile=4r3y9qgcaavppxfn8xt5dy0ccr',
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
                                'url' => 'https://www.suzukipakistan.com/media/Brochure%20Automobile/Bolan%20Flyer%20Apr%2022.pdf',
                                'name' => 'suzuki_bolan_brochure',
                            ],
                            config('app.files_keys.price') => [],
                            config('app.files_keys.poster') => [],
                        ],
                        'price' => '1415000',
                    ],
                ],
                'notes' => '',
                'notes_added_on' => '2022-05-31',
                'has_same_urls' => true, // [true, false]
                'has_same_files' => true, // [true, false]
                'base_price' =>  '1328000',
                'currency' =>  'PKR',
                'category' =>  'vehicle',
                'manufacturer' =>  'Suzuki',
                'watched' =>  true,
            ]),
        ]);

        /** Ravi */
        DB::table('products')->insert([
            'name' => 'ravi',
            'formatted_name' => 'Ravi',
            'data' => json_encode([
                'variants' => [
                    'std' => [
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.suzukipakistan.com/automobile-detail?automobile=45fc4er5hjxkmwz2tbasvr2hde',
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
                                'url' => 'https://www.suzukipakistan.com/media/Brochure%20Automobile/Ravi%20Flyer%20Apr%2022.pdf',
                                'name' => 'suzuki_ravi_brochure',
                            ],
                            config('app.files_keys.price') => [],
                            config('app.files_keys.poster') => [],
                        ],
                        'price' => '1256000',
                    ],
                ],
                'notes' => '',
                'notes_added_on' => '2022-05-31',
                'has_same_urls' => true, // [true, false]
                'has_same_files' => true, // [true, false]
                'base_price' =>  '1181000',
                'currency' =>  'PKR',
                'category' =>  'vehicle',
                'manufacturer' =>  'Suzuki',
                'watched' =>  true,
            ]),
        ]);
    }
}
