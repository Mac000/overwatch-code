<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuzukiBikesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'gd110s',
            'data' => json_encode([
                'pages' => [
                    config('app.pages_keys.main') => [
                        'url' => 'https://www.suzukipakistan.com/motorcycles-detail?motorcycle=44kw9dka1zazh0fbnqz506z1dy',
                        'recent_snapshot_attempt' => null,
                        'recent_snapshot_attempted_at' => null,
                    ],
                    config('app.pages_keys.specs') => [],
                    config('app.pages_keys.technology') => [],
                    config('app.pages_keys.comfort') => [],
                    config('app.pages_keys.convenience') => [],
                ],
                'variants' => [],
                'base_price' =>  '20700',
                'currency' =>  'PKR',
                'category' =>  'bike',
                'manufacturer' =>  'Suzuki',
                'watched' =>  true,
            ]),
        ]);

        DB::table('products')->insert([
            'name' => 'GSX150SF',
            'data' => json_encode([
                'pages' => [
                    config('app.pages_keys.main') => [
                        'url' => 'https://www.suzukipakistan.com/motorcycles-detail?motorcycle=4dykvhvxqehebvms6d3fgnmmd3',
                        'recent_snapshot_attempt' => null,
                        'recent_snapshot_attempted_at' => null,
                    ],
                    config('app.pages_keys.specs') => [],
                    config('app.pages_keys.technology') => [],
                    config('app.pages_keys.comfort') => [],
                    config('app.pages_keys.convenience') => [],
                ],
                'variants' => [],
                'base_price' => '599000',
                'currency' =>  'PKR',
                'category' =>  'bike',
                'manufacturer' =>  'Suzuki',
                'watched' =>  true,
            ]),
        ]);

        DB::table('products')->insert([
            'name' => 'gs150se',
            'data' => json_encode([
                'pages' => [
                    config('app.pages_keys.main') => [
                        'url' => 'https://www.suzukipakistan.com/motorcycles-detail?motorcycle=4bw67kva3hmc8vfnb99ksz8fc2',
                        'recent_snapshot_attempt' => null,
                        'recent_snapshot_attempted_at' => null,
                    ],
                    config('app.pages_keys.specs') => [],
                    config('app.pages_keys.technology') => [],
                    config('app.pages_keys.comfort') => [],
                    config('app.pages_keys.convenience') => [],
                ],
                'variants' => [],
                'base_price' =>  '242000',
                'currency' =>  'PKR',
                'category' =>  'bike',
                'manufacturer' =>  'Suzuki',
                'watched' =>  true,
            ]),
        ]);

        DB::table('products')->insert([
            'name' => 'gr150',
            'data' => json_encode([
                'pages' => [
                    config('app.pages_keys.main') => [
                        'url' => 'https://www.suzukipakistan.com/motorcycles-detail?motorcycle=403wvx5cxwvg13tdt6c3evdsne',
                        'recent_snapshot_attempt' => null,
                        'recent_snapshot_attempted_at' => null,
                    ],
                    config('app.pages_keys.specs') => [],
                    config('app.pages_keys.technology') => [],
                    config('app.pages_keys.comfort') => [],
                    config('app.pages_keys.convenience') => [],
                ],
                'variants' => [],
                'base_price' =>  '330000',
                'currency' =>  'PKR',
                'category' =>  'bike',
                'manufacturer' =>  'Suzuki',
                'watched' =>  true,
            ]),
        ]);
    }
}
