<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HondaBikesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // TODO: Add all page & file keys as per config/app.php
        /** CB150F */
        DB::table('products')->insert([
            'name' => 'cb150f',
            'data' => json_encode([
                'variants' => [
                    'red' => [
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.atlashonda.com.pk/cb-150f-red/',
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
                                'url' => 'https://www.atlashonda.com.pk/wp-content/uploads/2021/10/CB150F-leaflet-2021.pdf',
                                'name' => 'honda_cb150f_brochure',
                            ],
                            config('app.files_keys.poster') => [
                                'url' => 'https://www.atlashonda.com.pk/wp-content/uploads/2021/06/1139x375.jpg',
                                'name' => 'honda_cb150f_poster',
                            ],
                            config('app.files_keys.price') => [],
                        ],
                        'price' => '299900',
                    ],
                    'gray' => [
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.atlashonda.com.pk/cb-150f-grey/',
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
                                'url' => 'https://www.atlashonda.com.pk/wp-content/uploads/2021/10/CB150F-leaflet-2021.pdf',
                                'name' => 'honda_cb150f_brochure',
                            ],
                            config('app.files_keys.poster') => [
                                'url' => 'https://www.atlashonda.com.pk/wp-content/uploads/2021/06/1139x375.jpg',
                                'name' => 'honda_cb150f_poster',
                            ],
                        ],
                        'price' => '303900',
                    ],
                    'black' => [
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.atlashonda.com.pk/cb-150f-black/',
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
                                'url' => 'https://www.atlashonda.com.pk/wp-content/uploads/2021/10/CB150F-leaflet-2021.pdf',
                                'name' => 'honda_cb150f_brochure',
                            ],
                            config('app.files_keys.poster') => [
                                'url' => 'https://www.atlashonda.com.pk/wp-content/uploads/2021/06/1139x375.jpg',
                                'name' => 'honda_cb150f_poster',
                            ],
                        ],
                        'price' => '299000',
                    ],
                ],
                'notes' => '',
                'notes_added_on' => '2022-05-31',
                'has_same_urls' => false, // [true, false]
                'has_same_files' => true, // [true, false]
                'base_price' =>  '299000',
                'currency' =>  'PKR',
                'category' =>  'bike',
                'manufacturer' =>  'Honda',
                'watched' =>  true,
            ]),
        ]);

        /** CB125F */
        DB::table('products')->insert([
            'name' => 'cb125f',
            'data' => json_encode([
                'variants' => [
                    'red' => [
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.atlashonda.com.pk/cb-125f-red/',
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
                                'url' => 'https://www.atlashonda.com.pk/wp-content/uploads/2020/11/cb125f-brochure.pdf',
                                'name' => 'cb125f_brochure',
                            ],
                            config('app.files_keys.poster') => [
                                'url' => 'https://www.atlashonda.com.pk/wp-content/uploads/2020/11/Download-Poster-CB125-converted.pdf',
                                'name' => 'cb125f_poster',
                            ],
                        ],
                        'price' => '244900',
                    ],
                    'blue' => [
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.atlashonda.com.pk/cb-125f-blue/',
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
                                'url' => 'https://www.atlashonda.com.pk/wp-content/uploads/2020/11/cb125f-brochure.pdf',
                                'name' => 'cb125f_brochure',
                            ],
                            config('app.files_keys.poster') => [
                                'url' => 'https://www.atlashonda.com.pk/wp-content/uploads/2020/11/Download-Poster-CB125-converted.pdf',
                                'name' => 'cb125f_poster',
                            ],
                        ],
                        'price' => '244900',
                    ],
                    'black' => [
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.atlashonda.com.pk/cb-125f-black/',
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
                                'url' => 'https://www.atlashonda.com.pk/wp-content/uploads/2020/11/cb125f-brochure.pdf',
                                'name' => 'cb125f_brochure',
                            ],
                            config('app.files_keys.poster') => [
                                'url' => 'https://www.atlashonda.com.pk/wp-content/uploads/2020/11/Download-Poster-CB125-converted.pdf',
                                'name' => 'cb125f_poster',
                            ],
                        ],
                        'price' => '244900',
                    ],
                ],
                'has_same_urls' => false, // [true, false]
                'has_same_files' => true, // [true, false]
                'base_price' =>  '244900',
                'currency' =>  'PKR',
                'category' =>  'bike',
                'manufacturer' =>  'Honda',
                'watched' =>  true,
            ]),
        ]);

       /** CG125 Self */
        DB::table('products')->insert([
            'name' => 'cg125s',
            'data' => json_encode([
                'variants' => [
                    'red' => [
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.atlashonda.com.pk/cg-125s-red-se/',
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
                                'url' => 'https://www.atlashonda.com.pk/wp-content/uploads/2022/02/CG125-Leaflet-2021-FINAL_compressed.pdf',
                                'name' => 'honda_cg125s_brochure',
                            ],
                            config('app.files_keys.poster') => [
                                'url' => 'https://www.atlashonda.com.pk/wp-content/uploads/2022/02/CG-125-%E2%80%93-Self-02.pdf',
                                'name' => 'honda_cg125s_poster',
                            ],
                            config('app.files_keys.price') => [],
                        ],
                        'price' => '193500',
                    ],
                    'black' => [
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.atlashonda.com.pk/cg-125s-black-se/',
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
                                'url' => 'https://www.atlashonda.com.pk/wp-content/uploads/2022/02/CG125-Leaflet-2021-FINAL_compressed.pdf',
                                'name' => 'honda_cg125s_brochure',
                            ],
                            config('app.files_keys.poster') => [
                                'url' => 'https://www.atlashonda.com.pk/wp-content/uploads/2022/02/CG-125-%E2%80%93-Self-02.pdf',
                                'name' => 'honda_cg125s_poster',
                            ],
                            config('app.files_keys.price') => [],
                        ],
                        'price' => '193500',
                    ],
                ],
                'notes' => '',
                'notes_added_on' => '2022-05-31',
                'has_same_urls' => false, // [true, false]
                'has_same_files' => true, // [true, false]
                'base_price' =>  '193500',
                'currency' =>  'PKR',
                'category' =>  'bike',
                'manufacturer' =>  'Honda',
                'watched' =>  true,
            ]),
        ]);

        /** CG125 */
        DB::table('products')->insert([
            'name' => 'cg125',
            'data' => json_encode([
                'variants' => [
                    'red' => [
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.atlashonda.com.pk/cg-125-red/',
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
                                'url' => 'https://www.atlashonda.com.pk/wp-content/uploads/2021/12/CG125-Leaflet-Dec-24.pdf',
                                'name' => 'honda_cg125_brochure',
                            ],
                            config('app.files_keys.poster') => [
                                'url' => 'https://www.atlashonda.com.pk/wp-content/uploads/2022/02/CG125-poster.pdf',
                                'name' => 'honda_cg125_poster',
                            ],
                            config('app.files_keys.price') => [],
                        ],
                        'price' => '163500',
                    ],
                    'black' => [
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.atlashonda.com.pk/cg-125-black/',
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
                                'url' => 'https://www.atlashonda.com.pk/wp-content/uploads/2021/12/CG125-Leaflet-Dec-24.pdf',
                                'name' => 'honda_cg125_brochure',
                            ],
                            config('app.files_keys.poster') => [
                                'url' => 'https://www.atlashonda.com.pk/wp-content/uploads/2022/02/CG125-poster.pdf',
                                'name' => 'honda_cg125_poster',
                            ],
                            config('app.files_keys.price') => [],
                        ],
                        'price' => '163500',
                    ],
                ],
                'notes' => '',
                'notes_added_on' => '2022-05-31',
                'has_same_urls' => false, // [true, false]
                'has_same_files' => true, // [true, false]
                'base_price' =>  '163500',
                'currency' =>  'PKR',
                'category' =>  'bike',
                'manufacturer' =>  'Honda',
                'watched' =>  true,
            ]),
        ]);

        /** Pridor */
        DB::table('products')->insert([
            'name' => 'pridor',
            'data' => json_encode([
                'variants' => [
                    'red' => [
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.atlashonda.com.pk/pridor-red/',
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
                                'url' => 'https://www.atlashonda.com.pk/wp-content/uploads/2022/01/prider-leaflet-2021.pdf',
                                'name' => 'honda_pridor_brochure',
                            ],
                            config('app.files_keys.poster') => [
                                'url' => 'https://www.atlashonda.com.pk/wp-content/uploads/2021/11/pridor-poster.pdf',
                                'name' => 'honda_pridor_poster',
                            ],
                            config('app.files_keys.price') => [],
                        ],
                        'price' => '139900',
                    ],
                    'black' => [
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.atlashonda.com.pk/pridor-black/',
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
                                'url' => 'https://www.atlashonda.com.pk/wp-content/uploads/2022/01/prider-leaflet-2021.pdf',
                                'name' => 'honda_pridor_brochure',
                            ],
                            config('app.files_keys.poster') => [
                                'url' => 'https://www.atlashonda.com.pk/wp-content/uploads/2021/11/pridor-poster.pdf',
                                'name' => 'honda_pridor_poster',
                            ],
                            config('app.files_keys.price') => [],
                        ],
                        'price' => '139900',
                    ],
                    'blue' => [
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.atlashonda.com.pk/pridor-blue/',
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
                                'url' => 'https://www.atlashonda.com.pk/wp-content/uploads/2022/01/prider-leaflet-2021.pdf',
                                'name' => 'honda_pridor_brochure',
                            ],
                            config('app.files_keys.poster') => [
                                'url' => 'https://www.atlashonda.com.pk/wp-content/uploads/2021/11/pridor-poster.pdf',
                                'name' => 'honda_pridor_poster',
                            ],
                            config('app.files_keys.price') => [],
                        ],
                        'price' => '139900',
                    ],
                ],
                'notes' => '',
                'notes_added_on' => '2022-05-31',
                'has_same_urls' => false, // [true, false]
                'has_same_files' => true, // [true, false]
                'base_price' =>  '139900',
                'currency' =>  'PKR',
                'category' =>  'bike',
                'manufacturer' =>  'Honda',
                'watched' =>  true,
            ]),
        ]);

        /** CD70 Dream */
        DB::table('products')->insert([
            'name' => 'cd70_dream',
            'data' => json_encode([
                'variants' => [
                    'red' => [
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.atlashonda.com.pk/cd-70-dream-red/',
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
                                'url' => 'https://www.atlashonda.com.pk/wp-content/uploads/2021/12/CD-DREAM-Leaflet-2021-FINAL.pdf',
                                'name' => 'honda_cd70_dream_brochure',
                            ],
                            config('app.files_keys.poster') => [
                                'url' => 'https://www.atlashonda.com.pk/wp-content/uploads/2022/02/cd-70-dream-poster.pdf',
                                'name' => 'honda_cd70_dream_poster',
                            ],
                            config('app.files_keys.price') => [],
                        ],
                        'price' => '109500',
                    ],
                    'black' => [
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.atlashonda.com.pk/cd-70-dream-black/',
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
                                'url' => 'https://www.atlashonda.com.pk/wp-content/uploads/2021/12/CD-DREAM-Leaflet-2021-FINAL.pdf',
                                'name' => 'honda_cd70_dream_brochure',
                            ],
                            config('app.files_keys.poster') => [
                                'url' => 'https://www.atlashonda.com.pk/wp-content/uploads/2022/02/cd-70-dream-poster.pdf',
                                'name' => 'honda_cd70_dream_poster',
                            ],
                            config('app.files_keys.price') => [],
                        ],
                        'price' => '109500',
                    ],
                    'silver' => [
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.atlashonda.com.pk/cd-70-dream-silver/',
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
                                'url' => 'https://www.atlashonda.com.pk/wp-content/uploads/2021/12/CD-DREAM-Leaflet-2021-FINAL.pdf',
                                'name' => 'honda_cd70_dream_brochure',
                            ],
                            config('app.files_keys.poster') => [
                                'url' => 'https://www.atlashonda.com.pk/wp-content/uploads/2022/02/cd-70-dream-poster.pdf',
                                'name' => 'honda_cd70_dream_poster',
                            ],
                            config('app.files_keys.price') => [],
                        ],
                        'price' => '109500',
                    ],
                ],
                'notes' => '',
                'notes_added_on' => '2022-05-31',
                'has_same_urls' => false, // [true, false]
                'has_same_files' => true, // [true, false]
                'base_price' =>  '109500',
                'currency' =>  'PKR',
                'category' =>  'bike',
                'manufacturer' =>  'Honda',
                'watched' =>  true,
            ]),
        ]);

        /**  */
        DB::table('products')->insert([
            'name' => 'cd70',
            'data' => json_encode([
                'variants' => [
                    'red' => [
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.atlashonda.com.pk/cd-70-red/',
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
                                'url' => 'https://www.atlashonda.com.pk/wp-content/uploads/2021/11/honda-cd70-leaflet-2020-output.pdf',
                                'name' => 'cd_70_brochure',
                            ],
                            config('app.files_keys.poster') => [
                                'url' => 'https://www.atlashonda.com.pk/wp-content/uploads/2021/04/CD-70-1920x860-1.pdf',
                                'name' => 'cd_70_poster',
                            ],
                            config('app.files_keys.price') => [],
                        ],
                        'price' => '102900',
                    ],
                    'black' => [
                        'pages' => [
                            config('app.pages_keys.main') => [
                                'url' => 'https://www.atlashonda.com.pk/cd-70-black/',
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
                                'url' => 'https://www.atlashonda.com.pk/wp-content/uploads/2021/11/honda-cd70-leaflet-2020-output.pdf',
                                'name' => 'cd_70_brochure',
                            ],
                            config('app.files_keys.poster') => [
                                'url' => 'https://www.atlashonda.com.pk/wp-content/uploads/2021/04/CD-70-1920x860-1.pdf',
                                'name' => 'cd_70_poster',
                            ],
                            config('app.files_keys.price') => [],
                        ],
                        'price' => '102900',
                    ],
                ],
                'notes' => '',
                'notes_added_on' => '2022-05-31',
                'has_same_urls' => false, // [true, false]
                'has_same_files' => true, // [true, false]
                'base_price' =>  '102900',
                'currency' =>  'PKR',
                'category' =>  'bike',
                'manufacturer' =>  'Honda',
                'watched' =>  true,
            ]),
        ]);
    }
}
