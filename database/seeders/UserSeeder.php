<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = [
            [
                'name'=>'Dionisius Avelino',
                'email'=>'dionisius@gmail.com',
                'password'=>bcrypt('avel123'),
                'phone_number'=>'0812345678',
                'role'=>'admin'
            ],
            [
                'name'=>'Sherly Patricia',
                'email'=>'sherly@gmail.com',
                'password'=>bcrypt('sherly123'),
                'phone_number'=>'0812345679',
                'role'=>'admin'
            ]
        ];

        DB::table('users')->insert($admin);

        DB::table('users')->insert([
            'name'=>'Justin',
            'email'=>'justin@gmail.com',
            'password'=>bcrypt('justin123'),
            'phone_number'=>'0812345670'
        ]);
    }
}
