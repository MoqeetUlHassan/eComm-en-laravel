<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(
            [
             'name'=> 'lg',
             'price' => '100',
             'description' => '12345',
             'category' => 'mobile'   
            ]);
    }
}
