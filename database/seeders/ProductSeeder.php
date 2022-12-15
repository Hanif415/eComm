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
        DB::table('products')->insert([
            'name' => 'Realme 5 pro',
            'price' => '3000000',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid, fugit. Saepe, ratione eos placeat recusandae doloremque dignissimos voluptate sapiente maiores. Modi dolore, impedit porro odit veritatis illum accusantium eligendi quidem quae, reiciendis fuga sit temporibus voluptatum autem sint voluptate. Dicta et delectus pariatur blanditiis sint quae placeat rerum quaerat sapiente.',
            'category' => 'mobile',
            'gallery' => 'https://www.droidlime.com/wp-content/uploads/2019/08/realme-5-pro-1.jpg',
        ]);
    }
}