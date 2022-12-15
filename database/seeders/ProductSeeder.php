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
            [
                'name' => 'Realme 5 pro',
                'price' => '3000000',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid, fugit. Saepe, ratione eos placeat recusandae doloremque dignissimos voluptate sapiente maiores. Modi dolore, impedit porro odit veritatis illum accusantium eligendi quidem quae, reiciendis fuga sit temporibus voluptatum autem sint voluptate. Dicta et delectus pariatur blanditiis sint quae placeat rerum quaerat sapiente.',
                'category' => 'mobile',
                'gallery' => 'https://www.droidlime.com/wp-content/uploads/2019/08/realme-5-pro-1.jpg',
            ],
            [
                'name' => 'Samsung S22',
                'price' => '5000000',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid, fugit. Saepe, ratione eos placeat recusandae doloremque dignissimos voluptate sapiente maiores. Modi dolore, impedit porro odit veritatis illum accusantium eligendi quidem quae, reiciendis fuga sit temporibus voluptatum autem sint voluptate. Dicta et delectus pariatur blanditiis sint quae placeat rerum quaerat sapiente.',
                'category' => 'mobile',
                'gallery' => 'https://images.samsung.com/id/smartphones/galaxy-s22-ultra/images/galaxy-s22-ultra_highlights_kv_img.jpg',
            ],
            [
                'name' => 'Samsung smart digital',
                'price' => '9000000',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid, fugit. Saepe, ratione eos placeat recusandae doloremque dignissimos voluptate sapiente maiores. Modi dolore, impedit porro odit veritatis illum accusantium eligendi quidem quae, reiciendis fuga sit temporibus voluptatum autem sint voluptate. Dicta et delectus pariatur blanditiis sint quae placeat rerum quaerat sapiente.',
                'category' => 'tv',
                'gallery' => 'https://cf.shopee.co.id/file/5d0c1bbfd6d70d5f537f01ca599ead3f',
            ],
            [
                'name' => 'T-Shirt uniqlo',
                'price' => '400000',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid, fugit. Saepe, ratione eos placeat recusandae doloremque dignissimos voluptate sapiente maiores. Modi dolore, impedit porro odit veritatis illum accusantium eligendi quidem quae, reiciendis fuga sit temporibus voluptatum autem sint voluptate. Dicta et delectus pariatur blanditiis sint quae placeat rerum quaerat sapiente.',
                'category' => 't-shirt',
                'gallery' => 'https://image.uniqlo.com/UQ/ST3/AsianCommon/imagesgoods/422992/sub/goods_422992_sub14.jpg?width=1600&impolicy=quality_75',
            ],
            [
                'name' => 'Realme 7',
                'price' => '4500000',
                'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid, fugit. Saepe, ratione eos placeat recusandae doloremque dignissimos voluptate sapiente maiores. Modi dolore, impedit porro odit veritatis illum accusantium eligendi quidem quae, reiciendis fuga sit temporibus voluptatum autem sint voluptate. Dicta et delectus pariatur blanditiis sint quae placeat rerum quaerat sapiente.',
                'category' => 'mobile',
                'gallery' => 'https://image01.realme.net/general/20200915/1600139203504.jpg.webp',
            ],
        ]);
    }
}