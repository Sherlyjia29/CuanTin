<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menus = [
            [
                'type'=>'Dimsum',
                'name'=>'Steamed Mantou',
                'description'=>'Plain steamed mantou with condensed milk topping.',
                'photo'=>'storage/image/menus/steamedMantao.jpg',
                'created_at'=>'2024/12/01'
            ],
            [
                'type'=>'Dimsum',
                'name'=>'Steamed Chicken Feet',
                'description'=>'Authentic steamed chicken feet with black pepper and chinese spice.',
                'photo'=>'storage/image/menus/chickenFeet.jpg',
                'created_at'=>'2024/12/01'
            ],
            [
                'type'=>'Dimsum',
                'name'=>'Steamed Shrimp Shumai',
                'description'=>'Streamed shumai dumplings with chicken and shrimp filling.',
                'photo'=>'storage/image/menus/shrimpShumai.jpg',
                'created_at'=>'2024/12/01'
            ],
            [
                'type'=>'Ala carte',
                'name'=>'Pecking Duck',
                'description'=>'Peking style roasted duck with hoisin sauce.',
                'photo'=>'storage/image/menus/pekingDuck.jpg',
                'created_at'=>'2024/12/01'
            ],
            [
                'type'=>'Ala carte',
                'name'=>'Hong-Kong Style Wonton Noodles',
                'description'=>'Hong-Kong style soup noodles with chicken wonton and greens.',
                'photo'=>'storage/image/menus/wontonNoodles.jpg',
                'created_at'=>'2024/12/01'
            ],
            [
                'type'=>'Ala carte',
                'name'=>'Yang Zhou Fried Rice',
                'description'=>'Wok Fired Yang Zhou style fried rice with chicken char siu and shrimp.',
                'photo'=>'storage/image/menus/yangZhouFR.jpg',
                'created_at'=>'2024/12/01'
            ],
            [
                'type'=>'Ala carte',
                'name'=>'XO Seafood Fried Rice',
                'description'=>'Wok Fired fried rice with seafood and XO sauce.',
                'photo'=>'storage/image/menus/xoFR.jpg',
                'created_at'=>'2024/12/01'
            ],
            [
                'type'=>'Dessert',
                'name'=>'Almond Tofu',
                'description'=>'Taiwan-style sweet almond pudding with peanuts and apricot kernels',
                'photo'=>'storage/image/menus/almondTofu.jpg',
                'created_at'=>'2024/12/01'
            ]
        ];

        DB::table('menus')->insert($menus);
    }
}
