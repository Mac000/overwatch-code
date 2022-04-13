<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Perhaps I should take keys of data property from a config file so there's only a single place
        // to add or update keys. This way, I can maintain consistency.

        // Keep product names lowercase, use underscores instead of whitespace
        // you can capitalize and trim underscores for display
        DB::table('products')->insert([
            'name' => 'ybr125',
            'data' => json_encode([
                'pages' => [
                    config('app.pages_keys.main') => 'https://www.yamaha-motor.com.pk/360-ybr-125/',
                    config('app.pages_keys.specs') => 'https://www.yamaha-motor.com.pk/technical-specifications-ybr125/',
                    config('app.pages_keys.performance') => 'https://www.yamaha-motor.com.pk/performance-ybr125/',
                    config('app.pages_keys.design') => 'https://www.yamaha-motor.com.pk/design-ybr125/',
                    config('app.pages_keys.comfort') => 'https://www.yamaha-motor.com.pk/comfort-ybr125/',
                ],
                'price' =>  '23200000',
                'currency' =>  'PKR',
                'category' =>  'bike',
                'manufacturer' =>  'Yamaha',
                'watched' =>  true,
                'recent_snapshot_attempt' => null,
                'recent_snapshot_at' => null,
                'recent_snapshot_url' => null,
            ]),
        ]);
    }
}
