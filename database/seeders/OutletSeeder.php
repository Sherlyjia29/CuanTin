<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OutletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $outlets = [
            [
                'address'=>'Pesanggrahan Rd. 125',
                'city'=>'West Jakarta',
                'opening_time'=>'08:00:00',
                'closing_time'=>'22:00:00',
                'created_at'=>'2024/12/01'
            ],
            [
                'address'=>'Malaka Rd. 24',
                'city'=>'West Jakarta',
                'opening_time'=>'05:00:00',
                'closing_time'=>'00:00:00',
                'created_at'=>'2024/12/01'
            ],
            [
               'address'=>'Living World, Alam Sutera',
               'city'=>'South Tangerang',
               'opening_time'=>'09:00:00',
               'closing_time'=>'22:00:00',
               'created_at'=>'2024/12/01'
            ],
            [
                'address'=>'Supermall Karawaci, Bencongan',
                'city'=>'Tangerang',
                'opening_time'=>'09:00:00',
                'closing_time'=>'22:00:00',
                'created_at'=>'2024/12/01'
            ],
            [
                'address'=>'Boulevard Raya Rd. 7, Kelapa Gading',
                'city'=>'North Jakarta',
                'opening_time'=>'08:00:00',
                'closing_time'=>'22:00:00',
                'created_at'=>'2024/12/01'  
            ]
        ];

        DB::table('outlets')->insert($outlets);
    }
}
